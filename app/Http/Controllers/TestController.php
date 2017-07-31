<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($name,$officename){
    	return $name."and office location is " .$officename;
    }
}
