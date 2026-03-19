@extends('layouts.main')
@section('style')

@endsection
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">นวัตกรรม</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/" class="text-white">หน้าหลัก</a></li>  
                    <li class="breadcrumb-item"><a href="/innovation-group" class="text-white">กลุ่มนวัตกรรม</a></li>
                    <li class="breadcrumb-item active text-secondary">รายละเอียดนวัตกรรม</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- View Performance Start -->
        <div class="container-fluid overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="bg-light rounded">
                            <img src="img/about-2.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                            <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3 mb-4">สมุมไพร</h5>
                        <h1 class="display-5 mb-4">ชื่อนวัตกรรมและผลงานวิจัย..</h1>
                        <p class="mb-4">หลักการ...............</p>
                        <div class="row gy-4 align-items-center"> 
                            <div class="col-12 col-md-12">
                                <div class="mb-4">
                                    <p class="text-primary h6 mb-3"><i class="fa fa-star text-secondary me-2"></i> จุดเด่น</p>
                                    <p style="padding-left: 30px;">ข้อมูลจุดเด่น......</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-user text-secondary me-2"></i> หน้าโครงการ</p>
                                    <p style="padding-left: 30px;">ชื่อ-นามสกุล เบอร์โทรติดต่อ อีเมลล์</p>
                                    <p class="text-primary h6 mb-3"><i class="fa fa-fa fa-user-plus text-secondary me-2"></i> ผู้ร่วมโครงการ</p>
                                    <p style="padding-left: 30px;">ชื่อ-นามสกุลร่วมท่านที่ 1 เบอร์โทรติดต่อ อีเมลล์</p>
                                    <p style="padding-left: 30px;">ชื่อ-นามสกุลร่วมท่านที่ 2 เบอร์โทรติดต่อ อีเมลล์</p> 
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 d-flex flex-wrap">
                                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                            <a href="#" class="position-relative wow tada" data-wow-delay=".9s">
                                                <i class="far fa-envelope text-primary fa-3x"></i> 
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="text-primary">อีเมลล์</span>
                                            <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">E-mail.gmail.com</span>
                                        </div> 
                                    </div> 
                                    <div class="col-12 col-sm-6 d-flex flex-wrap">
                                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                            <a href="#" class="position-relative wow tada" data-wow-delay=".9s">
                                                <i class="fa fa-phone-alt text-primary fa-3x"></i>
                                                <div class="position-absolute" style="top: 0; left: 25px;">
                                                    <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="text-primary">เบอร์โทรติดต่อ</span>
                                            <span class="text-secondary fw-bold fs-5" style="letter-spacing: 2px;">0987654321</span>
                                        </div> 
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="container-fluid training overflow-hidden mb-5">
            <div class="container"> 
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">รูปผลงาน</a> 
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4 text-center"> 
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">เปิดดู</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">รูปผลงาน</a> 
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4 text-center"> 
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">เปิดดู</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">รูปผลงาน</a> 
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4 text-center"> 
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">เปิดดู</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h4 text-white mb-0">รูปผลงาน</a> 
                                </div>
                            </div>
                            <div class="training-content bg-secondary rounded-bottom p-4 text-center"> 
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">เปิดดู</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- View Performance End -->

@endsection
@section('jscript')
@endsection
