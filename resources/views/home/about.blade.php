@extends('base')
@section('title', 'About')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alphal/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="style.css">
<br> <br> <br> <br>
    <h1 style="text-align: center;"> About <span class="text-info"> Us</span> </h1>
    <div class="container" style="flex: 1;"  id="about">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-12">
                <br> <br> <br>
                <img src="{{asset('images/our story.jpeg')}}" alt="" class="img-fluid" style="margin: 5px; height: 500px">
            </div>
            <div class="col-lg-5 col-sm-12 col-12 ps-lg-5 mt-md-5" style="flex: 1; padding-left: 20px;">
                <div class="about-text" style=" line-height: 1.8;">

                    <h5> Our story</h5>
                    <p> &nbsp; &nbsp; &nbsp; Our story started with a clear vision: to revolutionize the home services industry and make homeowners' lives easier. Frustrated by the challenges of finding reliable service providers, we created a user-friendly platform that seamlessly connects homeowners with trusted professionals. Through meticulous vetting and a commitment to excellence, we handpicked a network of skilled experts who share our values of reliability and professionalism. We continue to enhance our platform, driven by our dedication to customer satisfaction and the belief that quality services can truly transform people's lives. Together, we are shaping the future of home services, one satisfied homeowner at a time.
                        <br> &nbsp; &nbsp; &nbsp; At the core of our mission is the desire to provide a seamless and convenient experience for homeowners. Our platform offers a user-friendly interface, advanced search features, and transparent reviews, empowering homeowners to make informed decisions. But we don't stop there. We go beyond being a transactional platform by providing valuable resources and expert tips through our blog and educational content. We strive to build long-term relationships based on trust and integrity, ensuring that homeowners can rely on us for all their home service needs. As our story unfolds, we remain committed to innovation, expansion, and making a positive impact on the home services industry. Together, with our trusted professionals, we are shaping a future where finding quality home services is effortless and homeowners can enjoy peace of mind.
                    </p>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-5 col-sm-12 col-12 ps-lg-5 mt-md-5" style="flex: 1; padding-left: 20px;">
                <div class="about-text" style=" line-height: 1.8;">

                    <h5> Our mission</h5>
                    <p> &nbsp; &nbsp; &nbsp; Our mission on the home services website is to simplify and enhance homeowners' lives by providing easy access to quality services. We aim to create a reliable and user-friendly platform that allows users to quickly and efficiently find the service providers they need, whether it's plumbing, electrical work, gardening, cleaning, or other domestic services.
                        <br> &nbsp; &nbsp; &nbsp; We are committed to delivering an exceptional customer experience, ensuring that every interaction with our website is smooth, secure, and transparent. We collaborate with qualified and trustworthy professionals to ensure that our users can rely on dependable service providers.
                        <br> &nbsp; &nbsp; &nbsp; Our mission goes beyond merely connecting homeowners with service providers. We strive to provide useful resources and practical advice on our blog to help homeowners make informed decisions regarding home maintenance and improvement.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-12">
                <br> <br> <br>
                <img src="{{asset('images/our mission.jpeg')}}" alt="" class="img-fluid" style="margin: 5px; height: 400px">
            </div>
         </div>
</section>
<br> <br>
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
