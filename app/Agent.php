<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //

    protected $fillables = [

        'name', 'email', 'password', 'phone', 'city', 'state', 'country', 'working_hours', 'pay_day', 'email_verify', 'last_login', 'login_ip'
    ];

    protected $table = "agents";
}
