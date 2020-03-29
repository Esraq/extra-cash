<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage()
    {
    	return view("frontend.inc.home");
    }
    public function userSignUp()
    {
    	return view("frontend.pages.userSignUp");
    }
    public function aboutUs()
    {
    	return view("frontend.pages.aboutUs");
    }
    public function contactUs()
    {
    	return view("frontend.pages.contactUs");
    }
    public function extraCash()
    {
    	return view("frontend.pages.extraCashRegister");
    }
    public function extraCashRider()
    {
    	return view("frontend.pages.extraCashRider");
    }
    public function userLogin()
    {
    	return view("frontend.pages.extraCashRider");
    }
}
