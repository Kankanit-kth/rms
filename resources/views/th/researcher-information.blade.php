@extends('layouts.main')
@section('style')

@endsection
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-3" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">ข้อมูลนักวิจัย</h1>
            <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="/" class="text-white">หน้าหลัก</a></li>  
                <li class="breadcrumb-item active text-secondary">ข้อมูลนักวิจัย</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
    <!-- Search Start -->
    <div class="container-fluid contact overflow-hidden py-1 mt-3">
        <div class="container py-2">
            <div class="row g-5 mb-1">
                <div class="col-lg-12 wow fadeInRight" data-wow-delay="0.3">
                    <div class="sub-style mb-4">
                        <h5 class="sub-title text-primary pe-3">ค้นหาข้อมูลนักวิจัย</h5>
                    </div> 
                    <form>
                        <div class="row g-4">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control p-3" placeholder="ค้นหาข้อมูลนักวิจัย" aria-label="ค้นหาข้อมูลนักวิจัย" aria-describedby="basic-addon2">
                                <button type="button" class="input-group-text px-4" id="#">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->
    <!-- Training Start -->
        <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <!-- <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">นักวิจัย</h5>
                    </div>
                    <h1 class="display-5 mb-4">ข้อมูลนักวิจัย</h1>
                    <p class="mb-0">ข้อมูลนักวิจัย ที่มีนวัตกรรมและผลงานวิจัย ท่านสามารถเลือกชมและติดต่อนักวิจัยโดยตรง ผ่านช่องทางที่นักวิจัยลงข้อมูลให้ติดต่อ.....</p>
                </div> -->
                <div class="row g-4">
                    @foreach(range(1, 12) as $index)
                        <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ ($index - 1) * 0.1 + 0.1 }}s">
                            <div class="training-item">
                                <div class="training-inner">
                                    <img src="img/training-{{ $index % 4 + 1 }}.jpg" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="training-title-name">
                                        <a href="#" class="h4 text-white mb-0">นักวิจัย {{ $index }}</a>
                                        <a href="#" class="h4 text-white mb-0">สาขาที่ {{ $index }}</a>
                                    </div>
                                </div>
                                <div class="training-content bg-secondary rounded-bottom p-4">
                                    <a href="#"><h4 class="text-white">นักวิจัย {{ $index }}</h4></a>
                                    <p class="text-white-50">ข้อมูลนักวิจัยคนที่ {{ $index }} พร้อมประวัติและผลงานวิจัยที่โดดเด่น</p>
                                    <a class="btn btn-secondary rounded-pill text-white p-0" href="#">ดูเพิ่มเติม <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 text-center">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="/researcher-information">ข้อมูลนักวิจัยทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Training End -->

@endsection
@section('jscript')
@endsection
