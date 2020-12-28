<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kawal Covid 19</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('img/corona.png')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{asset('https://use.fontawesome.com/releases/v5.15.1/js/all.js')}}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('fancybox-master/dist/jquery.fancybox.min.css')}}" rel="stylesheet" />
        <link href="{{asset('owlcarousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Kawal Covid 19 Bontang</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#sebaran_kasus">Sebaran Kasus</a></li>
                        <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#pnp">Penanganan & Pencegahan</a></li>
                        <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#video_masyarakat">Video Masyarakat</a></li>
                        <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#infografis">Infografis</a></li>
                        <li class="nav-item mx-0 "><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{url('login')}}">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-12 mb-3">
                        <div class="rounded-15 shadow bg-white">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div id="homeSlider" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
                                            <li data-target="#homeSlider" data-slide-to="1"></li>
                                        </ol>
                                        <div class="carousel-inner rounded-15">
                                            <div class="carousel-item active">
                                                <div class="carousel-parent d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('img/dirumahsaja.png')}}" width="75%" height="75%" >
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="carousel-parent d-flex align-items-center justify-content-center">
                                                <img src="{{asset('img/jagajarak.png')}}" width="75%" height="75%" >
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#homeSlider" data-slide="prev">
                                            <span class="icon-slide fa fa-chevron-left text-white"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#homeSlider" data-slide="next">
                                            <span class="icon-slide fa fa-chevron-right text-white"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="rounded-15 shadow bg-white">
                            <div class="row justify-content-center pb-lg-5 pb-4 card-hotline">
                                <div class="col-md-12 mb-12 text-center p-lg-5 p-3">
                                    <h3 class="font-hotline font-weight-bold">Hotline Tanggap <span class="corona-text">COVID-19</span><br /> Bontang </h3>
                                </div>
                                <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1">
                                    <a href="tel:08115407119">
                                        <button class="btn btn-danger btn-block border-0 mb-1 hotline" type="submit">
                                            <i class="fa fa-2x fa-phone float-left align-middle mr-2 mt-1" aria-hidden="true"></i>
                                            <span class="align-middle float-left">Hotline 1</span>
                                            <span class="align-middle float-right mt-2">08115407119</span><br />
                                            <small class="sub-text float-left">PSC</small>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1">
                                    <a href="#">
                                        <button class="btn btn-danger btn-block border-0 mb-1" type="submit">
                                            
                                            <span class="align-middle float-left">Sekretariat</span><br>
                                            <span class="align-middle float-left">Posco PSC dan Media Center</span><br />
                                            <small class="sub-text float-left">Jl. A Yani Gg. Taekwondo I, RT 11, Kelurahan Api-Api, Kec. Bontang Utara</small>
                                        </button>
                                    </a>
                                </div>
                                <!-- <div class="col-lg-10 col-md-11 col-sm-11 col-11 py-lg-1">
                                    <a href="tel:1500649">
                                        <button class="btn btn-danger btn-block border-0 mb-1 hotline" type="submit">
                                            <i class="fa fa-2x fa-phone float-left align-middle mr-2 mt-1" aria-hidden="true"></i>
                                            <span class="align-middle float-left">Hotline 3</span>
                                            <span class="align-middle float-right mt-2">1500649</span><br />
                                            <small class="sub-text float-left">Dinas Kesehatan Jawa Tengah (Free Call)</small>
                                        </button>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section pt-0 position-relative sebaran-kasus" id="sebaran_kasus">
            <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
                <div class="rounded-15 shadow bg-white">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 mb-12 text-center p-4">
                            <h3 class="font-hotline font-weight-bold p-3 mb-3">Sebaran Kasus <span class="corona-text">COVID-19</span> Di Bontang</h3>
                            <p class="text-detail"><b>Update Terakhir : </b> 
                            {{$tgl ?? ''}} | 
                            <b>Sumber Data : </b> Dinas Kesehatan Kota Bontang
                        </div>
                    </div>
                    <div class="row justify-content-around mr-lg-3 mr-sm-2 ml-lg-3 ml-sm-2 ml-2 mr-2">
                        <div class="col-lg-3 p-md-3 p-2 col-6">
                            <div class="text-center box-total p-3">
                                <span class="text-detail-bold">Total Terkonfirmasi</span><br>
                                <span class="font-counter">{{$total ?? '0'}}                            
                                <span class="badge badge-total text-detail-bold">+{{$penambahan_total ?? '0'}}</span>
                                </span>  
                            </div>
                        </div>
                        <div class="col-lg-3 p-md-3 p-2 col-6">
                            <div class="text-center box-sembuh p-3">
                                <span class="text-detail-bold">Terkonfirmasi : Sembuh</span><br>
                                <span class="font-counter">{{$sembuh ?? '0'}}                            
                                <span class="badge badge-sembuh text-detail-bold">+{{$penambahan_sembuh ?? '0'}}</span>
                                </span>  
                            </div>
                        </div>
                        <div class="col-lg-3 p-md-3 p-2 col-6">
                            <div class="text-center box-meninggal p-3">
                                <span class="text-detail-bold">Terkonfirmasi : Meninggal</span><br>
                                <span class="font-counter">{{$meninggal ?? '0'}}                            
                                <span class="badge badge-meninggal text-detail-bold">+{{$penambahan_meninggal ?? '0'}}</span>
                                </span>  
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5">
                        <div class="col-lg-4 col-md-6 col-sm-8 col-10 text-center mr-2 ml-2 mb-4">
                            <a href="{{url('/covid19')}}" class="btn btn-outline-danger btn-block p-3 rounded-8">Lihat Data Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0 position-relative" id="pnp">
            <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
                <div class="rounded-15 shadow bg-primary">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-12 mb-12 text-center p-5">
                            <h3 class="font-hotline font-weight-bold p-3 text-white">Apa Yang Harus Dilakukan?</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center mr-lg-5 mr-sm-5 ml-lg-5 ml-sm-5">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-5 mr-3 ml-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-center text-detail active" id="pills-penanganan-tab" data-toggle="pill" href="#pills-penanganan" role="tab" aria-controls="pills-penanganan" aria-selected="true">Pencegahan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-center text-detail" id="pills-pencegahan-tab" data-toggle="pill" href="#pills-pencegahan" role="tab" aria-controls="pills-profile" aria-selected="false">Penanganan</a>
                                </li>
                            </ul>
                            <div class="tab-content bg-white shadow" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-penanganan" role="tabpanel" aria-labelledby="pills-penanganan-tab">
                                    <h3 class="text-center text-title pt-5 mb-4">Ayo Lindungi diri dari <span class="corona-text">COVID-19</span></h3>
                                    <div class="row">
                                        <div class="col-lg-12 penanganan">
                                            <img src="{{asset('img/cegah-covid.png')}}" width="100%" height="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade text-center" id="pills-pencegahan" role="tabpanel" aria-labelledby="pills-pencegahan-tab">
                                <h3 class="text-center text-title pt-5 mb-4">Ayo Lindungi diri dari <span class="corona-text">COVID-19</span></h3>
                                <div class="row">
                                    <div class="col-lg-12 pencegahan">
                                        <img src="{{asset('img/gejala-covid.jpg')}}" width="100%" height="100%" alt="">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0 position-relative " id="video_masyarakat">
            <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
                <div class="rounded-15 shadow bg-white">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-12 text-center mb-3">
                            <h3 class="font-hotline font-weight-bold p-4">Video Masyarakat <br /><span class="text-success">#BersamaLawanCorona</span></h3>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-lg-12 col-md-12 col-sm-12 mb-4 ">
                            <div class="owl-carousel owl-theme">
                                                               
                                <div class="item embed-responsive embed-responsive-16by9"><iframe width="644" height="362" src="https://www.youtube.com/embed/HtwWxgXmBdE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                <div class="item embed-responsive embed-responsive-16by9"><iframe width="644" height="362" src="https://www.youtube.com/embed/rg0W5baVWC0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                <div class="item embed-responsive embed-responsive-16by9"><iframe width="644" height="362" src="https://www.youtube.com/embed/0yxWfBgBNVk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section pt-0 position-relative" id="infografis">
            <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
                <ul class="nav nav-tabs" id="infografisTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-center text-detail active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Infografis</a>
                    </li>
                   
                </ul>
                <div class="tab-content bg-white">
                    <div class="tab-pane fade show active text-center" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
                        <div class="rounded-15 shadow bg-white">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-12 text-center mb-3">
                                    <h3 class="font-hotline font-weight-bold p-3">Infografis</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 infografis">
                                    <div class="owl-carousel owl-theme">
                                    @forelse($mappingcovid as $data)
                                        <div class="item">
                                        <a data-fancybox="gallery" href="{{asset('storage/map/'.$data->map)}}">
                                        <img src="{{asset('storage/map/'.$data->map)}}" ></a>
                                        </div>
                                    @empty
                                    <div class="item">Not Found</div>
                                    @endforelse
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Kawal Covid 19 Bontang 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- Bootstrap core JS-->
        <script src="{{asset('jquery/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/bootstrap.bundle.min.js')}}"></script>
        <!-- Third party plugin JS-->
        <script src="{{asset('jquery/jquery.easing.min.js')}}"></script>
        <!-- Contact form JS-->
        <script src="{{asset('assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('assets/mail/contact_me.js')}}"></script>
        <script src="{{asset('owlcarousel/dist/owl.carousel.min.js')}}"></script>
        <script src="{{asset('fancybox-master/dist/jquery.fancybox.min.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
            $('.owl-carousel').owlCarousel();
            });
        </script>
    </body>
</html>
