@extends('master.master')
@section('content')
<div class="addNewCustomer" style="margin-left: 150px; margin-right: 150px; margin-top: 30px; margin-bottom: 30px">
    <h3>Thêm khách hàng mới</h3>
    <form action="/add-customer" method="post"> @csrf
        <div class="form-group">
            <label class="control-label">Họ Tên Khách</label>
            <input name="name" type="text" class="form-control"> </div>
            {{ showErrors($errors,'name') }}
        <div class="form-group">
            <label class="control-label">Số điện thoại</label>
            <input name="phone" type="text" class="form-control"> </div>
            {{ showErrors($errors,'phone') }}
        <div class="form-group">
            <label class="control-label">Địa chỉ</label>
            <input name="address" type="text" class="form-control"> </div>
            {{ showErrors($errors,'address') }}
        <div class="form-group">
            <label class="control-label">Nhu cầu</label>
            <input name="need" type="text" class="form-control"> </div>  
            {{ showErrors($errors,'need') }}
        <div class="form-group">
            <label class="control-label">Đánh giá</label>
            <select name="rate" class="form-control">
                <option value="0" selected>Khách Nét</option>
                <option value="1">Tiềm năng</option>
                <option value="2">Ít Tiềm năng</option>
            </select>  
        </div>
        <div align='right' style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Thêm</button>
                <button class="btn btn-primary" type="reset" >Nhập lại</button>
        </div>
    </form>
</div>
@endsection