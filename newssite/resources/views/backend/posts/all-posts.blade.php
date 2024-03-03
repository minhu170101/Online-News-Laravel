@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> Bài viết <a href="{{url('add-post')}}" class="btn btn-sm btn-default">Thêm</a></h1>
    </div>
    <div class="col-sm-12">
      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{ Session('message') }}
      </div>
      
      @endif
    </div>
    <div class="search-div">
      <div class="col-sm-9">
        All({{$allposts}}) | <a href="#">Published ({{$published}})</a>
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search">
      </div>
    </div>  

    <div class="clearfix"></div>
    <form method="post" action="{{url('multipledelete')}}">
      <div class="filter-div">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('posts')}}">
        <input type="hidden" name="tblid" value="{{encrypt('pid')}}">
        <div class="col-sm-2">
          <select name="bulk-action" class="form-control">
            <option value="0">Chọn thao tác</option>
            <option value="1">Xóa</option>
          </select>
        </div>

        <div class="col-sm-7">
          <div class="row">
            <button class="btn btn-default">Apply</button>
          </div>  
        </div>
        
      </div>  
      
      <div class="col-sm-12">
        <div class="content">
          <table class="table table-striped" id="myTable">
            <thead>
              <tr>
                <th width="30%"><input type="checkbox" id="select-all"> Tiêu đề</th>
                <th width="20%">Tác giả</th>
                <th width="15%">Chủ đề</th>
                <th width="10%">Người xem</th>
                <th width="15%">Trạng thái</th>
                <th width="10%">Date</th>
              </tr>
            </thead>
            <tbody>
              @if(count($posts) > 0)
              @foreach($posts as $post)
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="{{$post->pid}}"> 
                  <a href="{{url('editpost')}}/{{$post->pid}}">{{$post->title}}</a>
                </td>
                <td>{{$post->author}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->view}}</td>
                <td>{{$post->status}}</td>
                <td>{{$post->created_at}}</td>              
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="4">No post found</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </form>

    <div class="clearfix"></div>
    <div class="filter-div">
      <div class="col-sm-12 text-center">
        {{ $posts->links() }}
      </div>
    </div>
  </div>
</div>





@stop