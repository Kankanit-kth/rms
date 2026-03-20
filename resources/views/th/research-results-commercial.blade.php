@extends('layouts.main')
@section('style')

@endsection
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">ผลงานวิจัยเชิงพาณิชย์</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/" class="text-white">หน้าหลัก</a></li>   
                     <li class="breadcrumb-item"><a href="/innovation-group" class="text-white">กลุ่มนวัตกรรม</a></li>
                    <li class="breadcrumb-item active text-secondary">ผลงานวิจัยเชิงพาณิชย์</li>
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
                            <h5 class="sub-title text-primary pe-3">ค้นหาผลงานวิจัย</h5>
                        </div> 
                        <form>
                            <div class="row g-4">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control p-3" placeholder="ค้นหาผลงานวิจัย" aria-label="ค้นหาผลงานวิจัย" aria-describedby="basic-addon2">
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

        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden py-5">
            <div class="container py-5">
                <!-- <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">ผลงานวิจัยเชิงพาณิชย์</h5>
                    </div>
                    <h1 class="display-5 mb-4">ผลงานวิจัยเชิงพาณิชย์</h1>
                    <p class="mb-0">รวมผลงานวิจัยวิจัยเชิงนโยบายสำหรับภาคธุรกิจ ประกอบด้วยนวัตกรรมแห่ง โลกอนาคต และเทคโนโลยีการเกษตร เพื่อประยุกต์ใช้ รวมถึงพัฒนา ต่อยอดผลิตภัณฑ์ ก่อให้เกิดการสร้างมูลค่าเชิงพาณิชย์ ช่วยให้การ หมุนเวียนของระบบเศรษฐกิจทั้งภายใน และต่างประเทศ</p>
                </div> -->
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/service-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">รวมผลงานวิจัยวิจัยเชิงนโยบายสำหรับภาคธุรกิจ ประกอบด้วยนวัตกรรมแห่ง โลกอนาคต และเทคโนโลยีการเกษตร เพื่อประยุกต์ใช้ รวมถึงพัฒนา ต่อยอดผลิตภัณฑ์ ก่อให้เกิดการสร้างมูลค่าเชิงพาณิชย์ ช่วยให้การ หมุนเวียนของระบบเศรษฐกิจทั้งภายใน และต่างประเทศ</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="/view-performance">ดูข้อมูล</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/service-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">รวมผลงานวิจัยวิจัยเชิงนโยบายสำหรับภาคธุรกิจ ประกอบด้วยนวัตกรรมแห่ง โลกอนาคต และเทคโนโลยีการเกษตร เพื่อประยุกต์ใช้ รวมถึงพัฒนา ต่อยอดผลิตภัณฑ์ ก่อให้เกิดการสร้างมูลค่าเชิงพาณิชย์ ช่วยให้การ หมุนเวียนของระบบเศรษฐกิจทั้งภายใน และต่างประเทศ</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/view-performance">ดูข้อมูล</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/service-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">รวมผลงานวิจัยวิจัยเชิงนโยบายสำหรับภาคธุรกิจ ประกอบด้วยนวัตกรรมแห่ง โลกอนาคต และเทคโนโลยีการเกษตร เพื่อประยุกต์ใช้ รวมถึงพัฒนา ต่อยอดผลิตภัณฑ์ ก่อให้เกิดการสร้างมูลค่าเชิงพาณิชย์ ช่วยให้การ หมุนเวียนของระบบเศรษฐกิจทั้งภายใน และต่างประเทศ</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/view-performance">ดูข้อมูล</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Services End -->
             


@endsection
@section('jscript')
@endsection
