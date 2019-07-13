<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
	private function userFields($user)
	{
		$fields = [];
		$fields['name'] = $user->name;
		$fields['email'] = $user->email;
		$fields['mobile'] = $user->mobile;
		$fields['profile'] = Storage::url($user->profile);
		return $fields;
	}

    public function login(Request $request){
    	$rules = [
    		'email' => 'required|email',
    		'password' => 'required'
    	];

    	if($this->apiValidation($request->all(), $rules)) {
    		if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    			$user = Auth::user();
    			$this->response['data']['token'] = $user->createToken('demo')->accessToken; 
    			$this->response['data']['user'] = $this->userFields($user);
    			$this->response['message'] = 'User logged in successfully.';
    			$this->status = 200;
    		} else {
    			$this->response['message'] = "We can't find user with this credential.";
    			$this->status = 401;
    		}
    	}
    	return $this->return_response();	
    }

    public function register(Request $request) {
		$rules = [
			'name' => 'required',
    		'email' => 'required|email|unique:customers',
    		'password' => 'required',
			'mobile' => 'required',
			'profile' => 'image'
    	];    	

    	if($this->apiValidation($request->all(), $rules)) {
    		$user = new User;
    		$user->name = $request->name;
    		$user->email = $request->email;
    		$user->password = Hash::make($request->password);
    		$user->mobile = $request->mobile;

    		if($request->hasFile('profile')){
    			$user->profile = $request->file('profile')->store('users');
    		}
    		$user->save();

    		$this->response['data'] = $this->userFields($user);
			$this->response['message'] = 'User registered successfully.';
			$this->status = 200;
    	}

    	return $this->return_response();
    }

    public function editProfile(Request $request) {
		$rules = [
			'name' => 'required',
    		'email' => 'required|email|unique:customers,email,' . Auth::id(),
			'mobile' => 'required',
			'profile' => 'image'
    	];    	

    	if($this->apiValidation($request->all(), $rules)) {
    		$user = Auth::user();
    		$user->name = $request->name;
    		$user->email = $request->email;
    		$user->mobile = $request->mobile;

    		if($request->hasFile('profile')){
    			Storage::delete($user->profile);
    			$user->profile = $request->file('profile')->store('users');
    		}
    		$user->save();

    		$this->response['data'] = $this->userFields($user);
			$this->response['message'] = 'User details updated successfully.';
			$this->status = 200;
    	}

    	return $this->return_response();
    }

    public function myProfile()
    {
    	$this->response['data'] = $this->userFields(Auth::user());
		$this->response['message'] = 'Profile retrived successfully.';
		$this->status = 200;
    	return $this->return_response();
    }

    public function logout() {
    	Auth::user()->token()->revoke();
    	$this->response['message'] = 'User logged out successfully.';
		$this->status = 200;
		return $this->return_response();
    }
}
