<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BugController extends Controller
{
    public function store(){
        ddd(request());
        return route('home');
    }
}
