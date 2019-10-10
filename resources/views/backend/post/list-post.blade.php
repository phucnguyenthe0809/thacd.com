@extends('backend.master.master')
@section('content')
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active"> Bài viết </li>
        </ol>
    </div>
    <!--/.row-->
    <br>
    <div class="col-xs-12 col-md-12 col-lg-12">
            @if (session('thongbao'))
            <div class="alert alert-success" role="alert">
                    <strong>{{ session('thongbao') }}</strong>
                </div>
            @endif
        <div class="panel panel-primary">

            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">


                        <a href="/admin/post/add" class="btn btn-primary">Thêm Bài Viết</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                                <a onclick="delSelect()" class="btn btn-danger"><i class="fa fa-times"
                                    aria-hidden="true"></i> Xoá</a>

                            <thead>
                                <tr class="bg-primary">
                                    <th>Chọn</th>
                                    <th>Tiêu Đề</th>
                                    <th>Slug</th>
                                    <th>Danh mục</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                              <form id="posts" action="/admin/post/delete" method="get">
                                    @foreach ($posts as $post)
                                    <tr>
                                         <td><input type="checkbox" name="arrayIdPost[]" value="{{ $post->id }}" ></td>
                                         <td><a href="/admin/post/edit/{{ $post->id }}">{{ $post->title }}</a></td>
                                         <td>{{ $post->slug }}</td>
                                         <td>{{ $post->category->name }}</td>
                                         <td>
                                            <p>Công Khai</p>
                                            {{ Carbon\Carbon::parse($post->updated_at)->format('d-m-Y') }}
                                         </td>
                                     </tr>
                                    @endforeach
                              </form>
                            </tbody>
                        </table>
                        <div align="right">
                            {{ $posts->links() }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>

            </div>
        </div>
        <!--/.row-->


    </div>
</div>
<!--end main-->
<script >
    function delSelect() {
        if(confirm('Bạn muốn xoá bài viết đã chọn?'))
        {
            document.getElementById('posts').submit();
        }
        
    }
</script>
@stop
