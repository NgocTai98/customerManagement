@extends('master.master')
@section('content')
<div class="service-page-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-details">
                    <div class="row revarce-wrap">
                        <div class="col-lg-6 col-12">
                            <h3>Thông tin sản phẩm</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the abou majority have suffered alteration in some form, by injected humour, or dumm randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything that is embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                            <ul>
                                <li><i class="fa fa-check"></i> There are many variations of passages of Lorem Ipsum available but the majority.</li>
                                <li class="mb-0"><i class="fa fa-check"></i> There are many variations of passages of Lorem Ipsum available but the majority.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-12">
                            @foreach ($image as $row)
                            <img src="../img/{{ $row->img }}" alt="">
                            @break
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($image as $row)
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="service-wrappper">
                    <img src="../img/{{ $row->img }}" alt="" >
                    <div class="service-contents">
                        <h3><a href="service-details.html">Thông tin </a></h3>
                        <p>{{ $product->description }}</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id numquam itaque quam perferendis rem ullam harum illo ab perspiciatis, est facere natus corporis quae exercitationem, tempore eum. Aliquid, vero possimus!</p>
                    </div>
                    
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection