@extends('admin_layout.admin_layout')
@section('admin_content')
    <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Thêm Danh Mục</div>
           <hr>
            <form role="form" action="{{URL::to('/admin/save-category-product')}}" method="post">
              {{ csrf_field() }} 
           <div class="form-group">
            <label for="exampleInputEmail1">Tên Danh Mục</label>
            <input type="text" class="form-control form-control-rounded" id="exampleInputEmail1" name="category_product_name" >
           </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Slug</label>
            <input type="text" name="slug_category_product" class="form-control form-control-rounded" id="exampleInputEmail1" >
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
            <textarea class="form-control form-control-rounded" name="category_product_desc" id="exampleInputPassword1" style="resize: none" rows="8"></textarea>
           </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Hiển thị</label>
              <select name="category_product_status" class="form-control input-sm m-bot15">
                <option value="0">Ẩn</option>
                <option value="1">Hiển thị</option>
              </select>
            </div>
           <div class="form-group">
            <button type="submit" name="add_category_product" class="btn btn-light btn-round">Thêm Danh Mục</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div>
@endsection