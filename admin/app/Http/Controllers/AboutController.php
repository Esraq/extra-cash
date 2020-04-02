<?php

namespace App\Http\Controllers;

use App\About;


use App\Slider;
use Carbon\Carbon;


use Illuminate\Http\Request;
//use Redirect,Response,DB,Config;
use Intervention\Image\Facades\Image as Image;
use Session;
use Datatables;
use DB;

class AboutController extends Controller
{
    //
    public function add(){
        $about = DB::table('abouts')->first();
        return view('superAdmin.about',compact('about'));

    }
    public function insert(Request $r){
        $rules= [
//            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required'

        ];
        $this->validate($r, $rules);

        $about = new About();
        $about->title = $r->title;
        $about->description = $r->description;
        $about->created_at = Carbon::now();
        $about->save();
//        return back();

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $about->id.'sliderImage'.'.'.$img->getClientOriginalExtension();
            $about->image=$filename;
            $location = public_path('sliderImage/'.$filename);
            Image::make($img)->save($location);

        }
        $about->save();
        return back();
//        return redirect('about')->with('success', true);

    }
    public function edit($id){
        $about=About::findOrFail($id);
        return view('superAdmin.about',compact('about'));
    }
    public function update(Request $r)
    {
        $rules= [
//           'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'title' => 'required'

        ];
        $this->validate($r, $rules);
        $about = About::findOrFail($r->id);
        $about->title = $r->title;
        $about->description = $r->description;
        $about->updated_at = Carbon::now();
        $about->save();
        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $about->id.'sliderImage'.'.'.$img->getClientOriginalExtension();
            $about->image=$filename;
            $location = public_path('sliderImage/'.$filename);
            Image::make($img)->save($location);

        }
        $about->save();
        return back();

//
//        return redirect('slider')->with('success', true);

    }
}
