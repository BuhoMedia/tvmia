@extends('layouts.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">

      <section class="">
          <!-- Hero Slider -->
          <div class="js-slick-carousel"
              data-hs-slick-carousel-options='{
                 "dots": true,
                 "dotsClass": "slick-pagination slick-pagination-v1 mt-n5"
               }'>
              <div class="js-slide">
                  <div style="background-image: url(img/slide1.jpg);height: 500px;background-position: center;background-repeat: no-repeat;">
                      <div class="container px-md-6">
                          <div class="max-w-500 space-top-3">
                              <div class="pt-2 mt-1">
                                  <h6 class="product--title display-9 text-lh-1dot15 mb-0" style="color: white">
                                      Te conectamos con tus programas preferidos
                                  </h6>
                                  <div class="row">
                                    <div class="col-lg-3 text-center">
                                      <a href="#pricing" class="button1">VER PLANES</a>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                      <a href="#quetvmia" class="button2">+ INFO</a>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--End Hero Slider -->
      </section>


      <section id="canales">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home">ARGENTINA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">COLOMBIA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2">PERÚ</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu5">REPÚBLICA DOMINICANA</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu3">ESPAÑA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu7">VENEZUELA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu4">ENTRETENIMIENTO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu6">TODOS</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home" class="container tab-pane active">
                  <ul class="canalesimg">
                    <li><img src="img/canales/IMG.png"></li>
                    <li><img src="img/canales/IMG_1.png"></li>
                    <li><img src="img/canales/IMG_2.png"></li>
                    <li><img src="img/canales/IMG_3.png"></li>
                    <li><img src="img/canales/IMG_4.png"></li>
                    <li><img src="img/canales/IMG_5.png"></li>
                    <li><img src="img/canales/IMG_6.png"></li>
                    <li><img src="img/canales/IMG_7.png"></li>
                    <li><img src="img/canales/IMG_8.png"></li>
                    <li><img src="img/canales/IMG_9.png"></li>
                    <li><img src="img/canales/IMG_10.png"></li>
                    <li><img src="img/canales/IMG_11.png"></li>
                    <li><img src="img/canales/IMG_12.png"></li>
                    <li><img src="img/canales/IMG_13.png"></li>
                    <li><img src="img/canales/IMG_14.png"></li>
                    <li><img src="img/canales/IMG_15.png"></li>
                    <li><img src="img/canales/IMG_16.png"></li>
                    <li><img src="img/canales/IMG_17.png"></li>
                    <li><img src="img/canales/IMG_18.png"></li>
                    <li><img src="img/canales/IMG_19.png"></li>
                    <li><img src="img/canales/IMG_20.png"></li>
                    <li><img src="img/canales/IMG_21.png"></li>
                    <li><img src="img/canales/IMG_22.png"></li>
                    <li><img src="img/canales/IMG_23.png"></li>
                    <li><img src="img/canales/IMG_24.png"></li>
                    <li><img src="img/canales/IMG_25.png"></li>
                    <li><img src="img/canales/IMG_26.png"></li>
                    <li><img src="img/canales/IMG_27.png"></li>
                    <li><img src="img/canales/IMG_28.png"></li>
                  </ul>
                </div>
                <div id="menu1" class="container tab-pane fade">
                  <ul class="canalesimg">
                    <li><img src="img/canales/IMG_29.png"></li>
                    <li><img src="img/canales/IMG_30.png"></li>
                    <li><img src="img/canales/IMG_31.png"></li>
                    <li><img src="img/canales/IMG_32.png"></li>
                    <li><img src="img/canales/IMG_33.png"></li>
                    <li><img src="img/canales/IMG_34.png"></li>
                    <li><img src="img/canales/IMG_35.png"></li>
                    <li><img src="img/canales/IMG_36.png"></li>
                    <li><img src="img/canales/IMG_37.png"></li>
                    <li><img src="img/canales/IMG_38.png"></li>
                    <li><img src="img/canales/IMG_107.png"></li>
                  </ul>
                </div>
                <div id="menu2" class="container tab-pane fade">
                  <ul class="canalesimg">
                    <li><img src="img/canales/IMG_65.png"></li>
                    <li><img src="img/canales/IMG_72.png"></li>
                    <li><img src="img/canales/IMG_71.png"></li>
                    <li><img src="img/canales/IMG_70.png"></li>
                    <li><img src="img/canales/IMG_68.png"></li>
                    <li><img src="img/canales/IMG_69.png"></li>
                    <li><img src="img/canales/IMG_67.png"></li>
                    <li><img src="img/canales/IMG_66.png"></li>
                    <li><img src="img/canales/IMG_64.png"></li>
                    <li><img src="img/canales/IMG_36.png"></li>
                  </ul>
              </div>
              <div id="menu3" class="container tab-pane fade">
                <ul class="canalesimg">
                  <li><img src="img/canales/IMG_53.png"></li>
                  <li><img src="img/canales/IMG_54.png"></li>
                  <li><img src="img/canales/IMG_55.png"></li>
                  <li><img src="img/canales/IMG_56.png"></li>
                  <li><img src="img/canales/IMG_57.png"></li>
                  <li><img src="img/canales/IMG_58.png"></li>
                  <li><img src="img/canales/IMG_59.png"></li>
                  <li><img src="img/canales/IMG_60.png"></li>
                  <li><img src="img/canales/IMG_61.png"></li>
                  <li><img src="img/canales/IMG_62.png"></li>
                  <li><img src="img/canales/IMG_63.png"></li>
                </ul>
            </div>
            <div id="menu4" class="container tab-pane fade">
              <ul class="canalesimg">
                <li><img src="img/canales/IMG_39.png"></li>
                <li><img src="img/canales/IMG_40.png"></li>
                <li><img src="img/canales/IMG_41.png"></li>
                <li><img src="img/canales/IMG_42.png"></li>
                <li><img src="img/canales/IMG_43.png"></li>
                <li><img src="img/canales/IMG_44.png"></li>
                <li><img src="img/canales/IMG_45.png"></li>
                <li><img src="img/canales/IMG_46.png"></li>
                <li><img src="img/canales/IMG_47.png"></li>
                <li><img src="img/canales/IMG_48.png"></li>
                <li><img src="img/canales/IMG_49.png"></li>
                <li><img src="img/canales/IMG_50.png"></li>
                <li><img src="img/canales/IMG_51.png"></li>
                <li><img src="img/canales/IMG_52.png"></li>
              </ul>
          </div>
          <!-- <div id="menu5" class="container tab-pane fade">
            <ul class="canalesimg">
              <li><img src="img/canales/IMG_74.png"></li>
              <li><img src="img/canales/IMG_75.png"></li>
              <li><img src="img/canales/IMG_76.png"></li>
              <li><img src="img/canales/IMG_77.png"></li>
              <li><img src="img/canales/IMG_78.png"></li>
              <li><img src="img/canales/IMG_79.png"></li>
              <li><img src="img/canales/IMG_80.png"></li>
              <li><img src="img/canales/IMG_81.png"></li>
              <li><img src="img/canales/IMG_82.png"></li>
              <li><img src="img/canales/IMG_83.png"></li>
              <li><img src="img/canales/IMG_84.png"></li>
              <li><img src="img/canales/IMG_85.png"></li>
              <li><img src="img/canales/IMG_86.png"></li>
              <li><img src="img/canales/IMG_87.png"></li>
              <li><img src="img/canales/IMG_88.png"></li>
              <li><img src="img/canales/IMG_89.png"></li>
              <li><img src="img/canales/IMG_90.png"></li>
              <li><img src="img/canales/IMG_91.png"></li>
              <li><img src="img/canales/IMG_92.png"></li>
              <li><img src="img/canales/IMG_93.png"></li>
              <li><img src="img/canales/IMG_94.png"></li>
              <li><img src="img/canales/IMG_95.png"></li>
              <li><img src="img/canales/IMG_96.png"></li>
              <li><img src="img/canales/IMG_97.png"></li>
              <li><img src="img/canales/IMG_98.png"></li>
              <li><img src="img/canales/IMG_99.png"></li>
              <li><img src="img/canales/IMG_100.png"></li>
              <li><img src="img/canales/IMG_101.png"></li>
              <li><img src="img/canales/IMG_103.png"></li>
            </ul>
        </div> -->
        <div id="menu6" class="container tab-pane fade">
          <ul class="canalesimg">
            <li><img src="img/canales/IMG.png"></li>
            <li><img src="img/canales/IMG_1.png"></li>
            <li><img src="img/canales/IMG_2.png"></li>
            <li><img src="img/canales/IMG_3.png"></li>
            <li><img src="img/canales/IMG_4.png"></li>
            <li><img src="img/canales/IMG_5.png"></li>
            <li><img src="img/canales/IMG_6.png"></li>
            <li><img src="img/canales/IMG_7.png"></li>
            <li><img src="img/canales/IMG_8.png"></li>
            <li><img src="img/canales/IMG_9.png"></li>
            <li><img src="img/canales/IMG_10.png"></li>
            <li><img src="img/canales/IMG_11.png"></li>
            <li><img src="img/canales/IMG_12.png"></li>
            <li><img src="img/canales/IMG_13.png"></li>
            <li><img src="img/canales/IMG_14.png"></li>
            <li><img src="img/canales/IMG_15.png"></li>
            <li><img src="img/canales/IMG_16.png"></li>
            <li><img src="img/canales/IMG_17.png"></li>
            <li><img src="img/canales/IMG_18.png"></li>
            <li><img src="img/canales/IMG_19.png"></li>
            <li><img src="img/canales/IMG_20.png"></li>
            <li><img src="img/canales/IMG_21.png"></li>
            <li><img src="img/canales/IMG_22.png"></li>
            <li><img src="img/canales/IMG_23.png"></li>
            <li><img src="img/canales/IMG_24.png"></li>
            <li><img src="img/canales/IMG_25.png"></li>
            <li><img src="img/canales/IMG_26.png"></li>
            <li><img src="img/canales/IMG_27.png"></li>
            <li><img src="img/canales/IMG_28.png"></li>
            <li><img src="img/canales/IMG_29.png"></li>
            <li><img src="img/canales/IMG_30.png"></li>
            <li><img src="img/canales/IMG_31.png"></li>
            <li><img src="img/canales/IMG_32.png"></li>
            <li><img src="img/canales/IMG_33.png"></li>
            <li><img src="img/canales/IMG_34.png"></li>
            <li><img src="img/canales/IMG_35.png"></li>
            <li><img src="img/canales/IMG_36.png"></li>
            <li><img src="img/canales/IMG_37.png"></li>
            <li><img src="img/canales/IMG_38.png"></li>
            <li><img src="img/canales/IMG_39.png"></li>
            <li><img src="img/canales/IMG_40.png"></li>
            <li><img src="img/canales/IMG_41.png"></li>
            <li><img src="img/canales/IMG_42.png"></li>
            <li><img src="img/canales/IMG_43.png"></li>
            <li><img src="img/canales/IMG_44.png"></li>
            <li><img src="img/canales/IMG_45.png"></li>
            <li><img src="img/canales/IMG_46.png"></li>
            <li><img src="img/canales/IMG_47.png"></li>
            <li><img src="img/canales/IMG_48.png"></li>
            <li><img src="img/canales/IMG_49.png"></li>
            <li><img src="img/canales/IMG_50.png"></li>
            <li><img src="img/canales/IMG_51.png"></li>
            <li><img src="img/canales/IMG_52.png"></li>
            <li><img src="img/canales/IMG_53.png"></li>
            <li><img src="img/canales/IMG_54.png"></li>
            <li><img src="img/canales/IMG_55.png"></li>
            <li><img src="img/canales/IMG_56.png"></li>
            <li><img src="img/canales/IMG_57.png"></li>
            <li><img src="img/canales/IMG_58.png"></li>
            <li><img src="img/canales/IMG_59.png"></li>
            <li><img src="img/canales/IMG_60.png"></li>
            <li><img src="img/canales/IMG_61.png"></li>
            <li><img src="img/canales/IMG_62.png"></li>
            <li><img src="img/canales/IMG_63.png"></li>
            <li><img src="img/canales/IMG_64.png"></li>
            <li><img src="img/canales/IMG_65.png"></li>
            <li><img src="img/canales/IMG_66.png"></li>
            <li><img src="img/canales/IMG_67.png"></li>
            <li><img src="img/canales/IMG_68.png"></li>
            <li><img src="img/canales/IMG_69.png"></li>
            <li><img src="img/canales/IMG_70.png"></li>
            <li><img src="img/canales/IMG_71.png"></li>
            <li><img src="img/canales/IMG_72.png"></li>
            <li><img src="img/canales/IMG_73.png"></li>
            <li><img src="img/canales/IMG_74.png"></li>
            <li><img src="img/canales/IMG_75.png"></li>
            <li><img src="img/canales/IMG_76.png"></li>
            <li><img src="img/canales/IMG_77.png"></li>
            <li><img src="img/canales/IMG_78.png"></li>
            <li><img src="img/canales/IMG_79.png"></li>
            <li><img src="img/canales/IMG_80.png"></li>
            <li><img src="img/canales/IMG_81.png"></li>
            <li><img src="img/canales/IMG_82.png"></li>
            <li><img src="img/canales/IMG_83.png"></li>
            <li><img src="img/canales/IMG_84.png"></li>
            <li><img src="img/canales/IMG_85.png"></li>
            <li><img src="img/canales/IMG_86.png"></li>
            <li><img src="img/canales/IMG_87.png"></li>
            <li><img src="img/canales/IMG_88.png"></li>
            <li><img src="img/canales/IMG_89.png"></li>
            <li><img src="img/canales/IMG_90.png"></li>
            <li><img src="img/canales/IMG_91.png"></li>
            <li><img src="img/canales/IMG_92.png"></li>
            <li><img src="img/canales/IMG_93.png"></li>
            <li><img src="img/canales/IMG_94.png"></li>
            <li><img src="img/canales/IMG_95.png"></li>
            <li><img src="img/canales/IMG_96.png"></li>
            <li><img src="img/canales/IMG_97.png"></li>
            <li><img src="img/canales/IMG_98.png"></li>
            <li><img src="img/canales/IMG_99.png"></li>
            <li><img src="img/canales/IMG_100.png"></li>
            <li><img src="img/canales/IMG_101.png"></li>
            <li><img src="img/canales/IMG_102.png"></li>
            <li><img src="img/canales/IMG_103.png"></li>
            <li><img src="img/canales/IMG_104.png"></li>
            <li><img src="img/canales/IMG_105.png"></li>
            <li><img src="img/canales/IMG_106.png"></li>
            <li><img src="img/canales/IMG_107.png"></li>
          </ul>
      </div>
      <div id="menu7" class="container tab-pane fade">
        <ul class="canalesimg">
          <li><img src="img/canales/IMG_108.png"></li>
          <li><img src="img/canales/IMG_109.png"></li>
          <li><img src="img/canales/IMG_110.png"></li>
          <li><img src="img/canales/IMG_111.png"></li>
          <li><img src="img/canales/IMG_112.png"></li>
          <li><img src="img/canales/IMG_113.png"></li>
          <li><img src="img/canales/IMG_114.png"></li>
          <li><img src="img/canales/IMG_115.png"></li>
          <li><img src="img/canales/IMG_116.png"></li>
          <li><img src="img/canales/IMG_117.png"></li>
          <li><img src="img/canales/IMG_118.png"></li>
          <li><img src="img/canales/IMG_119.png"></li>
          <li><img src="img/canales/IMG_120.png"></li>
          <li><img src="img/canales/IMG_121.png"></li>
          <li><img src="img/canales/IMG_122.png"></li>
          <li><img src="img/canales/IMG_123.png"></li>
          <li><img src="img/canales/IMG_124.png"></li>
          <li><img src="img/canales/IMG_125.png"></li>
          <li><img src="img/canales/IMG_126.png"></li>
        </ul>
    </div>
            </div>
          </div>
        </div>
      </section>

      <div class="bg-img-hero space-2 hideresp" id="quetvmia" style="background-image: url(img/bgsec1.jpg);">
          <div class="container px-md-4">
              <div class="row">
                  <div class="col-lg-6 col-xl-5 space-1">
                      <div class="">
                          <a href="../single-movies/single-movies-v4.html" class="display-8 h-w-primary d-inline-block font-secondary mb-6">Somos TVmia</a>
                          <p class="text-gray-1800 mb-6 font-secondary d-block font-size-1 font-weight-medium">Tv Mia quiere que te sientas como en tu casa y puedas ver la programación de todos los canales de aire de tu pais y la puedas compartir con los tuyos, estés donde estés.</p>
                          <div class="row">
                            <div class="col-lg-3 text-center">
                              <a href="#pricing" class="button1">VER PLANES</a>
                            </div>
                            <div class="col-lg-4 text-center">
                              <a href="#" class="button2">PRUEBA GRATIS</a>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-xl-7 d-none d-lg-flex align-items-center justify-content-center">
                      <div class="">
                          <!-- Video -->
                          <a style="position: relative; left: 200px;" class="js-fancybox btn btn-play d-flex align-items-center justify-content-center rounded-circle" href="javascript:;"
                              data-hs-fancybox-options='{
                                  "src": "//youtube.com/0qisGSwZym4",
                                  "speed": 700
                              }'>
                              <i class="fas fa-play text-primary"></i>
                          </a>
                          <!-- End Video -->
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="bg-img-hero space-2 showresp  bgradiant5" >
          <div class="container px-md-4">
              <div class="row">
                  <div class="col-lg-6 col-xl-5 space-1">
                      <div class="">
                          <a href="../single-movies/single-movies-v4.html" class="display-8 h-w-primary d-inline-block font-secondary mb-6">Somos TVmia</a>
                          <p class="text-gray-1800 mb-6 font-secondary d-block font-size-1 font-weight-medium">Tv Mia quiere que te sientas como en tu casa y puedas ver la programación de todos los canales de aire de tu pais y la puedas compartir con los tuyos, estés donde estés.</p>
                          <div class="row">
                            <div class="col-lg-3 text-center">
                              <a href="#pricing" class="button1">VER PLANES</a>
                            </div>
                            <div class="col-lg-4 text-center">
                              <a href="#" class="button2">PRUEBA GRATIS</a>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-xl-7 d-none d-lg-flex align-items-center justify-content-center">
                      <div class="">
                          <!-- Video -->
                          <a style="position: relative; left: 200px;" class="js-fancybox btn btn-play d-flex align-items-center justify-content-center rounded-circle" href="javascript:;"
                              data-hs-fancybox-options='{
                                  "src": "//youtube.com/0qisGSwZym4",
                                  "speed": 700
                              }'>
                              <i class="fas fa-play text-primary"></i>
                          </a>
                          <!-- End Video -->
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="space-2 bgradiant2 text-white" id="como">
          <div class="container mt-4">
              <div class="font-secondary text-center">
                  <h1 class="display-6 mb-1 text-white">Miralo en todos tus Dispositivos</h1>
                  <p>Los periodos de prueba gratis ya no te sorprenderán con un pago al final, nosotros te avisamos</p>
                  <img src="img/brands1.png" alt="">
              </div>
          </div>
          <div class="js-slick-carousel"
              data-hs-slick-carousel-options='{
                 "dots": true,
                 "dotsClass": "slick-pagination slick-pagination-v1 mt-n5",
                 "infinite": true
               }'>
              <div class="js-slide">
                  <div style="background-image: url(img/dispsl1.png); height: 500px;background-position: center">
                  </div>
              </div>
              <div class="js-slide">
                  <div style="background-image: url(img/dispsl2.png); height: 500px;background-position: center">
                  </div>
              </div>
              <div class="js-slide">
                  <div style="background-image: url(img/dispsl3.png); height: 500px;background-position: center">
                  </div>
              </div>
          </div>
          <div class="container text-center mt-5">
              <div class="row">
                <div class="col-lg-4">

                </div>

                <div class="col-lg-4">
                    <a href="#" class="button2">Comenzá tu prueba Gratis</a>
                </div>

                <div class="col-lg-4">

                </div>
              </div>

          </div>

      </div>


        <div class="bg-img-hero space-3 bgradiant1">
            <div class="container my-md-3">
                <div class="row text-center">
                    <div class="col-lg-12">
                      <h1 class="display-6 mb-2 text-white">Una prueba gratis sin sorpresas</h1>
                      <p class="text-white">Los periodos de prueba gratis ya no te sorprenderán con un pago al final, nosotros te avisamos</p>
                      <img src="img/progress.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <section id="pricing" class="bgradiant5 space-2">
          <div class="container">
            <div class="font-secondary text-center space-1">
                <h1 class="display-6 mb-3  text-white">Conoce Nuestros Planes</h1>
            </div>
            <div class="row">
                <div class="col-md text-center mb-6 mb-md-0">
                    <div class="font-secondary text-center space-1 bgbr">
                        <h3 class="font-size-26-re">Plan PC</h3>
                        <p class="mb-2 font-size-16-r">Mas de 200 canales</p>
                    </div>
                    <div class="font-secondary text-center space-1 bgbr mh">
                        <p class="mb-2 font-size-16-r">Incluye el contenido en vivo y en <br>
                            directo de los canales de: Argentina, Colombia, España, Perú, República<br>
                            Dominicana. Para ser visto en su PC, tableta y teléfono inteligente. Para verlo en su TV requiere de un<br>
                            Decodificador* y un plan para TV.</p>
                        <h1><strong>$ 9.90</strong> </h1>
                        <p>MENSUAL</p>
                    </div>
                </div>
                <div class="col-md text-center mb-6 mb-md-0">
                    <div class="font-secondary text-center space-1 bgbr">
                        <h3 class="font-size-26-re">Plan TV</h3>
                        <p class="mb-2 font-size-16-r">Con tu propio Decodificador</p>
                    </div>
                    <div class="font-secondary text-center space-1 bgbr mh">
                        <p class="mb-2 font-size-16-r">Incluye el contenido en vivo y en<br>
                          Más de 200 canales!!!<br>
                            Incluye el contenido en vivo y en directo de los canales de:Argentina, Colombia, España, Perú, República Dominicana y nuevos canales de<br>
                            Entretenimiento<br>
                            Además puede ver el servicio también en su PC, tableta o teléfono inteligente.</p>
                        <h1><strong>$ 19.98</strong> </h1>
                        <p>MENSUAL</p>
                    </div>
                </div>
                <div class="col-md text-center mb-6 mb-md-0">
                    <div class="font-secondary text-center space-1 bgbr">
                        <h3 class="font-size-26-re">Prueba Gratis</h3>
                        <p class="mb-2 font-size-16-r">Acceso ilimitado</p>
                    </div>
                    <div class="font-secondary text-center space-1 bgbr mh">
                        <p class="mb-2 font-size-16-r">Más de 200 canales!!!<br>
                          Incluye el contenido en vivo y en directo de los canales de:Argentina, Colombia, España, Perú, República Dominicana y nuevos canales de<br>
                          Entretenimiento<br>
                          Además puede ver el servicio también en su PC, tableta o teléfono inteligente.</p>
                        <h1><strong>Gratis</strong> </h1>
                        <p>POR UN MES</p>
                    </div>
                </div>
            </div>
          </div>
        </section>


        <div class="space-2 bg-gray-1100 bgradiant1">
            <div class="container">
                <!-- Basics Accordion -->
                <div id="basicsAccordion" class="landing-faq">
                    <!-- Card -->
                    <div class=" bg-trans shadow-none">
                        <div class="bg-trans font-secondary card-header card-collapse" id="basicsHeadingOne">
                            <button type="button" class="text-white btn btn-link btn-block card-btn d-flex p-6 font-size-18 font-weight-medium collapsed"
                                data-toggle="collapse"
                                data-target="#basicsCollapseOne"
                                aria-expanded="false"
                                aria-controls="basicsCollapseOne">
                                ¿Qué es TVmia?

                                <span class="card-btn-toggle order-n1 mr-md-8 mr-3">
                                    <span class="card-btn-toggle-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                    <span class="card-btn-toggle-active transform-rotate-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <div id="basicsCollapseOne" class="collapse"
                            aria-labelledby="basicsHeadingOne"
                            data-parent="#basicsAccordion">
                            <div class="card-body px-md-14 pb-6d pt-0 mx-md-3 text-gray-7000">
                              ¡Llevamos la televisión de aire de tu país en VIVO y en HD para verla donde más te guste!! <br>
                                No debes modificar nada en tu casa, no debes contratar nada nuevo, no debes cambiar nada en tu actual servicio de cable o satélite. <br> ¡Te suscribes y quedas viendo!! <br>
                                Además tendrás 10 días de prueba: SI NO TE GUSTA NO PAGAS <br>
                                ¡YA PUEDES VER EN TUS PROPIOS EQUIPOS!! <br>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class=" bg-trans shadow-none">
                        <div class="bg-trans font-secondary card-header card-collapse" id="basicsHeadingTwo">
                            <button type="button" class="text-white btn btn-link btn-block card-btn d-flex p-6 font-size-18 font-weight-medium collapsed"
                                data-toggle="collapse"
                                data-target="#basicsCollapseTwo"
                                aria-expanded="false"
                                aria-controls="basicsCollapseTwo">
                                ¿Puedo verlo en todos los dispositivos?

                                <span class="card-btn-toggle order-n1 mr-md-8 mr-3">
                                    <span class="card-btn-toggle-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                    <span class="card-btn-toggle-active transform-rotate-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse"
                            aria-labelledby="basicsHeadingTwo"
                            data-parent="#basicsAccordion">
                            <div class="card-body px-md-14 pb-6d pt-0 mx-md-3 text-gray-7000">
                              ¡YA PUEDES VER EN TUS PROPIOS EQUIPOS!! <br>
Inmediatamente quedarás habilitado para ver en tus propios equipos los canales legales y gratuitamente de tu país, <br> ya sea con el conversor a tu TV, en tu tablet, PC, Mac o Teléfono.
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class=" bg-trans shadow-none">
                        <div class="bg-trans font-secondary card-header card-collapse" id="basicsHeadingThree">
                            <button type="button" class="text-white btn btn-link btn-block card-btn d-flex p-6 font-size-18 font-weight-medium collapsed"
                                data-toggle="collapse"
                                data-target="#basicsCollapseThree"
                                aria-expanded="false"
                                aria-controls="basicsCollapseThree">
                                ¿Cómo funciona?

                                <span class="card-btn-toggle order-n1 mr-md-8 mr-3">
                                    <span class="card-btn-toggle-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                    <span class="card-btn-toggle-active transform-rotate-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <div id="basicsCollapseThree" class="collapse"
                            aria-labelledby="basicsHeadingThree"
                            data-parent="#basicsAccordion">
                            <div class="card-body px-md-14 pb-6d pt-0 mx-md-3 text-gray-7000">
                              Hemos instalado en tu país tu propia antena HD para recepcionar la programación legal y gratuita de todos tus canales. <br>
La antena de tu país la conectamos a un convertidor (también tuyo) y te enviamos la señal en vivo por internet
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class=" bg-trans shadow-none">
                        <div class="bg-trans font-secondary card-header card-collapse" id="basicsHeadingFour">
                            <button type="button" class="text-white btn btn-link btn-block card-btn d-flex p-6 font-size-18 font-weight-medium collapsed"
                                data-toggle="collapse"
                                data-target="#basicsCollapseFour"
                                aria-expanded="false"
                                aria-controls="basicsCollapseFour">
                                ¿Qué cobramos?

                                <span class="card-btn-toggle order-n1 mr-md-8 mr-3">
                                    <span class="card-btn-toggle-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                    <span class="card-btn-toggle-active transform-rotate-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="12px">
                                            <path fill="rgb(255, 255, 255)" d="M19.989,2.572 L10.714,10.973 L9.852,11.990 L0.017,2.401 L1.219,0.983 L9.784,9.332 L18.749,1.212 L19.989,2.572 Z"/>
                                        </svg>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <div id="basicsCollapseFour" class="collapse"
                            aria-labelledby="basicsHeadingFour"
                            data-parent="#basicsAccordion">
                            <div class="card-body px-md-14 pb-6d pt-0 mx-md-3 text-gray-7000">
                              Cobramos en la mensualidad el pago de tu equipo y el uso de internet. <br>
                                No cobramos por los canales
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Basics Accordion -->
            </div>
        </div>

        <div class="space-bottom-1 space-2 bgradiant4 text-white" id="contacto">
            <div class="container px-md-5 pb-lg-6">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-5 mb-lg-0">
                            <h5 class="font-size-18 font-weight-medium mb-4 text-white">Envienos su consulta</h5>

                            <!-- Contacts Form -->
                            <form class="js-validate">
                                <div class="row">
                                    <!-- Input -->
                                    <div class="col-sm-6 mb-3">
                                      <div class="js-form-message">
                                        <label class="input-label font-size-15 font-weight-medium font-size-15 font-weight-medium text-white">
                                          Nombre
                                        </label>

                                        <input type="text" class="form-control rounded-0" name="name" placeholder="" aria-label="Jeff Fisher" required
                                               data-msg="Please enter your name.">
                                      </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="col-sm-6 mb-3">
                                      <div class="js-form-message">
                                        <label class="input-label font-size-15 font-weight-medium font-size-15 font-weight-medium text-white">
                                          Apellido
                                        </label>

                                        <input type="text" class="form-control rounded-0" name="name" placeholder="" aria-label="Jeff Fisher" required
                                               data-msg="Please enter your name.">
                                      </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="col-sm-6 mb-3">
                                      <div class="js-form-message">
                                        <label class="input-label font-size-15 font-weight-medium  text-white">
                                          Mail
                                        </label>

                                        <input type="email" class="form-control rounded-0" name="email" placeholder="" aria-label="jackwayley@gmail.com" required
                                               data-msg="Please enter a valid email address.">
                                      </div>
                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="col-sm-6 mb-3">
                                      <div class="js-form-message">
                                        <label class="input-label font-size-15 font-weight-medium font-size-15 font-weight-medium text-white">
                                          Teléfono
                                        </label>

                                        <input type="text" class="form-control rounded-0" name="name" placeholder="" aria-label="Jeff Fisher" required
                                               data-msg="Please enter your name.">
                                      </div>
                                    </div>
                                    <!-- End Input -->
                                    <!-- Input -->
                                    <div class="col-sm-12 mb-3">
                                      <div class="js-form-message">
                                        <label class="input-label font-size-15 font-weight-medium font-size-15 font-weight-medium text-white">
                                          País
                                        </label>
                                        <select class="form-control" name="">
                                          <option value="Argentina">Argentina</option>
                                          <option value="Bolivia">Bolivia</option>
                                          <option value="Chile">Chile</option>
                                          <option value="Colombia">Colombia</option>
                                          <option value="Costa Rica">Costa Rica</option>
                                          <option value="Cuba">Cuba</option>
                                          <option value="Ecuador">Ecuador</option>
                                          <option value="El Salvador">El Salvador</option>
                                          <option value="Guatemala">Guatemala</option>
                                          <option value="Honduras">Honduras</option>
                                          <option value="México">México</option>
                                          <option value="Nicaragua">Nicaragua</option>
                                          <option value="Panamá">Panamá</option>
                                          <option value="Paraguay">Paraguay</option>
                                          <option value="Perú">Perú</option>
                                          <option value="Puerto Rico">Puerto Rico</option>
                                          <option value="República Dominicana">República Dominicana</option>
                                          <option value="Uruguay">Uruguay</option>
                                          <option value="Venezuela">Venezuela</option>
                                          <option value="España">España</option>
                                          <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                        </select>
                                      </div>
                                    </div>
                                    <!-- End Input -->
                                    <!-- Input -->
                                    <div class="col-sm-12 mb-3">
                                      <div class="js-form-message">
                                        <label class="input-label font-size-15 font-weight-medium text-white">
                                          Asunto
                                        </label>

                                        <input type="text" class="form-control rounded-0" name="subject" placeholder="" aria-label="Web design" required
                                               data-msg="Please enter a subject.">
                                      </div>
                                    </div>
                                    <!-- End Input -->
                                </div>

                                <!-- Input -->
                                <div class="js-form-message mb-3">
                                    <label class="input-label font-size-15 font-weight-medium text-white">
                                      Mensaje
                                    </label>

                                    <div class="input-group">
                                      <textarea class="form-control rounded-0" rows="8" name="text" placeholder="" aria-label="Hi there, I would like to ..." required
                                        data-msg="Please enter a reason."></textarea>
                                    </div>
                                </div>
                                <!-- End Input -->

                                <div>
                                    <button type="submit" class="btn btn-primary px-3 transition-3d-hover border-radius-sm font-size-1">
                                        <span class="mx-1">ENVIAR</span>
                                    </button>
                                </div>
                            </form>
                            <!-- End Contacts Form -->
                        </div>
                    </div>
                    <div class="col-lg-6 space-2">
                        <div class="row space-1">
                            <div class="col-lg-4 text-white text-center">
                              USA, Canada, Puerto Rico <br>
                              1-888-918-8642
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Sao Paolo, Brasil <br>
                              +551131975023
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Broward, USA <br>
                              +19545102161
                            </div>
                        </div>
                        <div class="row  space-1">
                            <div class="col-lg-4 text-white text-center">
                              Quebec, Canada <br>
                              +15798838726
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              National, Hong Kong <br>
                              +85258036417
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Wyoming, USA<br>
                              +13073120148
                            </div>
                        </div>
                        <div class="row  space-1">
                            <div class="col-lg-4 text-white text-center">
                              Mexico City, Mexico <br>
+525511638641
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Tel Aviv, Israel <br>
+97233728042
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Los Angeles CA, USA <br>
+12134411682
                            </div>
                        </div>
                        <div class="row  space-1">
                            <div class="col-lg-4 text-white text-center">
                              Madrid, España <br>
+34911233761
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Buenos Aires, Argentina <br>
+541151991193
                            </div>
                            <div class="col-lg-4 text-white text-center">
                              Email <br>
consulta@tvmia.com
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


@endsection
@section('scripts')
<script>
// initialization of slick carousel
$('.js-slick-carousel').each(function() {
    var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
});

// initialization of mega menu
var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
    desktop: {
        position: 'left'
    }
}).init();

// initialization of unfold
var unfold = new HSUnfold('.js-hs-unfold-invoker').init();
</script>

@endsection
