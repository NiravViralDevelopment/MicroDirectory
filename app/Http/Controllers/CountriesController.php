<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\ManageOrder;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        $data = Countries::orderBy('id','desc')->get();
        return view('countries.index', compact('data'));
    }

    public function Create()
    {
        return view('countries.create');
    }

    public function Store(request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $testimonial = new Countries();
        $testimonial->country_name = $request->title;
        $testimonial->is_active = $request->is_active;
        $testimonial->save();
        return redirect()->route('countries')->with('message', 'Data Created Successfully.');
    }

    public function Edit($id)
    {
        $data = Countries::find($id);
        return view('countries.edit', compact('data'));
    }

    function statusUpdate($id){
        $role_info = Countries::find($id);
            if($role_info->is_active == 1){
                $status = 0;
            }else{
                $status = 1;
            }
            // return $status;
            $role_info->is_active = $status;
            $role_info->save();
            return redirect()->back()->with('message','Status Changed.');
    }



    public function Update(request $request, $id)
    {
        $testimonial = Countries::find($id);
        $request->validate([
            'title' => 'required',
        ]);
        $testimonial->country_name = $request->title;
        $testimonial->is_active = $request->is_active;
        $testimonial->save();
        return redirect()->route('countries')->with('message', 'Data Updated Successfully.');
    }
}
