<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Preferences;
use Validate;

class PreferencesController extends Controller
{
    public function addPref(Request $request){
    	
    	$preferences = new Preferences();
    	
    	$preferences->save();
    }

    public function deletePref(){

    }
}
