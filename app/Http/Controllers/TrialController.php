<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrialController extends Controller
{
    function getData(){

        return ["name"=>"Juliet", "email"=>"me@email.com", "address"=>"Nairobi"];
    }
}
