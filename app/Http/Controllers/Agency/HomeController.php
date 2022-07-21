<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Agent;
use App\Payment;
use App\Referrals;
use App\Task;
use App\AgentWallet;

class HomeController extends Controller
{
    //

    public function __construct()
    {
       
     //   return $this->middleware('agent');
       
    }
    public function Index(){
        $working_hours = Agent::where('id', auth('agent')->user()->id)->first();
        return view('agency.home');
    }


}
