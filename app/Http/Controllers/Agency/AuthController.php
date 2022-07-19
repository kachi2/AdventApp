<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Mail\AgentRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Agent;
use Illuminate\Support\Facades\Mail;
class AuthController extends Controller
{
    //
    public function register(){
        return view('agency.register');
    }

    public function registers(Request $req){
    
    $valid = Validator::make($req->all(), [
        'name' => 'required',
        'email' => 'required|unique:agents',
        'phone' => 'required|unique:agents',
    ]);
        if($valid->fails()){
            return redirect()->withErrors($valid)->withInput($req->all())->back();
        }
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone
        ];
        $agent = new Agent;
        $agent->name = $req->name;
        $agent->email = $req->email;
        $agent->phone = $req->phone;

        if($agent->save()){
        mail::to($req->email)->send(new AgentRegistration($data));
        Session::flash('alert', 'success');
        Session::flash('msg', 'Agent Created Successully');
        return redirect()->back();
        }
    }

}
