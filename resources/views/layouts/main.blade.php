<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>กองส่งเสริมการวิจัยและบริการวิชาการ มหาวิทยาลัยมหาสารคาม</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-10 text-center text-lg-start mb-lg-0">
                    <div class="d-flex">
                        <a href="#" class="text-white me-4"><i class="fas fa-envelope text-secondary me-2"></i>inbox_research@msu.ac.th</a>
                        <a href="#" class="text-white me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>043-754-416 ต่อ 1754</a>
                    </div>
                </div>
                <div class="col-lg-2 row-cols-1 text-right mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0"><img src="img/rmsLogo.png" class="img-fluid" alt="">นวัตกรรมและงานวิจัย</h1>
                    <!-- <img src="img/brand-logo.png" alt="brand-logo"> -->
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">หน้าหลัก</a>
                        <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">เกี่ยวกับ</a>
                        <a href="/innovation-group" class="nav-item nav-link {{ request()->is('innovation-group') ? 'active' : '' }}">กลุ่มนวัตกรรม</a>
                        <a href="/research-results-commercial" class="nav-item nav-link {{ request()->is('research-results-commercial') ? 'active' : '' }}">ผลงานวิจัยเชิงพาณิชย์</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">ผลงานวิจัยพร้อมใช้</span></a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">เชิงนโยบาย</a>
                                <a href="#" class="dropdown-item">เชิงสาธารณะ</a>
                                <a href="#" class="dropdown-item">เชิงพาณิชย์</a>
                                <a href="#" class="dropdown-item">ทรัพย์สินทางปัญญา</a>
                                <a href="#" class="dropdown-item">ผลงานที่ได้รับรางวัล</a>
                            </div>
                        </div> -->
                        <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">ติดต่อเรา</a>
                    </div>
                    <button class="btn btn-primary btn-md-square border-secondary mb-3 mb-md-3 mb-lg-0 me-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-3 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-3">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4 ibm-plex-sans-thai-semibold">ข้อมูลการติดต่อ</h4>
                            <a href="#" class="ibm-plex-sans-thai-regular"><i class="fa fa-map-marker-alt me-2"></i> กองส่งเสริมการวิจัยและบริการวิชาการ สำนักงานอธิการบดี มหาวิทยาลัยมหาสารคาม ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150</a> 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4 ibm-plex-sans-thai-semibold">ข้อมูลการติดต่อ</h4> 
                            <a href="#" class="ibm-plex-sans-thai-regular"><i class="fas fa-envelope me-2"></i> inbox_research@msu.ac.th</a>
                            <a href="#" class="ibm-plex-sans-thai-regular"><i class="fas fa-phone me-2"></i> 043-754-416</a> 
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn mx-1" href="https://www.facebook.com/NewResearch2020" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn mx-1" href="https://www.youtube.com/channel/UClL7rCd80_CqHx65kXpHolg" target="_blank"><i class="fab fa-youtube"></i></a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4 ibm-plex-sans-thai-semibold">เวลาทำการ</h4>
                            <div class="mb-3">
                                <h6 class="text-white mb-0 ibm-plex-sans-thai-regular">วันจันทร์ - ศุกร์ หรือวันทำการ:</h6>
                                <p class="text-white mb-0 ibm-plex-sans-thai-regular">08.30 ถึง 16.30 น.</p>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4 ibm-plex-sans-thai-semibold">เมนูหลัก</h4>
                            <a href="/" class="ibm-plex-sans-thai-regular"><i class="fas fa-angle-right me-2"></i> หน้าหลัก</a>
                            <a href="/about" class="ibm-plex-sans-thai-regular"><i class="fas fa-angle-right me-2"></i> เกี่ยวกับเรา</a>
                            <a href="/innovation-group" class="ibm-plex-sans-thai-regular"><i class="fas fa-angle-right me-2"></i>กลุ่มนวัตกรรม</a> 
                            <a href="/research-results-commercial" class="ibm-plex-sans-thai-regular"><i class="fas fa-angle-right me-2"></i>ผลงานวิจัยเชิงพาณิชย์</a> 
                            <a href="/contact" class="ibm-plex-sans-thai-regular"><i class="fas fa-angle-right me-2"></i>ติดต่อเรา</a> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white ibm-plex-sans-thai-regular">
                            <a href="#" class="border-bottom text-white">
                                <i class="fas fa-copyright text-light me-2"></i>นโยบายและผลงานวิจัย
                            </a>, กองส่งเสริมการวิจัยและบริการวิชาการ มหาวิทยาลัยมหาสารคาม
                        </span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white"> 
                        โดย <a class="border-bottom text-white ibm-plex-sans-thai-regular" href="#">งานพัฒนาระบบ กองแผนงาน</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>  

        <!-- Footer Start -->
        <!-- <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Opening Time</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Satday:</h6>
                                <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Our Services</h4>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Business</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Evaluation</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Migrate</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Study</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Counselling</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Work / Career</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-secondary mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="position-relative mx-auto rounded-pill">
                                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Footer End -->


        <!-- Copyright Start -->
        <!-- <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div> -->
                    <!-- <div class="col-md-6 text-center text-md-end text-white"> -->
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <!-- Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> -->
                    <!-- </div> -->
                <!-- </div>
            </div>
        </div> -->
        <!-- Copyright End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>
