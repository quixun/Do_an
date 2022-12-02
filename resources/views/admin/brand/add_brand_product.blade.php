@extends('admin_layout.admin_layout')
@section('admin_content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Thêm thương hiệu sản phẩm
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
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/save-brand-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" name="brand_product_name" class="form-control form-control-rounded" id="exampleInputEmail1"
                                    >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug</label>
                                <input type="text" name="brand_slug" class="form-control form-control-rounded" id="exampleInputEmail1"
                                  >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả thương
                                    hiệu</label>
                                    <textarea class="form-control form-control-rounded" name="brand_product_desc" id="exampleInputPassword1" style="resize: none" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="brand_product_status" class="form-control input-sm m-bot15 form-control-rounded">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>
                            <button type="submit" name="add_category_product" class="btn btn-light btn-round">Thêm Thương Hiệu</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endsection
