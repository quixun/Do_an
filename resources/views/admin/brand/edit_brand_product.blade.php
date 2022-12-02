@extends('admin_layout.admin_layout')
@section('admin_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Cập nhật thương hiệu sản phẩm
                </div>
                <hr>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    @foreach ($edit_brand_product as $key => $edit_value)
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('/update-brand-product/' . $edit_value->brand_id) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" value="{{ $edit_value->brand_name }}" name="brand_product_name"
                                        class="form-control form-control-rounded" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" value="{{ $edit_value->brand_slug }}" name="brand_product_slug"
                                        class="form-control form-control-rounded" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh
                                        mục</label><br>
                                    <textarea style="width: 100%; resize: none;  color:#fff; text-align: center; background:rgba(255, 255, 255, 0.2);" rows="8" class="formcontrol form-control-rounded" name="brand_product_desc" id="exampleInputPassword1">{{ $edit_value->brand_desc }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="brand_product_status" class="form-control form-control-rounded
    input-sm m-bot15">
                                        @if ($edit_value->brand_status == 1)
                                            <option selected value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        @else
                                            <option value="1">Hiển thị</option>
                                            <option selected value="0">Ẩn</option>
                                        @endif
                                    </select>
                                </div>
                                <button type="submit" name="update_brand_product" class="btn btn-light btn-round">Cập nhật thương
                                    hiệu</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    @endsection
