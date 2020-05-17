@extends('master.master')
@section('content')
<div>
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
            <form action="/customer/search" method="post"> @csrf
                <div class="form-group" style="display: flex; margin-top: 30px; padding-right: 150px">
                    <input type="text" name="search" placeholder="Search..." class="form-control" style="width: 400px; border-radius: 10px">
                    <button type="submit" class="btn btn-success" style="margin-left: 5px; border-radius: 10px">Search</button>
                    <select name="rate" id="rate" style="margin-left: 150px; border-radius: 5px; width: 200px" class="form-control">
                        <option value="3">Lọc</option>
                        <option value="0">Khách Nét</option>
                        <option value="1">Tiềm năng</option>
                        <option value="2">Ít tiềm năng</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="table">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên Khách</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Nhu cầu</th>
                <th scope="col">Đánh giá</th>
                <th scope="col">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customer as $row)
              <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->need }}</td>
                <td>
                    @if ($row->rate == 0)
                        Khách nét
                    @elseif($row->rate == 1)
                        Khách tiềm năng
                    @elseif ($row->rate == 2)
                        Khách ít tiềm năng
                    @endif
                </td>
                <td>
                    <a href="/edit-customer/{{ $row->id }}"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                    <a onclick="return delCustomer()" href="/del-customer/{{ $row->id }}"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    {{-- <div style="float: right">
    {{ $customer->links() }}
    </div> --}}
    
</div>

<script>
    function delCustomer(){
        return confirm('Bạn có thực sự muốn xóa');
    }
</script>
@endsection