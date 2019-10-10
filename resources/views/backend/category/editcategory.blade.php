@extends('backend.master.master')
@section('title','Sửa Danh Mục')
@section('category','class=active')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh mục</h1>
			</div>
		</div>
		<!--/.row-->
		@if (session('thongbao'))
			<div class="alert bg-success" role="alert">
				<svg class="glyph stroked checkmark">
					<use xlink:href="#stroked-checkmark"></use>
				</svg> {{ session('thongbao') }}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
			</div>
		@endif

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-5">
								<form method="post">
									@csrf
								<div class="form-group">
									<label for="">Danh mục cha:</label>
									<select class="form-control" name="idParent" >
										<option value="0">----ROOT----</option>
										{{ getCategory($categories,0,'',$category->id_parent) }}
									</select>
								</div>
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="name"  placeholder="Tên danh mục mới" value="{{ $category->name }}">
									@error('name')
									<div class="alert alert-danger" role="alert">
										<strong>{{ $message }}</strong>
									</div>
									@enderror
								</div>
								<div class="form-group">
									<label for="">Link</label>
									<input type="text" class="form-control" name="slug"  placeholder="Link trang" value="{{ $category->slug }}">
								
								</div>
								<button type="submit" class="btn btn-primary">Sửa danh mục</button>
								</form>
							</div>
							<div class="col-md-7">
							
								<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
								<div class="vertical-menu">
									<div class="item-menu active">Danh mục </div>
									{{ showCategory($categories,0,'') }}

								</div>
							</div>
						</div>
					</div>
				</div>



			</div>
			<!--/.col-->


		</div>
		<!--/.row-->
	</div>
	<!--/.main-->
	<script >
			function delCate(name){
				return confirm('Bạn muốn xoá danh mục: '+name+' ?');
			}
		</script>

@stop