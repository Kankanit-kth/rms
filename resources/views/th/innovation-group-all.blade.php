@extends('layouts.main')
@section('style')

@endsection
@section('content')

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">กลุ่มนวัตกรรม</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/" class="text-white">หน้าหลัก</a></li>   
                    <li class="breadcrumb-item"><a href="/innovation-group" class="text-white">กลุ่มนวัตกรรม</a></li>
                    <li class="breadcrumb-item active text-secondary">กลุ่มนวัตกรรมทั้งหมด</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">กลุ่มนวัตกรรม</h5>
                    </div>
                    <h1 class="display-5 mb-4">กลุ่มนวัตกรรมที่ได้รับความนิยม</h1>
                    <p class="mb-0">นวัตกรรมที่มีผู้สนใจ และเข้าเยี่ยมชมมากที่สุด ข้อมูลนวัตกรรมถูกแยกออกเป็นกลุ่มที่โด่ดเด่น ที่ถูกจัดอันดับเป็น 6 กลุ่มนวัตกรรม โดยมีข้อมูลนวัตกรรมให้เยี่ยมชมดังนี้</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/pageHome-1.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="/research-results-commercial" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">จุดเริ่มต้นของการสร้างองค์ความรู้ใหม่ นักวิจัยจะศึกษา ค้นคว้า และทดลองเพื่อหาคำตอบในสิ่งที่โลกยังไม่รู้ หรือหาวิธีแก้ปัญหาที่ยังไม่มีใครแก้ได้</p>
                                            <a class="btn btn-primary border-secondary rounded-pill py-3 px-5" href="/research-results-commercial">เยี่ยมชมข้อมูล</a>
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
                                    <img src="img/pageHome-2.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="/research-results-commercial" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">จุดเริ่มต้นของการสร้างองค์ความรู้ใหม่ นักวิจัยจะศึกษา ค้นคว้า และทดลองเพื่อหาคำตอบในสิ่งที่โลกยังไม่รู้ หรือหาวิธีแก้ปัญหาที่ยังไม่มีใครแก้ได้</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/research-results-commercial">เยี่ยมชมข้อมูล</a>
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
                                    <img src="img/pageHome-3.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="/research-results-commercial"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">จุดเริ่มต้นของการสร้างองค์ความรู้ใหม่ นักวิจัยจะศึกษา ค้นคว้า และทดลองเพื่อหาคำตอบในสิ่งที่โลกยังไม่รู้ หรือหาวิธีแก้ปัญหาที่ยังไม่มีใครแก้ได้</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/research-results-commercial">เยี่ยมชมข้อมูล</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/pageHome-4.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="/research-results-commercial"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">จุดเริ่มต้นของการสร้างองค์ความรู้ใหม่ นักวิจัยจะศึกษา ค้นคว้า และทดลองเพื่อหาคำตอบในสิ่งที่โลกยังไม่รู้ หรือหาวิธีแก้ปัญหาที่ยังไม่มีใครแก้ได้</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/research-results-commercial">เยี่ยมชมข้อมูล</a>
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
                                    <img src="img/pageHome-5.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="/research-results-commercial"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..่</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">จุดเริ่มต้นของการสร้างองค์ความรู้ใหม่ นักวิจัยจะศึกษา ค้นคว้า และทดลองเพื่อหาคำตอบในสิ่งที่โลกยังไม่รู้ หรือหาวิธีแก้ปัญหาที่ยังไม่มีใครแก้ได้</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/research-results-commercial">เยี่ยมชมข้อมูล</a>
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
                                    <img src="img/pageHome-6.png" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">ชื่องานนวัตกรรมและผลงานวิจัย..</a>
                                        </div> 
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="/research-results-commercial"><h4 class="text-white mb-4 py-3">ชื่องานนวัตกรรมและผลงานวิจัย..</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">จุดเริ่มต้นของการสร้างองค์ความรู้ใหม่ นักวิจัยจะศึกษา ค้นคว้า และทดลองเพื่อหาคำตอบในสิ่งที่โลกยังไม่รู้ หรือหาวิธีแก้ปัญหาที่ยังไม่มีใครแก้ได้</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="/research-results-commercial">เยี่ยมชมข้อมูล</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">แสดงทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

@endsection
@section('jscript')
@endsection
