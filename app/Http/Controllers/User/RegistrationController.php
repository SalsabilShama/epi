<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index(){
    	return view('user.registration');
    }
     public function registration(Request $request){
   			$reg_no= rand(1, 999999);


     	$user = User::create(
     		[
     			'name'=>$request->input('childName'),
     			'email'=>$request->input('guardianEmail'),
     			'password'=>Hash::make($request->input('password')),
     			'father_name'=>$request->input('fathersName'),
     			'mother_name'=>$request->input('mothersName'),
     			'dob'=>$request->input('childDob'),
     			'place_of_birth'=>$request->input('placeOfBirth'),
     			'birth_certificate_no'=>$request->input('childBirthNo'),
     			'father_nid'=>$request->input('fatherNid'),
     			'mother_nid'=>$request->input('motherNid'),
     			'mobile_no'=>$request->input('mobilenumber'),
     			'passport_no'=>$request->input('childPPNo'),
     			'gender'=>$request->input('gender'),
     			'address'=>$request->input('presentAddress'),
     			'registration_date'=>date('Y-m-d'),
     			'user_type'=>4,
     			'registration_number'=>$reg_no ]
     	);

    	return back()->with("message","Registration Successful. Your Registration  Number is: ".$reg_no);
    }
}
