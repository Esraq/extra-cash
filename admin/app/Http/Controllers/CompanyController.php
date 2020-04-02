<?php

namespace App\Http\Controllers;


use App\About;
use Carbon\Carbon;

use App\Company;
use Illuminate\Http\Request;
//use Redirect,Response,DB,Config;
use Intervention\Image\Facades\Image as Image;
use Session;
use Datatables;
use DB;

class CompanyController extends Controller
{
    //
    public function add(){
        $company = DB::table('company')->first();
        return view('superAdmin.company',compact('company'));

    }
    public function insert(Request $r){
        $rules= [
//            'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'company_name' => 'required'

        ];
        $this->validate($r, $rules);

        $company = new Company();
        $company->company_name = $r->company_name;
        $company->contact_person = $r->contact_person;
        $company->email_address = $r->email_address;
        $company->phone = $r->phone;
        $company->mobile_no = $r->mobile_no;
        $company->website = $r->website;
        $company->address = $r->address;
        $company->save();
//        return back();

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $company->id.'sliderImage'.'.'.$img->getClientOriginalExtension();
            $company->image=$filename;
            $location = public_path('sliderImage/'.$filename);
            Image::make($img)->save($location);

        }
        $company->save();
        return back();
//        return redirect('about')->with('success', true);

    }
    public function edit($id){
        $company=Company::findOrFail($id);
        return view('superAdmin.company',compact('company'));
    }
    public function update(Request $r)
    {
        $rules= [
//           'imageLink' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'company_name' => 'required'

        ];
        $this->validate($r, $rules);
        $company = Company::findOrFail($r->id);
        $company->company_name = $r->company_name;
        $company->contact_person = $r->contact_person;
        $company->email_address = $r->email_address;
        $company->phone = $r->phone;
        $company->mobile_no = $r->mobile_no;
        $company->website = $r->website;
        $company->address = $r->address;
        $company->save();
//        return back();

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $company->id.'sliderImage'.'.'.$img->getClientOriginalExtension();
            $company->image=$filename;
            $location = public_path('sliderImage/'.$filename);
            Image::make($img)->save($location);

        }
        $company->save();
        return back();

//
//        return redirect('slider')->with('success', true);

    }
}
