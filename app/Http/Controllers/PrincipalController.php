<?php

namespace Illuminate\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller{
    public function principal(){
        return view('site.principal');
    }
}