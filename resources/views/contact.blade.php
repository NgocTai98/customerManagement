@extends('master.master')
@section('content')

<!-- breadcumb-area end -->

<div class="contact-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h3><span>Get in </span> touch with us! </h3>
                    <p>Hãy viết ra những gì bạn muốn chúng tôi giúp bạn. Chúng tôi sẽ chủ động liên hệ cho bạn để tư vấn</p>
                    <form action="contact">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="text" placeholder="subject">
                            </div>
                            <div class="col-12">
                                <textarea name="massage" cols="30" rows="10" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button>Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-page-info">
                    <h3>Head Office</h3>
                    <ul class="border-bottom">
                        <li><i class="fa fa-home"></i> Quận Hồng Bàng, TP Hải Phòng</li>
                        <li><i class="fa fa-envelope"></i> ngoctuan@gmail.com </li>
                        <li><i class="fa fa-phone"></i>+084 0823.540.888, +084 0787.201.089</li>
                    </ul>
                    <h3>Branch Office</h3>
                    <ul class="mb-0">
                        <li><i class="fa fa-home"></i>Tam Đa Vĩnh Bảo Hải Phòng</li>
                        <li><i class="fa fa-envelope"></i> ngoctuan@gmail.com </li>
                        <li><i class="fa fa-phone"></i>+084 0823.540.888, +084 0787.201.089</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection