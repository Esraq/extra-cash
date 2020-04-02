<?php

namespace App\Http\Controllers;

use App\Restaurant;


use Carbon\Carbon;


use Illuminate\Http\Request;
//use Redirect,Response,DB,Config;
use Intervention\Image\Facades\Image as Image;
use Session;
use Datatables;

class RestaurantController extends Controller
{
    //
    public function add(){

        return view('superAdmin.restaurant.add');

    }
    public function insert(Request $r){
        $rules= [
//            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required',
            'name' => 'required'

        ];
        $this->validate($r, $rules);

        $restaurant = new Restaurant();
        $restaurant->status = $r->status;
        $restaurant->name = $r->name;
        $restaurant->save();

        if($r->hasFile('imageLink')){
            $img = $r->file('imageLink');
            $filename= $restaurant->id.'logo'.'.'.$img->getClientOriginalExtension();
            $restaurant->imageLink=$filename;
            $location = public_path('logo/'.$filename);
            Image::make($img)->save($location);

        }
        $restaurant->save();
        return redirect('restaurant-list')->with('success', true);

    }
    public function show()
    {
        return view('superAdmin.restaurant.show');
    }

    public function restaurantList()
    {
        $restaurant =Restaurant::select('*');
        return datatables()->of($restaurant)
            ->addColumn('status', function(Restaurant $status) {
                if($status->status == "active"){
                    return "<label class='btn btn-success btn-xs'>Active</label>";
                }elseif($status->status == "inactive"){
                    return "<label class='btn btn-danger btn-xs'>Inactive</label>";
                }
            })
//        return datatables()->of($page)
            ->rawColumns(['status'])
            ->setRowAttr([
                'align'=>'center',
            ]) ->make(true);
    }
    public function edit($id){
        $restaurant=Restaurant::findOrFail($id);
        return view('superAdmin.restaurant.edit',compact('restaurant'));
    }
    public function update(Request $r)
    {
        $rules= [
//            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'name' => 'required'

        ];
        $this->validate($r, $rules);
        $restaurant = Restaurant::findOrFail($r->id);
        $restaurant->status = $r->status;
        $restaurant->name = $r->name;
        $restaurant->save();
        if($r->hasFile('imageLink')){
            $img = $r->file('imageLink');
            $filename= $restaurant->id.'logo'.'.'.$img->getClientOriginalExtension();
            $restaurant->imageLink=$filename;
            $location = public_path('logo/'.$filename);
            Image::make($img)->save($location);

        }
        $restaurant->save();

        return redirect('restaurant-list')->with('success', true);

    }
//
    public function delete(Request $r){
        $restaurant=Restaurant::findOrFail($r->id);
        $restaurant->delete();
//        return $r;
        return redirect('restaurant-list')->with('success', true);
    }

}
