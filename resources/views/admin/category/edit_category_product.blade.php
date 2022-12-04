@extends('admin_layout.admin_layout')
@section('admin_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Cập Nhật Danh Mục</div>
                <hr>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    @foreach ($edit_category_product as $key => $edit_value )
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('/admin/update-category-product/' . $edit_value->category_id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" class="form-control form-control-rounded" id="exampleInputEmail1"
                                        name="category_product_name" value="{{ $edit_value->category_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="slug_category_product" class="form-control form-control-rounded"
                                        id="exampleInputEmail1" value="{{ $edit_value->category_slug }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea class="form-control form-control-rounded" name="category_product_desc" id="exampleInputPassword1"
                                        style="resize: none" rows="8">{{ $edit_value->category_desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                        @if($edit_value->category_status == 1)
                                        <option selected value="1">Hiển Thị</option>
                                        <option value="0">Ẩn</option>
                                        @else
                                        <option value="1">Hiển Thị</option>
                                        <option selected value="0">Ẩn</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="update_category_product" class="btn btn-light btn-round">Cập Nhật Danh
                                        Mục</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>
    </div>
@endsection
