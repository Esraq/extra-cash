<?php

namespace App\Http\Controllers;

use App\Slider;


use Carbon\Carbon;


use Illuminate\Http\Request;
//use Redirect,Response,DB,Config;
use Intervention\Image\Facades\Image as Image;
use Session;
use Datatables;

class SliderController extends Controller
{
    //
    public function add(){

        return view('superAdmin.slider.add');

    }
    public function insert(Request $r){
        $rules= [
//            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status' => 'required',
            'title' => 'required'

        ];
        $this->validate($r, $rules);

        $slider = new Slider();
        $slider->status = $r->status;
        $slider->title = $r->title;
        $slider->save();

        if($r->hasFile('imageLink')){
            $img = $r->file('imageLink');
            $filename= $slider->sliderId.'sliderImage'.'.'.$img->getClientOriginalExtension();
            $slider->imageLink=$filename;
            $location = public_path('sliderImage/'.$filename);
            Image::make($img)->save($location);

        }
        $slider->save();
        return redirect('slider')->with('success', true);

    }
    public function show()
    {
        return view('superAdmin.slider.show');
    }

    public function sliderList()
    {
        $slider =Slider::select('*');
        return datatables()->of($slider)
            ->addColumn('status', function(Slider $status) {
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
        $slider=Slider::findOrFail($id);
        return view('superAdmin.slider.edit',compact('slider'));
    }
    public function update(Request $r)
    {
        $rules= [
//            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'title' => 'required'

        ];
        $this->validate($r, $rules);
        $slider = Slider::findOrFail($r->id);
        $slider->status = $r->status;
        $slider->title = $r->title;
        $slider->save();
        if($r->hasFile('imageLink')){
            $img = $r->file('imageLink');
            $filename= $slider->sliderId.'sliderImage'.'.'.$img->getClientOriginalExtension();
            $slider->imageLink=$filename;
            $location = public_path('sliderImage/'.$filename);
            Image::make($img)->save($location);

        }
        $slider->save();

        return redirect('slider')->with('success', true);

    }

    public function delete(Request $r){
        $slider=Slider::findOrFail($r->sliderId);
        $slider->delete();
//        return $r;
        return redirect('slider')->with('success', true);
    }

}
