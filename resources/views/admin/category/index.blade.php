@extends('admin.layouts.master')

@section('title', 'Thêm Mới Danh Mục')

@section('main')

<form action="admin/create_category/store" method="post" class="form-inline" role="form">
@csrf
    <div class="form-group">
        <label class="sr-only" for="">Name</label>
        <input type="" name="name" class="form-control" id="" placeholder="Input New Name">
    </div>
    

    <button type="submit" class="btn btn-primary">Tạo Mới</button>
</form>
@error('name')

    <small>{{$message}}</small>
@enderror

@stop()