@extends('master.master')
@section('content')
@if (session('thongbao'))
<div class="alert alert-success" role="alert">
    <strong>{{ session('thongbao') }}</strong>
</div>
@endif
<div class="shop-area">
    <div class="container">
        <div>
            <a href="/add-product"><button type="button" class="btn btn-primary btn-lg">Thêm nhà mới</button></a>
        </div>
        <div class="row">
            @foreach ($product as $row)
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="shop-wrap">
                    <div class="shop-img">
                        {{-- @foreach ($row->image as $item)
                        <img src="../img/{{ $item->img }}" alt="">
                        @break
                        @endforeach --}}
                        <img src="../img/{{ $row->image->first()->img }}" alt="">
                        
                        <ul>
                            <li><a onclick="return delPro()" href="/del-product/{{ $row->id }}"><i class="fa fa-remove"></i></a></li>
                            <li><a href="/edit-product/{{ $row->id }}"><i class="fa fa-edit"></i></a></li>
                            <li><a href="/detail-product/{{ $row->id }}"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="shop-img">
                        <img src="../product/img/{{ $row->img }}" alt="">
                        <ul>
                            <li><a onclick="return delPro()" href="/del-product/{{ $row->id }}"><i class="fa fa-remove"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="/detail-product/{{ $row->id }}"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div> --}}
                    <div class="shop-content">
                        <h3><a href="/detail-product/{{ $row->id }}">{{ $row->name }}</a></h3>
                        <ul>
                            <li class="pull-left">{{ number_format($row->price) }} VND</li>
                            <li class="pull-right">
                                <span>(02)</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>{{ $row->information }}</p>
                        <p>{{ $row->description }}</p>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
    </div>
</div>
<div style="float: right">
    {!!$product->links()!!}
    </div>
<script>
    function delPro(){
        return confirm('Bạn có chắc chắn muốn xóa');
    }
</script>
@endsection