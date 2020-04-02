<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
    public function save(Request $req)
    {
       $this->validate($req,[
            'restaurant_type'=>'required',
            'kitchen_name'=>'required',
            'kitchen_city'=>'required',
            'kitchen_address'=>'required',
            'postal_code'=>'required',
            'firstName'=>'required',
            'lastName'=>'required',
            'phone_name'=>'required',
            'email'=>'required|unique:user',
            'total_restuarent'=>'required',
            'average_cost'=>'required',
       ]);
        DB::table("user")->insert([
            'email'=>$req->email,
            'firstName'=>$req->firstName,
            'lastName'=>$req->lastName,
            'password'=>bcrypt($req->lastName),
            'fkuserTypeId'=>2
        ]);
        $loginid = DB::getPdo()->lastInsertId();
        $d_t = date("d-m-Y");
        $logo        = $req->file('food_menu');
        $image_name  = $d_t.'-'.$logo->getClientOriginalName();
        $uploadpath = 'public/assets/frontend/restaurantImages/';
        $logo->move(public_path($uploadpath),$image_name);
        $food_menu = $uploadpath.$image_name;

        DB::table("restaurants")->insert([
            'logininfo_id'=>$loginid,
            'restaurant_type'=>$req->restaurant_type,
            'kitchen_name'=>$req->kitchen_name,
            'kitchen_city'=>$req->kitchen_city,
            'kitchen_address'=>$req->kitchen_address,
            'postal_code'=>$req->postal_code,
            'phone_name'=>$req->phone_name,
            'total_restuarent'=>$req->total_restuarent,
            'average_cost'=>$req->average_cost,
            'food_menu'=>$food_menu,
            'status'=>1,
        ]);
        return redirect("extra-cash-register")->with("message","You have successfully registerd..!!!");
    }
}
