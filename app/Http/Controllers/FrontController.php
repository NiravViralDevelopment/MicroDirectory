<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RoleInfo;
use App\Models\Countries;
use App\Models\User;
use App\Models\Cms;
class FrontController extends Controller
{
    function frontHome(){
          $roles = DB::table('roles')
    ->join('role_infos', 'roles.id', '=', 'role_infos.role_id')
    ->where('role_infos.is_active', 1)
    ->select('roles.*', 'role_infos.*')
    ->get();
    $country = Countries::where('is_active',1)->get();


    return view('welcome',compact('roles','country'));
    }
    function directoryList($slug){
        $roleInfo = RoleInfo::where('slug',$slug)->first();
        $role = DB::table('roles')->where('id',$roleInfo->role_id)->first();
        $users = User::role($role->name)->get();
        return $users;
        return view('front.directory_list');
    }

    function directoryDirectory(){
        return "comming soon...";
    }


    function about(){
        $cms = Cms::find(2);
        return view('front.cms',compact('cms'));
    }


    function terms(){
        $cms = Cms::find(3);
        return view('front.cms',compact('cms'));
    }


    function privacy(){
        $cms = Cms::find(4);
         return view('front.cms',compact('cms'));
    }

    function registration(){
        $cms = Cms::find(5);
         return view('front.cms',compact('cms'));
    }

     function feedback(){
        $cms = Cms::find(6);
         return view('front.cms',compact('cms'));
    }

}
