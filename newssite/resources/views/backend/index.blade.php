@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Chào Mừng</h2>
				<p class="welcome-text"></p>
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Xem thông tin</h4>
						<p><a href="{{url('all-posts')}}"><i class="fa fa-bookmark-o"></i> Xem bài viết</a></p>
						<p><a href="viewcategory"><i class="fa fa-bookmark-o"></i> Xem chủ đề</a></p>
						<p><a href="{{url('all-comments')}}"><i class="fa fa-bookmark-o"></i> Xem bình luận</a></p>
						<p><a href="{{url('all-users')}}"><i class="fa fa-users"></i> Xem người dùng</a></p>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Thêm thông tin</h4>
						<p><a href="{{url('add-post')}}"><i class="fa fa-bookmark-o"></i> Thêm bài viết</a></p>
						<p><a href="viewcategory"><i class="fa fa-bar-chart"></i> Thêm chủ đề</a></p>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="col-sm-3">			
					
				</div>
				<div class="col-sm-9">
					
					</div>	
					<p>
						<a href="https://www.facebook.com" target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com" target="_blank" class="btn btn-danger"><i class="fa fa-youtube"></i></a>
					 </p>
				</div>
			</div>
		</div>
	</div>
</div>


@stop