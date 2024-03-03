@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> Bình luận </h1>
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
        All({{$allcmts}})
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search">
      </div>
    </div>  

    <div class="clearfix"></div>
    <form method="post" action="{{url('multipledelete')}}">
      <div class="filter-div">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('comments')}}">
        <input type="hidden" name="tblid" value="{{encrypt('id')}}">
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
                <th width="15%"><input type="checkbox" id="select-all"> Name</th>
                <th width="35%">Comment</th>
                <th width="25%">Bài viết</th>
                <th width="20%">Date</th>
              </tr>
            </thead>
            <tbody>
              @if(count($cmts) > 0)
              @foreach($cmts as $cmt)
              <tr>
                <td><input type="checkbox" name="select-data[]" value="{{$cmt->id}}">{{$cmt->name}}</td>
                <td>{{$cmt->cmt}}</td>
                <td>{{$cmt->pid}}</td>
                <td>{{$cmt->created_at}}</td>              
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="4">No user found</td>
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
        {{ $cmts->links() }}
      </div>
    </div>
  </div>
</div>





@stop