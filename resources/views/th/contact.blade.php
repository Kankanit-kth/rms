@extends('layouts.main')
@section('style')

@endsection
@section('content')

         <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-3" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">ติดต่อเรา</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/" class="text-white">หน้าหลัก</a></li>  
                    <li class="breadcrumb-item active text-secondary">ติดต่อเรา</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3 mb-4">สถานที่ติดต่อ</h5>
                        </div> 
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                            <div class="ps-3">
                                <h5>ที่ตั้ง</h5>
                                <p>กองส่งเสริมการวิจัยและบริการวิชาการ สำนักงานอธิการบดี มหาวิทยาลัยมหาสารคาม ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-tty fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">ช่องทางการติดต่อ</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">เบอร์โทรศัพท์:</h6>
                                            <a href="#" class="fs-5 text-primary">043-754-416</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Email:</h6>
                                            <a href="#" class="fs-5 text-primary">inbox_research@msu.ac.th</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex">
                                    <i class="fas fa-clone fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">เวลาทำการ</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">วันจันทร์ - ศุกร์:</h6>
                                            <a href="#" class="fs-5 text-primary">08.30 ถึง 16.30 น.</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">กรุณาติดต่อวันและเวลาราชการ</h6> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <div class="me-4">
                                <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 10px;"><i class="fas fa-share fa-3x text-primary"></i></div>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-secondary border-secondary me-2 p-0" href="https://www.facebook.com/NewResearch2020" target="_blank">facebook <i class="fas fa-chevron-circle-right"></i></a>
                                <a class="btn btn-secondary border-secondary mx-2 p-0" href="https://www.youtube.com/channel/UClL7rCd80_CqHx65kXpHolg" target="_blank">Youtube <i class="fas fa-chevron-circle-right"></i></a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                        <div class="sub-style mb-4">
                            <h5 class="sub-title text-primary pe-3">ติดต่อทางข้อความ</h5>
                        </div> 
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">ชื่อผู้ส่ง</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">อีเมลล์</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">เบอร์โทรศัพท์</label>
                                    </div>
                                </div> 
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">ชื่อเรื่อง</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">รายละเอียด</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">ส่งข้อความ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="office pt-5">
                    <div class="section-title text-center mb-ภ wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">แผนที่ติดต่อ</h5>
                        </div> 
                    </div>
                    <div class="row g-4 justify-content-center"> 
                        <div class="col-12 pt-5 wow zoomIn" data-wow-delay="0.1s">
                            <div class="rounded h-100">
                                <iframe class="rounded w-100" 
                                style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.486492498895!2d103.2509479751966!3d16.246818184458718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3122a39bef0d7b15%3A0xf8df11829d4b4e74!2z4LiB4Lit4LiH4Liq4LmI4LiH4LmA4Liq4Lij4Li04Lih4LiB4Liy4Lij4Lin4Li04LiI4Lix4Lii4LmB4Lil4Liw4Lia4Lij4Li04LiB4Liy4Lij4Lin4Li04LiK4Liy4LiB4Liy4Lij!5e0!3m2!1sth!2sth!4v1755786670258!5m2!1sth!2sth" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


@endsection
@section('jscript')
@endsection
