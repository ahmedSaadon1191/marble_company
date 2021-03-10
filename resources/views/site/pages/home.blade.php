@extends('site.layouts.appHome')

@section('content')
      <!-- start layout -->


        <!-- start slider -->
        <div class="slider">
            <div class="div-logo">
                <img class="img1" src="{{ asset('site/assets/img/backgroundslider.svg') }}" alt="">
                <img class="img2" src="{{ asset('site/assets/img/logo-white.svg') }}" alt="">
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/'.$aboutUs[0]->logo) }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('site/assets/img/imslider.jpg') }}" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"> <i class="fas fa-chevron-left"></i> </span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    <!-- end slider -->

    <!-- start detailes -->
        <div class="detailes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="head1">solidity <span>and</span></h1>
                        <h1 class="head1">magnificence !</h1>
                        <p class="paragraph">
                            <img class="qutes1" src="{{ asset('site/assets/img/qutes1.svg') }}" alt="">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit lectus, mi morbi tellus. Velit vestibulum posuere ultricies porttitor tempor dictum et  mattis.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit lectus, mi morbi tellus. Velit vestibulum posuere ultricies porttitor tempor dictum et  mattis.
                            <img class="qutes2" src="{{ asset('site/assets/img/qutes1.svg') }}" alt="">
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-img">
                            <img src="{{ asset('site/assets/img/details1.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="detailes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-img">
                            <img src="{{ asset('site/assets/img/details2.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="head2">more colors <span>!</span></h1>
                        <p class="paragraph">
                            <img class="qutes1" src="{{ asset('site/assets/img/qutes1.svg') }}" alt="">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit lectus, mi morbi tellus. Velit vestibulum posuere ultricies porttitor tempor dictum et a, iaculis commodo erat dapibus urna laoreet dis, nunc rhoncus curabitur sodales in accumsan mattis.
                            <img class="qutes2" src="{{ asset('site/assets/img/qutes1.svg') }}" alt="">
                        </p>
                        <button class="but1">explore...</button>
                    </div>

                </div>
            </div>
        </div>
    <!-- end detailes -->


    <!-- start top products -->
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <h1 class="head2">top products</h1>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="content-img">
                                    <img src="{{ asset('site/assets/img/testprslider1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-img">
                                    <img src="{{ asset('site/assets/img/testprslider2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-img">
                                    <img src="{{ asset('site/assets/img/testprslider3.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-img">
                                    <img src="{{ asset('site/assets/img/testprslider1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-img">
                                    <img src="{{ asset('site/assets/img/testprslider1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="content-img">
                                    <img src="{{ asset('site/assets/img/testprslider1.jpg') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

    <!-- end top products -->


<!-- end layout -->
@endsection
