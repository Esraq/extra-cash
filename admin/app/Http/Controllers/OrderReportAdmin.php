<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrderReportAdmin extends Controller
{
    public function orderReport()
    {
    	return view('superAdmin.report.order');
    }
    public function getOrderReport(Request $req)
    {
    	$this->validate($req,[
    		'startdate'=>'required',
    		'enddate'=>'required',
    	]);
    	$startdate = date("Y-m-d",strtotime($req->startdate));
    	$enddate = date("Y-m-d",strtotime($req->enddate));
    	$order = DB::select("SELECT  od.*, res.kitchen_name,c.customer_name FROM order_details od
    		INNER JOIN restaurants res ON(res.id=od.restaurant_id)
    		INNER JOIN customers c ON(c.id=od.customer_id)

    		WHERE od.drder_date>='$startdate' AND od.drder_date<='$enddate'");
    	

    	return view("superAdmin.report.order",compact('order',$order));
    }
}
