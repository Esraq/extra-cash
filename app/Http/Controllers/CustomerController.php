<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
    public function save(Request $req)
    {
    	$this->validate($req,[
    		'customer_name'=>'required|min:3',
    		'email'=>'required|unique:customers',
    		'phone'=>'required',
    		'address'=>'required',
    		'password'=>'required',
    	]);
    	$cust = new Customer();
    	$cust->customer_name=$req->customer_name;
    	$cust->email=$req->email;
    	$cust->phone=$req->phone;
    	$cust->address=$req->address;
    	$cust->password=md5($req->password);
    	$cust->save();
    	return redirect("sign-up")->with("message","user crate successfully");
    }
}
