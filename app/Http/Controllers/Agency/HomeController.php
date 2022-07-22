<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Agent;
use App\AgentActivity;
use App\Payment;
use App\Referrals;
use App\AgentTask;
use Illuminate\Support\Facades\Session;
use App\AgentWallet;
use Illuminate\Support\Facades\Validator;
use App\Salary;
use Carbon\Carbon;


class HomeController extends Controller
{
    //

    public function __construct()
    {
       
     //   return $this->middleware('agent');
       
    }
    public function Index(){
        $date = Carbon::now()->addDays(-14);
        $data['agent'] = Agent::where('id', agent_user()->id)->first();
        $data['referrals'] = Referrals::where('agent_id', agent_user()->id)->get();
        $data['referral'] = Referrals::where('agent_id', agent_user()->id)->where('created_at', '>', $date)->get();
        $data['payments'] = Payment::where('agent_id', agent_user()->id)->get();
        $data['payment'] = Payment::where('agent_id', agent_user()->id)->where('created_at', '>', $date)->get();
        $data['wallet'] = AgentWallet::where('agent_id', agent_user()->id)->first();
        $data['task'] = AgentTask::where('agent_id', agent_user()->id)->get();
        $data['completed_task'] = AgentTask::where(['agent_id' => agent_user()->id])->where('completion', '=', '100')->where('created_at', '>', $date)->get();
        $data['activity'] = AgentActivity::where('agent_id', agent_user()->id)->where('created_at', '>', $date)->get();
        $data['activities'] = AgentActivity::where('agent_id', agent_user()->id)->get();
        $data['next_salary'] = Salary::where('agent_id', agent_user()->id)->latest()->first();
        return view('agency.home', $data);
    }

    public function Task(){
        return view('agency.task')
        ->with('tasks', AgentTask::where('agent_id', agent_user()->id)->get());
    }

    public function Payments(){
        return view('agency.payments')
        ->with('payments', Payment::where('agent_id', agent_user()->id)->latest()->get());
    }

    public function SalaryPayments(){
        return view('agency.salary')
        ->with('payments', Salary::where('agent_id', agent_user()->id)->get());
    }

    public function SalaryInvoice(Request $request){

        $valid = Validator::make($request->all(), [
            'amount' => 'required|min:100',
            'payment_method' => 'required',
            'wallet_address' => 'required'
        ]);
        if($valid->fails()){
            Session::flash('alert', 'error');
            Session::flash('msg', $valid->errors()->first());
            return back();
        }


        $agentWallet = agent_user()->wallets->payments;
        if($agentWallet < $request->amount){
            Session::flash('alert', 'error');
            Session::flash('msg', "Amount is greater than your Available Balance");
        }
        $payment = Salary::where('agent_id', agent_user()->id)->latest()->first();
        $now = Carbon::now();
        if($payment->pay_day > $now){
        
            dd($payment->pay_day);
        }

        dd($now);

        $ref = generate_reference();
        $salary = new Salary;
        $salary->ref = $ref;
        $salary->agent_id = agent_user()->id;
        $salary->amount = $request->amount;
        $salary->payment_method = $request->payment_method;
        $salary->wallet_address = $request->wallet_address;
        $salary->is_approved = 0;

        if($salary->save()){
            Session::flash('alert', 'success');
            Session::flash('msg', 'Invoice Generated Successfully');
            return redirect()->back();
        }

    }

}
