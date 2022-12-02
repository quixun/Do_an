<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    //

    public function index(){
        return view('admin.login_admin');
    }
    public function show_dashboard() {
        $this-> AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where
        ('admin_password',$admin_password)->first();
        if($result){
        Session::put('admin_name',$result->admin_name);
        Session::put('admin_id',$result->admin_id);
        return view('admin.dashboard');
        }else{
        Session::put('message','Mật Khẩu Hoặc Email Không Đúng');
        return Redirect::to('/admin');
        }
        }
        public function logout(){
            Session::put('admin_name',null);
            Session::put('admin_id',null);
            return Redirect::to('/admin');
            }

        public function AuthLogin(){
                $admin_id = Session::get('admin_id');
                if($admin_id){
                return Redirect::to('dashboard');
                }else{
                return Redirect::to('admin')->send();
}
}
}
