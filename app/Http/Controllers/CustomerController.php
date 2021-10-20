<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use App\Http\Resources\Customer as CustomerResource;

class CustomerController extends BaseController
{
	public function signin(Request $request)
    {
		if(Auth::guard('customers')->attempt(['ccode' => $request->ccode, 'phone' => $request->phone, 'password' => $request->password])){ 
            $authUser = Auth::guard('customers')->user(); 
            $success['token'] =  $authUser->createToken('MotuzApp')->plainTextToken; 
            $success['name'] =  $authUser->name;
   
            return $this->sendResponse($success, 'User signed in');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
			'ccode' => 'required',
			'phone' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Error validation', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = Customer::create($input);
        $success['token'] =  $user->createToken('MotuzApp')->plainTextToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User created successfully.');
    }
}
