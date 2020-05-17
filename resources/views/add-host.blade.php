@extends('master.master')
@section('content')
<div class="addNewCustomer" style="margin-left: 150px; margin-right: 150px; margin-top: 30px; margin-bottom: 30px">
    <h3>Thêm chủ nhà mới</h3>
    <form action="/add-host" method="post"> @csrf
        <div class="form-group">
            <label class="control-label">Họ Tên Chủ nhà</label>
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
            <label class="control-label">email</label>
            <input name="email" type="text" class="form-control"> </div>  
            {{ showErrors($errors,'email') }}
        
        <div align='right' style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Thêm</button>
                <button class="btn btn-primary" type="reset" >Nhập lại</button>
        </div>
    </form>
</div>
@endsection