<?php

namespace Illuminate\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller{
    public function test(int $p1, int $p2){
        return view('site.teste')->with('xyz', $p1)->with('zzz', $p2);
    }
}