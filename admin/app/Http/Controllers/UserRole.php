<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\UserType;
use DB;
class UserRole extends Controller
{
    public function list()
    {
    	$UserType =DB::table('user_type')->get();

        return datatables()->of($UserType)
            

            ->setRowAttr([
                'align'=>'center',
            ]) ->make(true);
    }
    public function show()
    {
        return view('superAdmin.userrole.list');
    }
    public function delete(Request $r)
    {
    	  DB::table('user_type')
            ->where('userTypeId', $r->userTypeId)
            ->delete();
       
        return redirect('user.role')->with('success', true);
    }
    public function add()
    {
    	return view('superAdmin.userrole.add');
    }
    public function insert(Request $r){
        $rules= [
            'typeName' => 'required|unique:user_type'
           

        ];
        $this->validate($r, $rules);
        $data['typeName'] = $r->typeName;

        DB::table('user_type')->insert($data);
        return redirect('user-role-list')->with('success', true);

    }
    public function edit($id)
    {
    	$role = DB::table('user_type')
            ->where('userTypeId', $id)
            ->first();
    	return view('superAdmin.userrole.edit',compact('role'));
    }
    public function update(Request $r)
    {
    	 $rules= [
            'typeName' => 'required'
           

        ];
        $this->validate($r, $rules);
        $data['typeName'] = $r->typeName;
        $userTypeId = $r->userTypeId;

        DB::table('user_type')
		->where('userTypeId',$userTypeId)
		->update($data);	
        return redirect('user-role-list')->with('success', true);
    }
}
