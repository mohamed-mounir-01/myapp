@extends('base')
@section('title', 'homecleaning')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alphal/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="style.css">
    <section class="home " id="home">
        <div class="container">
            <div class="grid">
                <div class="home-text" style="width: 800px; margin-top: 150px;">
                    <h1> Need cleaning home services ? </h1>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ad ipsa cum? Exercitationem labore voluptatum ipsa reprehenderit odio quaerat magni officiis, eum repudiandae sint ad dolores eius a delectus quos.</p>
                    <div>
                        <a href="" class="btn btn-info text-dark" style=""> <b> Know More</b></a>
                    </div>
                </div>
                <div class="home-img">
                    <div class="circle-wrap">
                        <div class="circle">
                        </div>
                    </div>
                    <img src="{{asset('images/home-img.png')}}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="grid">
                <div class="row">
                    <div class="about-img">
                        <div class="img-box">
                            <img src="{{asset('images/about-img.png')}}" alt="img">
                            <div class="box box-l">
                                <span> <h3>2.5k</h3></span>
                                <p>satisfied clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    <div class="section-title">
                        <span class="title"> --About us--</span>
                        <h2 class="sub-title">We're cleaning scince 2023</h2>
                    </div>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente, necessitatibus. Architecto debitis corrupti voluptates, consequatur cum laboriosam necessitatibus porro? Reprehenderit officia consectetur voluptate dolore voluptatem eveniet, numquam temporibus. Quam, enim.</p>

                </div>
            </div>
        </div>
    </section>
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="section-title">
                <span class="title">--sevices--</span>
                <h2 class="sub-title">What we do</h2>
            </div>
            <div class="grid" style="width: 100%;">
                <div class="grid-item">
                    <div class="services-item">
                        <div class="img-box">
                            <img src="{{asset('images/house.jpg')}}" alt="carpet">
                            <h3>carpet cleaning</h3>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="services-item">
                        <div class="img-box">
                            <img src="{{asset('images/window.jpg')}}" alt="window">
                            <h3>window cleaning</h3>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="services-item">
                        <div class="img-box">
                            <img src="{{asset('images/bathroom.jpg')}}" alt="bathroom">
                            <h3>bathroom cleaning</h3>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="services-item">
                        <div class="img-box">
                            <img src="{{asset('images/furniture.png')}}" alt="furniture">
                            <h3>futniture cleaning</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="pricing section-padding" id="pricing">
            <div class="container">
                <div class="section-title">
                    <span class="title">--pricing--</span>
                    <h2 class="sub-title"> Our pricing plans</h2>
                </div>
                <div class="grid">
                    <div class="pricing-item bg-body-tertiary">
                        <div class="pricing-header">
                            <h3>basic</h3>
                            <div class="price"><span>$29</span>montly</div>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <i class="bi bi-check"></i>window cleaning <br>
                                <i class="bi bi-check"></i>carpet cleaning <br>
                                <i class="bi bi-x"></i>bathroom cleaning <br>
                                <i class="bi bi-x"></i>futniture cleaning <br>
                            </ul>
                        </div>
                        <div>
                            <a href="" class="btn btn-info text-dark" style=""> <b> Get Started</b></a>
                        </div>
                    </div>

                    <div class="pricing-item bg-body-tertiary">
                        <div class="pricing-header">
                            <h3>satndard</h3>
                            <div class="price"><span>$49</span>montly</div>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <i class="bi bi-check"></i>Window Cleaning <br>
                                <i class="bi bi-check"></i>Carpet Cleaning <br>
                                <i class="bi bi-check"></i>Bathroom Cleaning <br>
                                <i class="bi bi-x"></i>Futniture Cleaning <br>
                            </ul>
                        </div>
                        <div>
                            <a href="" class="btn btn-info text-dark" style=""> <b> Get Started</b></a>
                        </div>
                    </div>

                    <div class="pricing-item bg-body-tertiary">
                        <div class="pricing-header">
                            <h3>premium</h3>
                            <div class="price"><span>$89</span>montly</div>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <i class="bi bi-check"></i>window cleaning <br>
                                <i class="bi bi-check"></i>carpet cleaning <br>
                                <i class="bi bi-check"></i>bathroom cleaning <br>
                                <i class="bi bi-check"></i>futniture cleaning <br>
                            </ul>
                        </div>
                        <div>
                            <a href="" class="btn btn-info text-dark" style=""> <b> Get Started</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

<style>
    .home{
        padding: 100px 0 60px;
    }
    h1, h2, h3, h4, h5, h6{
        color: darkgray;
        line-height: 1.3;
    }
    p{
        margin-bottom: 15px;
    }
    img{
        max-width: 100%;
        vertical-align: middle;
    }
    .home-img, .home-text{
        grid-column: span 6;
    }
    .grid{
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 30px;
    }
    .home-text h1{
        margin: 0 0 20px;
        text-transform: capitalize;
    }
    .home-text p{
        margin: 0 0 30px;
    }
    .home-img  .circle-wrap{
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: -1;
    }
    .home-img  .circle{
        height: 350px;
        width: 350px;
        background-color: #33b5e5;
        border-radius: 50% ;
        transform: translate(250px, -100px);
    }
    .home-img{
        max-width: 270px;
        display: block;
        margin: auto;
    }
    .about-img, .about-text{
        grid-column: span 6;
    }
    .section-padding{
        padding: 60px 0;
    }
    .section-title{
        text-align: center;
        margin-bottom: 45px;
    }
    .section-title .title{
        display: inline-block;
        font-weight: 400;
        text-transform: capitalize;
        margin: 0 0 12px;
        padding: 0 40px;
        color: #33b5e5;
        position: relative;
    }
    .section-title .sub-title{
        text-transform: capitalize;
    }
    .about .section-title{
        text-align: left;
        margin: 0 0 15px;
    }
    .about-img .img-box{
        width: 400px;
        margin: auto;
        padding: 15px;
        border-radius: 50%;
        background-color: rgb(221, 236, 241);
        position: relative;
    }
    .about-img .img-box img{
        border-radius: 50%;
    }
    .about-img .box{
        height: 100x;
        width: 100px;
        background-color: #33b5e5;
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        border-radius: 0 40px;
        padding: 15px;
    }
    .about-img .box-l{
        top: 50%;
        left: 0;
        transform: translate(-50%, -50%);
    }
    .about-img .box span{
        color: white;
        font-weight: bold;
        margin: 0 0 3px;
        line-height: 1;
    }
    .about-img .box p{
        text-transform: uppercase;
        color: rgb(247, 246, 246);
        margin: 0;
    }
    .services-item{
        grid-column: span 3;
        text-align: center;
        padding: 50px;
    }
    .services-item .img-box{
        height: 140px;
        width: 140 px;
        border-radius: 50%;
        margin: auto 20px;
        padding: 8px;
    }
    .services-item .img-box img{
        border-radius: 50%;
        transition: transform 0.5s ease;
    }
    .services-item:hover .img-box img{
        transform: scale(1.5);
    }
    .grid-item{
        width: 100%;
    }
    .services-item h3{
        text-transform: capitalize;
        font-weight: 500;
    }
    .pricing-item{
        grid-column: span 4;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }
    .pricing-header h3{
        text-transform: capitalize;
        margin: 0 0 0px;
        font-weight: 600;
    }
    .pricing-header .price{
        height: 100px;
        width: 140px;
        margin: auto;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        box-shadow: inset lightblue;
        justify-content: center;
        text-transform: capitalize;
    }
    .pricing-header .price span{
        font-size: 150%;
        font-weight: bold;
        color: #33b5e5;
        line-height: 1.3;
    }
    .pricing-body{
        padding: 30px 0;
        text-align: left;
    }

</style>
