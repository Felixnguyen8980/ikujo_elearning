<?php

namespace App\Http\Controllers;
use Session;
use App\users;
use Illuminate\Http\Request;

class IkujoController extends Controller
{
    //
    public function adminpage(){
    	if(Session::get('users.masters')){
    		return view('managerview/admin');
    	} else {
    		return redirect()->route('adminlogin');
    	}
    }
    public function adminlogin(){
    	return view('managerview/adminlogin');
    }
    public function checkadminlogin(Request $request){
    	$login = users::where('username',$request->username)->where('password',md5($request->password))->first();
    	if($login){
    	 	if(!$login->masters()){
    	 		return redirect()->route('adminlogin')
    	 		->with('loginabort',"you are not master");
    	 	} else {
    	 		$request->session()->put('users', $login);
    	 		return redirect()->route('adminpage');
    	 	}
    	 } else {
    	 	return redirect()->route('adminlogin')
    	 	->with('loginabort',"username/password do not match");
    	 }
    }
    public function adminhome(){
    	if(Session::get('users.roles_id')!=1){
    	 	return redirect()->route('adminlogin');
    	} else {
    		return view('managerview/admin');
    	}
    }
    public function admin_handles(Request $request){
    	if(Session::get('users.roles_id')!=1){
    		switch ($request->selected) {
    			case 'Dashboard':
    				//$this->admin_Dashboard();


    				break;
    			
    			default:
    				# code...
    				break;
    		}

    	} else {
    		return view('managerview/admin');
    	}
    }
    public function logout(){
    	Session::flush();
    	return redirect()->route('adminlogin');
    }
}
