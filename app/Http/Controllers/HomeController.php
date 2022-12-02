<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;


session_start();

class HomeController extends Controller
{
    public function index()
    {
        $$all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(15)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
}
}