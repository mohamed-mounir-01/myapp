@extends('base')
@section('title', 'homecleaning')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alphal/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<br><br>
<!--MAIN-->
<main class="flex">
    <section class="flex-content padding_1x">
        <article>
            <h1 class="title big">Cleaning <em> Home</em> Services</h1>
        </article>
    </section>
    <section class="flex-content padding_2x">
    </section>
</main>

<!--SECTION1-->
<div class="section1">
    <section class="flex-content padding_2x">
        <em class="tag" style="color: #33b5e5;">ABOUT US</em>
        <br>
        <h1 class="title medium">We help you to keep your place clean</h1>
        <p> &nbsp; &nbsp; &nbsp;Maintaining a clean and tidy environment is crucial for promoting well-being and creating a pleasant space. With our assistance, you can effortlessly achieve and uphold a pristine living or working area. We understand the importance of cleanliness and offer a range of services tailored to meet your specific needs. From regular cleaning routines to deep cleaning sessions, our dedicated team employs efficient techniques and high-quality products to ensure every nook and cranny is spotless. Whether it's dusting, vacuuming, mopping floors, sanitizing surfaces, or tackling stubborn stains, we take pride in our meticulous approach. Trust us to handle the cleaning tasks while you focus on what matters most, be it work, relaxation, or spending time with loved ones. Let us help you maintain a clean and inviting space that brings you peace of mind and a sense of harmony.</p>
    </section>
    <section class="flex-content padding_2x">
        <form id="form" class="padding_2x"  method="POST" action="{{ route('bookingafter')}}">
            @csrf
            <h2 class="small">Book a service</h2>
            @include('alerts.alert-message')
            <fieldset>
                <label for="name">Your name</label>
                <input type="text" name="name" id="fname" maxlength="60" required />
            </fieldset>
            <fieldset>
                <label for="number" id="cno">Contact number</label>
                <input type="tel" name="number" maxlength="15" required/>
            </fieldset>
            <fieldset>
                <label for="adress" id="zip">Adress</label>
                <input type="text" name="adress" required />
            </fieldset>
            <fieldset>
                <label for="service">Choose a service</label>
                <select name="service" id="service" required>
                    <option value="Carpet Cleaning">Carpet Cleaning</option>
                    <option value="Window Cleaning">Window Cleaning</option>
                    <option value="Bathroom Cleaning">Bathroom Cleaning</option>
                    <option value="Furniture Cleaning">Furniture Cleaning</option>
                </select>
            </fieldset>
            <fieldset id="success" class="button">
                <button id="form_btn" class="btn2 bg-info" type="submit" value="valider">SUBMIT DETAILS</button>
            </fieldset>
        </form>
    </section>

</div>

<!--SECTION2-->
<div class="sections section2 padding_2x">
    <article class="cards padding_2x">
        <section class="flex-content padding_2x">
            <figure>
                <img src="{{asset('images/01.png')}}" alt="" loading="lazy">
            </figure>
            <h2 class="title small">Pick a service</h2>
            <p>You can choose from a variety of services tailored to your specific cleaning needs.</p>
        </section>
        <section class="flex-content padding_2x">
            <figure>
                <img src="{{asset('images/02.png')}}" alt="" loading="lazy">
                <h2 class="title small">Schedule with us</h2>
            <p>Schedule with us and let us assist you in organizing your appointments and managing your time effectively.</p>
            </figure>
        </section>
        <section class="flex-content padding_2x">
            <figure>
                <img src="{{asset('images/03.png')}}" alt="" loading="lazy">
                <h2 class="title small">Get things done</h2>
            <p>Get things done efficiently and effectively with our assistance, ensuring that your tasks are completed promptly and your goals are accomplished.</p>
            </figure>
        </section>
    </article>
</div>
<!--SECTION3-->
<div class="section3 padding_2x">
    <div class="tag style="color: #33b5e5;">
        <em>OUR RECENT WORKS <br> <br> <br> <br><br><br></em>
        <h1 class="title medium" style="padding-left: 0;">Quality Service</h1>
    </div>
    <div class="flex">
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{asset('images/01.jpg')}}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Furniture Cleaning</h2>
                    <p>Revitalize your home or office with our professional furniture cleaning service, restoring the beauty and freshness of your beloved furniture pieces.</p>
                </span>
            </article>
        </figure>
    </section>
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{asset('images/02.jpg')}}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Bathroom Cleaning</h2>
                    <p>Experience the ultimate cleanliness and hygiene with our meticulous bathroom cleaning service, leaving your bathroom sparkling, sanitized, and ready for your utmost comfort.</p>
                </span>
            </article>
        </figure>
    </section>
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{asset('images/03.jpg')}}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Windows Cleaning</h2>
                    <p>
                        Transform the appearance of your space with our impeccable window cleaning service, allowing natural light to flood in and providing you with a crystal-clear view of the world outside.</p>
                </span>
            </article>
        </figure>
    </section>
    <section class="flex-content padding_1x">
        <figure>
            <img src="{{asset('images/04.jpg')}}" alt="">
            <article>
                <span class="padding_1x">
                    <h2 class="cursive">Carpet Cleaning</h2>
                    <p>Restore the beauty and freshness of your carpets with our top-notch carpet cleaning service, eliminating deep-seated dirt, stains, and allergens, and leaving your carpets looking and feeling as good as new.</p>
                </span>
            </article>
        </figure>
    </section>
    </div>
</div>
<div class="sub_footer">
<p> 2023 © All rights reserved by {TDI ENSA-BM}</p>
</div>

@endsection
<style>
:root{
    scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
    scrollbar-width: thin !important;
    --white:#fff;
    --black:#131417;
    --dark:#131313;
    --gray:rgba(255,255,255,0.6);
    --lite:rgba(1,1,1,0.6);
    --cream:#f9f9f9;
    --primary:#33b5e5;
    --primary_lite:#ff3e55;
    --secondary:#6382f7;
    --secondary_dark: #c8ebf8;
    --blue:#051135;
    --default:'Mukta', sans-serif;
    --title:'Montserrat', sans-serif;
    --cursive:'Dancing Script', cursive;
}
body{
    margin:0;
    overflow-x:hidden !important;
    font-family:var(--default);
}
em{
    font-style:normal;
    color:var(--primary);
}
ul{
    padding:0;
    margin:0;
}
figure{
    padding:0;
    margin:0;
}
fieldset{
    border:0;
}
.flex{
    display:flex;
    align-items:center;
    justify-content:center;
}
.flex-content{
    width:100%;
    position:relative;
}
.title{
    font-family:var(--title);
    color:var(--blue);
}
.cursive{
    font-family:var(--cursive);
}
.padding_1x{
    padding:1rem;
}
.padding_2x{
    padding:2rem;
}
.padding_3x{
    padding:3rem;
}
.big{
    font-size:4em;
}
.medium{
    font-size:2.5rem;
}
.small{
    font-size:1.5em;
}
.tag{
    color: #33b5e5;
    display:flex;
    align-items:center;
    transition:0.5s;
    position:relative;
    padding-left:3.5rem;
}
 .btn2 .fa{
    position:relative;
    left:0.4rem;
}
.btn2{
    padding:1rem 1.5rem;
    border:0;
    border-radius:5px;
    color:var(--white);
    font-weight:500;
    text-transform:uppercase;
    width:100%;
    background-color:var(--secondary);
    padding:0.8rem 2rem;
    display:block;
    border:1px solid var(--secondary);
    font-weight:600;
}
btn2:hover{
    background-color:var(--secondary_dark);
    border:1px solid var(--secondary_dark);
}
@media (max-width:1280px){
    .big{
        font-size:1.8em;
    }
    .medium{
        font-size:1.4em;
    }
    .small{
        font-size:1.2em;
    }
}
@media (max-width:920px){
    .big{
        font-size:1.8em;
    }
    .medium{
        font-size:1.4em;
    }
    .small{
        font-size:1.2em;
    }
    .flex{
        flex-wrap:wrap;
    }
    .padding_1x, .padding_2x, .padding_3x{
        padding:1rem;
    }
    .btn2{
        padding:0.5rem 1rem;
    }
}
main{
    width:100%;
    position:relative;
    background:linear-gradient(to right, #33b5e5 10%, rgba(214, 233, 247, 0.7) 50%, rgba(31, 28, 88, 0.1) 100%),url("https://i.postimg.cc/LsKfRM3Q/main.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
    color:var(--white);
    padding-bottom:6rem;
}
main .title{
    font-weight:200;
    color:var(--white);
}
main em{
    color:var(--white);
    font-weight:400;
}
main p{
    position:relative;
    top:-30px;
    font-weight:400;
    color:var(--gray);
}
@media (max-width:920px){
    main p{
        top:-10px;
    }
}
.section1{
    display:flex;
    align-items:top !important;
}
.section1 em{
    color:var(--dark);
    top:20px;
}
.section1 p{
    color:var(--lite);
}
.section1 form{
    background-color:var(--white);
    position:relative;
    top:-20vh;
    box-shadow:0 20px 60px -10px rgba(0,0,0,.1);
    border-radius:10px;
}
form .small{
    text-align:center;
}
form input, form select{
    background-color: #f7f7f7;
    color: #001837;
    width: 100%;
    font-weight: normal;
    border: 1px solid #eeeeee;
    border-radius: 5px;
    height: 48px;
    line-height: 48px;
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 14px;
    padding: 10px;
    transition: all ease .3s;
    -webkit-transition: all ease .3s;
}
@media (max-width:920px){
    .section1{
        flex-wrap:wrap;
    }

    .section1 em{
        top:10px;
    }

    form input, form select{
        height:38px;
    }

    .section1 form{
        top:0;
    }
}
.section2{
    background:linear-gradient(to right, #33b5e5 10%, rgba(214, 233, 247, 0.7) 50%, rgba(31, 28, 88, 0.1) 100%),url("https://i.postimg.cc/BZrmYtjR/bg-1.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    color: white;
    position:relative;
    top:-10vh;
}
.section2 p{
    color:rgb(242, 247, 248);
}
.section2 .cards{
    display:flex;
    align-items:top !important;
    justify-content:center;
}
.section2 .flex-content figure{
    position:relative;
}
.section2 .flex-content .title{
    color:var(--white);
}
.section2 .flex-content:not(:last-child) figure::after{
    content:"";
    background-image:url("https://i.postimg.cc/7LBXbLm6/arrow.png");
    background-size:100% 100%;
    background-position:top center;
    position:absolute;
    top:0;
    width:90%;
    filter:brightness(0) invert(1);
    height:50px;
}
.section2 .flex-content:nth-child(1) figure::after{
    top:-10%;
}
.section2 .flex-content:nth-child(2) figure::after{
    left:25%;
    top:10%;
}
.section2 .flex-content:nth-child(odd) figure::after{
    -webkit-transform:rotateX(180deg);
    transform:rotateX(180deg);
}
.section2 .flex-content figure img{
    filter:brightness(0) invert(1);
}
@media (max-width:920px){
    .section2{
        top:0;
    }
    .section2 .cards{
        flex-wrap:wrap;
    }
    .section2, .section2 .flex-content{
        padding:0 !important;
    }
    .section2 .flex-content:not(:last-child) figure::after{
        display:none;
    }
}
.section3{
    background-image:url("#");
    background-size:cover;
}
.section3 section{
    transition:0.5s;
}
.section3 figure{
    position:relative;
    overflow:hidden;
    height:60vh;
}
.section3 figure img{
    width:100%;
    height:100%;
    object-fit:cover;
    object-position:center;
}
.section3 section:nth-child(odd) figure{
    margin-top:-2rem;
}
.section3 section:nth-child(even) figure{
    margin-top:8rem;
}
.section3 article{
    position:absolute;
    top:100%;
    background-color:rgba(1,1,1,0.4);
    width:100%;
    height:100%;
    z-index:1;
    transition:0.5s;
}
.section3 article span{
    display:block;
    width:100%;
    height:100%;
    position:absolute;
    left:-100%;
    transition:0.5s;
    transition-delay:0.5s;
}
.section3 figure:hover article{
    top:0%;
}
.section3 figure:hover article span{
    left:0;
}
.section3 h2, .section3 p{
    color:var(--white);
}
@media (max-width:920px){
    .section3 figure{
        height:30vh;
    }
    .section3 section{
        margin:0px 0;
    }
    .section3 section:nth-child(odd) figure{
        margin-top:0rem;
    }
    .section3 section:nth-child(even) figure{
        margin-top:0rem;
    }
}

/*FOOTER*/
.sub_footer{
    background-color:var(--secondary_dark);
    text-align:center;
    color:var(--black);
    padding:0.01rem;
}
</style>
