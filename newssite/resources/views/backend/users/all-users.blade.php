@extends('backend.master')
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 title">
      <h1><i class="fa fa-bars"></i> Users </h1>
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
        All({{$allusers}})
      </div>

      <div class="col-sm-3">
        <input type="text" id="search" class="form-control" placeholder="Search">
      </div>
    </div>  

    <div class="clearfix"></div>
    <form method="post" action="{{url('multipledelete')}}">
      <div class="filter-div">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('users')}}">
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
                <th width="30%"><input type="checkbox" id="select-all"> Name</th>
                <th width="35%">Email</th>
                <th width="10%">Date</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users) > 0)
              @foreach($users as $user)
              <tr>
                <td>
                  <input type="checkbox" name="select-data[]" value="{{$user->id}}"> 
                  <a href="{{url('edituser')}}/{{$user->id}}">{{$user->name}}</a>
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>              
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
        {{ $users->links() }}
      </div>
    </div>
  </div>
</div>





@stop