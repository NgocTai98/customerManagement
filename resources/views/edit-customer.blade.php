@extends('master.master')
@section('content')
<div class="addNewCustomer" style="margin-left: 150px; margin-right: 150px; margin-top: 30px; margin-bottom: 30px">
    @if (session('thongbao'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('thongbao') }}</strong>
        </div>
    @endif
    <h3>Sửa thông tin khách hàng</h3>
    <form action="" method="post"> @csrf
        <div class="form-group">
            <label class="control-label">Họ Tên Khách</label>
            <input name="name" type="text" class="form-control" value="{{ $customer->name }}"> </div>
            {{ showErrors($errors,'name') }}
        <div class="form-group">
            <label class="control-label">Số điện thoại</label>
            <input name="phone" type="text" class="form-control" value="{{ $customer->phone }}"> </div>
            {{ showErrors($errors,'phone') }}
        <div class="form-group">
            <label class="control-label">Địa chỉ</label>
            <input name="address" type="text" class="form-control" value="{{ $customer->address }}"> </div>
            {{ showErrors($errors,'address') }}
        <div class="form-group">
            <label class="control-label">Nhu cầu</label>
            <input name="need" type="text" class="form-control" value="{{ $customer->need }}"> </div>  
        <div class="form-group">
            <label class="control-label">Đánh giá</label>
            <select name="rate" class="form-control">
                @if ($customer->rate == 0)
                <option value="0" selected>Khách Nét</option>
                <option value="1">Tiềm năng</option>
                <option value="2">Ít Tiềm năng</option>
                @endif
                @if ($customer->rate == 1)
                <option value="0">Khách Nét</option>
                <option value="1" selected>Tiềm năng</option>
                <option value="2">Ít Tiềm năng</option>
                @endif
                @if ($customer->rate == 2)
                <option value="0">Khách Nét</option>
                <option value="1">Tiềm năng</option>
                <option value="2" selected>Ít Tiềm năng</option>
                @endif
            </select>  
        </div>
        <div align='right' style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Sửa</button>
                <button class="btn btn-primary" type="reset" >Nhập lại</button>
        </div>
    </form>
</div>
@endsection