@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Chủ đề</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ Session('message') }}
			</div>

			@endif
			<h3>Tùy chỉnh Website</h3>
			@if(is_countable($data) && count($data) < 1)
			<form method="post" action="{{url('addsettings')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<div class="form-group">
					<label>Logo</label>
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
					<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Tải lên logo</label></p>
					<p><img id="output" /></p>
				</div>
				<div class="form-group">
					<label>Chi tiết</label>
					<textarea name="about" class="form-control" rows="8"></textarea>
				</div>
				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="url" name="social[]" class="form-control">
						<p class="text-muted">VD: https://www.facebook.com</p>
					</div>
				</div>
				
				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> You've reached the social fields limit.
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Thêm tùy chỉnh</button>
				</div>
			</form>	
			<script>
				var socialCounter = 1;
				$('#addSocialField').click(function(){
					socialCounter++;
					if(socialCounter>5){
						$('#socialAlert').removeClass('noshow');
						return;
					}
					newDiv = $(document.createElement('div')).attr("class","form-group");
					newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>');
					newDiv.appendTo("#socialFieldGroup");
				})
			</script>
			@else
			<form method="post" action="{{url('updatesettings')}}/{{$data->sid}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<input type="hidden" name="sid" value="{{$data->sid}}">
				<div class="form-group">
					<label>Logo</label>
					@if(!empty($data->image))
					<p><img src="{{url('public/settings')}}/{{$data->image}}" id="output"></p>
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
					<p><label for="file" style="cursor: pointer;" class="btn btn-warning">Thay thế logo</label></p>
					@else
					<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
					<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
					<p><img id="output" /></p>
					@endif
				</div>
				<div class="form-group">
					<label>Chi tiết</label>
					<textarea name="about" class="form-control" rows="8">{{$data->about}}</textarea>
				</div>
				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Địa chỉ</label>
						@foreach($data->social as $social)
						<div class="form-group">
							<input type="url" name="social[]" class="form-control socialCount" value="{{$social}}">
						</div>
						@endforeach
					</div>
				</div>
				
				<div class="text-right form-group">
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> You've reached the social fields limit.
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Cập nhật tùy chỉnh</button>
				</div>
			</form>
			<script>
				var socialCounter = $('.socialCount').length;
				$('#addSocialField').click(function(){
					socialCounter++;
					if(socialCounter>5){
						$('#socialAlert').removeClass('noshow');
						return;
					}
					newDiv = $(document.createElement('div')).attr("class","form-group");
					newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>');
					newDiv.appendTo("#socialFieldGroup");
				})
			</script>
			@endif
		</div>
	</div>
</div>

<style>
	.noshow{display: none;}
</style>
<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>


@stop