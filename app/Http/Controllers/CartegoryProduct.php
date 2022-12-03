<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Category;

session_start();

class CartegoryProduct extends Controller
{
    public function add_category_product()
    {
        $this->AuthLogin();
        return view('admin.cartegory.add_category_product');
    }

    public function all_category_product()
    {
        $this->AuthLogin();
        $all_category_product = Category::orderBy('category_id', 'DESC')->get();
        $manager_category_product = view('admin.cartegory.all_category_product')->with('all_category_product', $all_category_product);
        return view('admin_layout.admin_layout')->with('admin.cartegory.all_category_product', $manager_category_product);
    }
    public function save_category_product(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        //$data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('admin/add-category-product');
    }
    public function edit_category_product($category_product_id)
    {
        $this->AuthLogin();
        $edit_category_product = Category::where('category_id', $category_product_id)->get();
        $manager_category_product = view('admin.category.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin_layout.admin_layout')->with('admin.category.edit_category_product', $manager_category_product);
    }
    public function update_category_product(Request $request, $category_product_id)
    {
        $this->AuthLogin();
        $data = $request->all();
        $category = Category::find($category_product_id);
        $category->category_name = $data['category_product_name'];
        $category->category_slug = $data['slug_category_product'];
        $category->category_desc = $data['category_product_desc'];
        $category->category_status = $data['category_product_status'];
        $category->save();
        Session::put('message', 'Cập nhật danh mục thành công');
        return Redirect::to('admin/all-category-product');
    }
    public function delete_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        Session::put('message', 'Xóa danh mục thành công');
        return Redirect::to('admin/all-category-product');
    }
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function unactive_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 0]);
        Session::put('message', 'Ẩn danh mục sản phẩm, update thành công');
        return Redirect::to('all-category-product');
    }

    public function active_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 1]);
        Session::put('message', 'Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function show_category_home(Request $request, $slug_category_product)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'desc')->get();
        $category_by_id = DB::table('tbl_product')->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')->where('tbl_category_product.slug_category_product', $slug_category_product)->get();
        foreach ($category_by_id as $key => $val) {
            //seo
            $meta_desc = $val->category_desc;
            //$meta_keywords = $val->meta_keywords;
            $meta_title = $val->category_name;
            $url_canonical = $request->url();
            //--seo
        }
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.slug_category_product', $slug_category_product)->limit(1)->get();
        return view('pages.category.show_category')->with('category', $cate_product)->with('brand', $brand_product)->with('category_by_id', $category_by_id)->with('category_name', $category_name)->with('meta_desc', $meta_desc)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);
    }
}
