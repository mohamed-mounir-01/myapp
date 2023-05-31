@extends('base')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alphal/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="style.css">
<section class=" bg-info bg-gradient mt-0 mb-0" style=" bg-opacity-50; height: 225px; padding: 0; margin: 0;">
        <!-- carousel session-->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/service1.jpg')}}" class="d-block w-100" alt="image1" style=" height: 500px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Home services</h5>
                  <p> You trusted home service specialists.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/service2.jpg')}}" class="d-block w-100" alt="image2" style=" height: 500px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Home services</h5>
                  <p>We are home service specialists, here to help.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/service3.jpg')}}" class="d-block w-100" alt="image3" style=" height: 500px;">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Home services</h5>
                  <p>Count on our skilled specialists to handle your home service tasks with confidence.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
<br> <br>
        <!-- about session-->
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
            <section id="about" class="about-section-padding" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(18rem,auto));
            ) align-items: center;">
                <div class="container" style="flex: 1;"  id="about">
                    <h2 style="text-align: center;"> About <span class="text-info"> Us</span> </h2>
                    <div class="row">
                        <div class="col-lg-5 col-sm-12 col-12">
                            <br> <br>
                            <img src="{{asset('images/about.jpeg')}}" alt="" class="img-fluid" style="margin: 5px;">
                        </div>
                        <div class="col-lg-5 col-sm-12 col-12 ps-lg-5 mt-md-5" style="flex: 1; padding-left: 20px;">
                            <div class="about-text" style=" line-height: 1.8;">
                                <h5> We Provide Best Quality Services Ever</h5>
                                <p> Welcome to our Home Services Page!
                                    We offer a wide range of top-notch services for all your home improvement needs. With skilled professionals and a focus on quality, we handle repairs, renovations, and more. Our goal is to provide convenience, rellability, and exceptional results that exceed your expectations.
                                    Contact us today to transform your house into the home you've always wanted.
                                </p>
                                <a href="{{ route('app_about')}}" class="btn btn-info"> <b>Leran more </b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<br> <br> <br>
        <!-- services-->
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <section id="services" class="services section-padding">
                <div class="container">
                        <div class="col-md-12">
                            <div class="section-header text-center pb-5" id="services">
                                <h2 style="text-align: center;"> Our <span class="text-info"> Services</span></h2>
                                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-4" >
                                <div class="card text-info text-center bg-white pb-2"style="height: 11cm;">
                                    <div class="card-body" >
                                        <i class="bi bi-subtract" style="font-size: 50px; "></i>
                                        <h3 class="card-title"> Home cleaning</h3>
                                        <img src="{{asset('images/cleaning.png')}}" alt="" class="img-fluid mb-3" style="height: 5cm">
                                        <div style="text-align: center;">
                                            <a href="{{ route('app_homecleaning')}}" class="btn btn-info text-dark" style="width: 50%;"> <b>More</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-info text-center bg-white pb-2"style="height: 11cm;">
                                    <div class="card-body" >
                                        <i class="bi bi-subtract" style="font-size: 50px; "></i>
                                        <h3 class="card-title"> Babysitting</h3>
                                        <img src="{{asset('images/babysitting.png')}}" alt="" class="img-fluid mb-3" style="height: 5cm">
                                        <div style="text-align: center;">
                                            <a href="{{ route('app_babysitting')}}" class="btn btn-info text-dark" style="width: 50%;"> <b>More</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-info text-center bg-white pb-2" style="height: 11cm;">
                                    <div class="card-body" >
                                        <i class="bi bi-subtract" style="font-size: 50px; "></i>
                                        <h3 class="card-title">Home repair</h3>
                                        <img src="{{asset('images/repair.png')}}" alt="" class="img-fluid mb-3" style="height: 5cm">
                                        <div style="text-align: center;">
                                            <a href="{{ route('app_homerepair')}}" class="btn btn-info text-dark" style="width: 50%;"> <b>More</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row mt-5">
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-info text-center bg-white pb-2" style="height: 11cm;">
                                    <div class="card-body" >
                                        <i class="bi bi-subtract" style="font-size: 50px; "></i>
                                        <h3 class="card-title"> Gardener</h3>
                                        <img src="{{asset('images/gardener.png')}}" alt="" class="img-fluid mb-3" style="height: 5cm">
                                        <div style="text-align: center;">
                                            <a href="{{ route('app_gardener')}}" class="btn btn-info text-dark" style="width: 50%;"> <b>More</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                    <div class="card text-info text-center bg-white pb-2" style="height: 11cm;">
                                        <div class="card-body" >
                                            <i class="bi bi-subtract" style="font-size: 50px; "></i>
                                            <h3 class="card-title"> Delivery</h3>
                                            <img src="{{asset('images/delivery.png')}}" alt="" class="img-fluid mb-3" style="height: 5cm">
                                            <div style="text-align: center;">
                                                <a href="{{ route('app_delivery')}}" class="btn btn-info text-dark" style="width: 50%;"> <b>More</b></a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4">
                                <div class="card text-info text-center bg-white pb-2" style="height: 11cm;">
                                    <div class="card-body" >
                                        <i class="bi bi-subtract" style="font-size: 50px; "></i>
                                        <h3 class="card-title"> Health</h3>
                                        <img src="{{asset('images/health.png')}}" alt="" class="img-fluid mb-3" style="height: 5cm">
                                        <div style="text-align: center;">
                                            <a href="{{ route('app_health')}}" class="btn btn-info text-dark" style="width: 50%;"> <b>More</b></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br> <br> <br>

<!--Newsletter session-->
        <section class="contact section-padding" id="contact">
            <div class="container">
                <div class="section-title">
                    <h2 class="title">Have any question ?</h2>
                </div>
                <div class="grid contact-grid">
                    <div class="contact-info">
                        <div class="contact-info-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h3>Adress</h3>
                            <p> ENSABM Mghila, Beni Mellal</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-telephone-fill"></i>
                            <h3>Call Us</h3>
                            <p>+212 661 *** ****</p>
                        </div>
                        <div class="contact-info-item">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>tdiensabm@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form >
                            <div class="input-box">
                                <input type="text" placeholder="name" class="input-control" required>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="email" class="input-control" required>
                            </div>
                            <div class="input-box">
                                <input type="text" placeholder="phone" class="input-control" required>
                            </div>
                            <div class="input-box">
                                <textarea placeholder="message" class="input-control" required></textarea>
                            </div>
                            <div>
                                <a href="" class="btn btn-info text-dark" style=""> <b> Send Message</b></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <br> <br> <br>
        <!--footer section-->
        <section class="footer">
            <div class="footer-container container bg-info" style=" width: 100%; text-align: center; display: grid; grid-template-columns: repeat(auto-fit, minmax(240px,auto)); gap: 2rem;" >
                <div class="social">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-linkedin"></i>
                    <i class="bi bi-twitter"></i>
                    <br>
                </div>
            <div class="copp">
                <p>&#169; All Right Reserved</p>
            </div>
        </div>
        </section>

@endsection
<style>
.contact-info{

}
</style>
