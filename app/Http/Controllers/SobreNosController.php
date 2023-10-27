<?php

namespace Illuminate\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller{
    public function sobreNos(){
        return view('site.sobrenos');
    }
}