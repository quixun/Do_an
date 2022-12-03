@extends('admin_layout.admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh mục sản phẩm
            </div>
            <div class="row w3-res-tb">
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-justify" style="color:red;">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>

                            <th>Tên danh mục</th>
                            <th>Slug</th>
                            <th>Hiển thị</th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($all_category_product as $key => $cate_pro)
                        <tr>
                            <td>{{ $cate_pro->category_name }}</td>
                            <td>{{ $cate_pro->slug_category_product }}</td>
                            <td>
                                <span class="text-ellipsis">
                                    @if($cate_pro->category_status==1)
                                        <a href="{{URL::to('admin/unactive-category-product/'.$cate_pro->category_id)}}">
                                            <span class="fa-thumb-styling fa fa-thumbs-up"></span>
                                        </a>
                                    @else
                                        <a href="{{URL::to('admin/active-category-product/'.$cate_pro->category_id)}}">
                                            <span class="fa-thumb-styling fa fa-thumbs-down"></span>
                                        </a>
                                    @endif
                                </span>
                            </td>
                            <td>
                                <a href="{{URL::to('admin/edit-category-product/'.$cate_pro->category_id)}}"
                                   class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')"
                                   href="{{URL::to('admin/delete-category-product/'.$cate_pro->category_id)}}" class="activestyling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
</table>
                <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
                <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            </div>
        </div>
    </div>
@endsection
