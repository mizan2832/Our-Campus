<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BioController extends Controller
{
    public function getProfile(){
    	return view('profile.index');
    }
}
