<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeCook extends Controller
{
    public function list()
    {
    	return view('superAdmin.applicaant.home');
    }
    public function homeList()
    {
    	$restaurants=DB::table('restaurants')
            ->join('user', 'restaurants.user_id', '=', 'user.userId')
            ->select('restaurants.*', 'user.firstName', 'user.lastName', 'user.email', 'user.userId')
            ->where("user.status",0)
            ->where("restaurants.restaurant_type",2)
            ->get();
        return datatables()->of($restaurants)
         ->setRowAttr([
                'align'=>'center',
            ]) ->make(true);
    }
    public function approved(Request $r)
    {
    	  DB::table('user')
            ->where('userId', $r->userId)
            ->update(
    		[
    		'status' =>1
    		]
			);
       
        return redirect('home-applicant-list')->with('success', true);
    }
    public function remove(Request $r)
    {
    	  DB::table('user')
            ->where('userId', $r->userId)
            ->update(
    		[
    		'status' =>2
    		]
			);
       
        return redirect('home-applicant-list')->with('success', true);
    }
    public function restaurantsListApproved()
    {
        return view('superAdmin.approved.homecook');
    }
    public function approvedRestaurantsList()
    {
        $restaurants=DB::table('restaurants')
            ->join('user', 'restaurants.user_id', '=', 'user.userId')
            ->select('restaurants.*', 'user.firstName', 'user.lastName', 'user.email', 'user.userId')
            ->where("user.status",1)
            ->where("restaurants.restaurant_type",2)
            ->get();
        return datatables()->of($restaurants)
         ->setRowAttr([
                'align'=>'center',
            ]) ->make(true);
    }
}
