@extends('master.master')
@section('content')
@if (session('thongbao'))
<div class="alert alert-success" role="alert">
    <strong>{{ session('thongbao') }}</strong>
</div>
@endif
<div class="row">
  <div style="margin-top: 20px; margin-bottom: 20px; padding-left: 35px" class="col-lg-4">
      <a href="/add-customer"><button type="button" class="btn btn-primary btn-lg" style="border-radius: 10px">Thêm khách hàng mới</button></a>
  </div>
  <div class="col-lg-8">
      <form action="/host/search" method="post"> @csrf
        <div class="form-group" style="display: flex; margin-top: 30px; padding-right: 150px">
          <input type="text" name="search" placeholder="Search..." class="form-control" style="width: 400px; border-radius: 10px">
          <button type="submit" class="btn btn-success" style="margin-left: 5px; border-radius: 10px">Search</button>
      </div>
      </form>
  </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên Chủ Nhà</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">email</th>
        <th scope="col">Hành động</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($host as $row)
      <tr>
        <th scope="row">{{ $row->id }}</th>
        <td>{{ $row->name }}</td>
        <td>{{ $row->phone }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->email }}</td>
        <td>
            <a href="/edit-host/{{ $row->id }}"><button type="button" class="btn btn-outline-info">Sửa</button></a>
            <a onclick="return delHost()" href="/del-host/{{ $row->id }}"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  <div style="float: right">
    {!!$host->links()!!}
    </div>
  <script>
      function delHost(){
          return confirm('Bạn có thực sự muốn xóa');
      }
  </script>
@endsection