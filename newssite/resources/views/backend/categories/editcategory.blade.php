@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Sửa đổi chủ đề</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ Session('message') }}
			</div>
				
			@endif
			<h3>Sửa đổi chủ đề</h3>
			<form method="post" action="{{url('updatecategory')}}/{{$singledata->cid}}">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('categories')}}">
				<input type="hidden" name="cid" value="{{$singledata->cid}}">
				<div class="form-group">
					<label>Tên chủ đề</label>
					<input type="text" name="title" id="category_name" class="form-control" value="{{$singledata->title}}">
					<p>Tên chủ đề hiển thị.</p>
				</div>

				<div class="form-group">
					<label>Slug</label>
					<input type="text" name="slug" id="slug" class="form-control" readonly="" value="{{$singledata->slug}}">
					<p>Slug là một phần quan trọng của URL đặt ngay sau tên miền và kết hợp để tạo thành liên kết permalink dẫn đến trang nguồn của website</p>
				</div>
				<div class="form-group">
					<label>Trạng thái</label>
					<select class="form-control" name="status">
						<option>{{$singledata->status}}</option>
						@if($singledata->status == 'Ẩn')
						<option>Công khai</option>
						@else
						<option>Ẩn</option>
						@endif
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Cập nhật</button>
				</div>
			</form>	


		</div>

		<div class="col-sm-8 cat-view">
			<form method="post" action="{{url('multipledelete')}}">
				<div class="row">
				
					{{ csrf_field() }}
					<input type="hidden" name="tbl" value="{{encrypt('categories')}}">
					<input type="hidden" name="tblid" value="{{encrypt('cid')}}">
			
					<div class="col-sm-3">
						<select name="bulk-action" class="form-control">
							<option value="0">Chọn thao tác</option>
							<option value="1">Xóa chủ đề</option>
						</select>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-default">Apply</button>
					</div>
					<div class="col-sm-3 col-sm-offset-4">
						<input type="text" id="search" class="form-control" placeholder="Tìm chủ đề">
					</div>
				
				</div>
				<div class="content">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><input type="checkbox" id="select-all"> Tên chủ đề</th>
								<th>Slug</th>
								<th>Trạng thái</th>
							</tr>
						</thead>
						<tbody>
							@if(count($data) > 0)
							@foreach($data as $category)
							<tr>
								<td>
									<input type="checkbox" name="select-data[]" value="{{$category->cid}}"> 
									<a href="{{url('editcategory')}}/{{$category->cid}}">{{$category->title}}</a>
								</td>
								<td>{{$category->slug}}</td>
								<td>{{$category->status}}</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td colspan="3">Không có dữ liệu</td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@stop