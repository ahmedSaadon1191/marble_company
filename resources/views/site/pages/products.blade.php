@extends('site.layouts.app')

@section('content')




      <!-- start layout -->

          <!-- start products slider -->
          <div class="container-fluid">
            <div class="slider productSlider">
              <p class="phragraph_productslider">
                <img class="qutes1" src="img/qutes2.svg" alt="">
                  Lorem ipsum dolor sit amet consectetur adipiscing elit convallis, ornare nisi et duis hac inceptos nibh, augue mi nulla porttitor velit sagittis laoreet. Faucibus  eu senectus non proin curae.
                <img class="qutes2" src="img/qutes2.svg" alt="">
              </p>
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/products1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/products1.jpg" class="d-block w-100" alt="...">
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
          </div>
          <!-- end products slider -->

          <!-- start product imgs -->
            <div class="container-fluid productimegs">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                  <img src="img/productsimeg1.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                  <img src="img/productsimeg2.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                  <img src="img/productsimeg3.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                  <img src="img/productsimeg4.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                  <img src="img/productsimeg5.jpg" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                  <img src="img/productsimeg6.jpg" alt="">
                </div>
              </div>
            </div>
          <!-- end product imgs -->

          <!-- strat form search -->
            <div class="container form_product_search">
              <form action="">
                <div class="row">
                  <div class="col-lg-6">
                      <div class="row g-3 align-items-center">
                        <div class="col-auto">
                          <label class="col-form-label">search for color</label>
                        </div>
                        <div class="col-auto inputcontent">
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Select Color....</option>
                            <option value="1">red</option>
                            <option value="2">blue</option>
                            <option value="3">black</option>
                          </select>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="row g-3 align-items-center">
                        <div class="col-auto">
                          <label  class="col-form-label">search for </label>
                        </div>
                        <div class="col-auto inputcontent">
                          <input type="text" class="form-control" placeholder="# sampel Number">
                        </div>
                      </div>
                  </div>
                </div>
              </form>
              <div class="row search_result">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <img src="img/resultserach1.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                  <img src="img/resultserach2.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <img src="img/resultserach3.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <img src="img/resultserach1.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <img src="img/resultserach2.jpg" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <img src="img/resultserach3.jpg" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <a href="#" class="but1">more</a>
                </div>
              </div>
            </div>
          <!-- end form search -->


      <!-- start detailes -->

      <!-- end detailes -->


      <!-- start top products -->

        <div class="products">
          <div class="container">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                      <h1 class="head2">top products</h1>
                      <div class="owl-carousel owl-theme">
                          <div class="item">
                              <div class="content-img">
                                  <img src="img/testprslider1.jpg" alt="">
                              </div>
                          </div>
                          <div class="item">
                              <div class="content-img">
                                  <img src="img/testprslider2.jpg" alt="">
                              </div>
                          </div>
                          <div class="item">
                              <div class="content-img">
                                  <img src="img/testprslider3.jpg" alt="">
                              </div>
                          </div>
                          <div class="item">
                              <div class="content-img">
                                  <img src="img/testprslider1.jpg" alt="">
                              </div>
                          </div>
                          <div class="item">
                              <div class="content-img">
                                  <img src="img/testprslider1.jpg" alt="">
                              </div>
                          </div>
                          <div class="item">
                              <div class="content-img">
                                  <img src="img/testprslider1.jpg" alt="">
                              </div>
                          </div>

                      </div>
                  </div>
                  <div class="col-md-1"></div>
              </div>
          </div>
        </div>

      <!-- end top products -->


      <!-- end layout -->
@endsection
