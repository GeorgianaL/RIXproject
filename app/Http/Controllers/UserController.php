<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validate;
use App\User;
use Hash;
use Auth;
use App\Preference;

class UserController extends Controller
{
    public function signup(Request $request) {
    	$this->validate($request, [
    		'fullname' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:6'
    		]);
    	$user = new User();
    	$user->full_name = $request->input('fullname');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();
    	return redirect('/');
    }
    public function login(Request $request) {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    		]);
    	 if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return 'Login successfull!';
        }
        else return "Login fail!";
    }
    public function logout() {
    	Auth::logout();
    	return redirect('/');
    }
	public function savePreferances(Request $request) {
		$data = $request->all();
		$user = Auth::user();
		if (Preference::where('id_user', $user->id)->count() == 0) {
			$preference = new Preference();
			$preference->id_user = $user->id;
			if (isset($data['java'])) $preference->java = 1;
			else $preference->java = 0;
			if (isset($data['net'])) $preference->net = 1;
			else $preference->net = 0;
			if (isset($data['android'])) $preference->android = 1;
			else $preference->android = 0;
			if (isset($data['ios'])) $preference->ios = 1;
			else $preference->html = 0;
			if (isset($data['html'])) $preference->html = 1;
			else $preference->html = 0;
			if (isset($data['css'])) $preference->css = 1;
			else $preference->css = 0;
			if (isset($data['javascript'])) $preference->javascript = 1;
			else $preference->javascript = 0;
			if (isset($data['web'])) $preference->web = 1;
			else $preference->web = 0;
			if (isset($data['apis'])) $preference->apis = 1;
			else $preference->apis = 0;
			if (isset($data['architecture'])) $preference->architecture = 1;
			else $preference->architecture = 0;
			if (isset($data['design'])) $preference->design = 1;
			else $preference->design = 0;
			if (isset($data['methodology'])) $preference->methodology = 1;
			else $preference->methodology = 0;
			if (isset($data['frameworks'])) $preference->frameworks = 1;
			else $preference->frameworks = 0;
			if (isset($data['tools'])) $preference->tools = 1;
			else $preference->tools = 0;
			if (isset($data['machine_learning'])) $preference->machine_learning = 1;
			else $preference->machine_learning = 0;
			if (isset($data['data_bases'])) $preference->data_bases = 1;
			else $preference->data_bases = 0;
			if (isset($data['performance'])) $preference->performance = 1;
			else $preference->performance = 0;
			if (isset($data['productivity'])) $preference->productivity = 1;
			else $preference->productivity = 0;
			if (isset($data['cloud'])) $preference->cloud = 1;
			else $preference->cloud = 0;
			if (isset($data['automation'])) $preference->automation = 1;
			else $preference->automation = 0;
			if (isset($data['testing'])) $preference->testing = 1;
			else $preference->testing = 0;
			if (isset($data['security'])) $preference->security = 1;
			else $preference->security = 0;
			$preference->save();
		}
		else {
			$preference = Preference::where('id_user', $user->id)->first();
			if (isset($data['java'])) $preference->java = 1;
			else $preference->java = 0;
			if (isset($data['net'])) $preference->net = 1;
			else $preference->net = 0;
			if (isset($data['android'])) $preference->android = 1;
			else $preference->android = 0;
			if (isset($data['ios'])) $preference->ios = 1;
			else $preference->html = 0;
			if (isset($data['html'])) $preference->html = 1;
			else $preference->html = 0;
			if (isset($data['css'])) $preference->css = 1;
			else $preference->css = 0;
			if (isset($data['javascript'])) $preference->javascript = 1;
			else $preference->javascript = 0;
			if (isset($data['web'])) $preference->web = 1;
			else $preference->web = 0;
			if (isset($data['apis'])) $preference->apis = 1;
			else $preference->apis = 0;
			if (isset($data['architecture'])) $preference->architecture = 1;
			else $preference->architecture = 0;
			if (isset($data['design'])) $preference->design = 1;
			else $preference->design = 0;
			if (isset($data['methodology'])) $preference->methodology = 1;
			else $preference->methodology = 0;
			if (isset($data['frameworks'])) $preference->frameworks = 1;
			else $preference->frameworks = 0;
			if (isset($data['tools'])) $preference->tools = 1;
			else $preference->tools = 0;
			if (isset($data['machine_learning'])) $preference->machine_learning = 1;
			else $preference->machine_learning = 0;
			if (isset($data['data_bases'])) $preference->data_bases = 1;
			else $preference->data_bases = 0;
			if (isset($data['performance'])) $preference->performance = 1;
			else $preference->performance = 0;
			if (isset($data['productivity'])) $preference->productivity = 1;
			else $preference->productivity = 0;
			if (isset($data['cloud'])) $preference->cloud = 1;
			else $preference->cloud = 0;
			if (isset($data['automation'])) $preference->automation = 1;
			else $preference->automation = 0;
			if (isset($data['testing'])) $preference->testing = 1;
			else $preference->testing = 0;
			if (isset($data['security'])) $preference->security = 1;
			else $preference->security = 0;
			$preference->save();
		}
		return redirect('/');
	}
}
