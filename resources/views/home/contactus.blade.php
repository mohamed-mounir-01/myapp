@extends('base')
@section('title', 'Contactus')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alphal/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="style.css">
<br> <br> <br> <br>
<section class="body bg-gradient mt-0 mb-0">
    @include('alerts.alert-message')
    <form class="form" method="POST" action="{{ route('app_contactusafter')}}">
        @csrf
        <h2>CONTACT US</h2>
        <p type="Name:"><input placeholder="Write your name here.." name="name" required></input></p>
        <p type="Email:"><input placeholder="Let us know how to contact you back.." name="email" required></input></p>
        <p type="Message:"><input placeholder="What would you like to tell us.." name="message" required></input></p>
        <div class="button" id="success">
            <button class="btn " type="submit" value="valider">Send</button>
        </div>
        <div class="infos">
            <i class="bi bi-telephone-fill"></i>+212 632 254 2148
            <i class="bi bi-envelope"></i> tdiensabm@gmail.com
        </div>
    </form>
</section>
@endsection
<style>
.form{
    width:340px;
    height:500px;
    background:rgb(247, 246, 246);
    border-radius:8px;
    box-shadow:0 0 40px -10px #33b5e5;
    margin:calc(50vh - 220px) auto;
    padding:20px 30px;
    max-width:calc(100vw - 40px);
    box-sizing:border-box;
    font-family:'Montserrat',sans-serif;
    position:relative;
    }
h2{
    margin:10px 0;
    padding-bottom:10px;
    width:180px;
    color: #33b5e5;
    border-bottom:3px solid #33b5e5;
    }
input{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    background:none;
    outline:none;
    resize:none;
    border:0;
    font-family:'Montserrat',sans-serif;
    transition:all .3s;
    border-bottom:2px solid #33b5e5;
    }
input:focus{
    border-bottom:2px solid #33b5e5;
}
p:before{
    content:attr(type);
    display:block;
    margin:28px 0 0;
    font-size:14px;
    color:#5a5a5a;
}
.button{
    float:right;
    padding:0px 12px;
    margin:0 0 3px;
    position: relative;
    height: 40px;
    font-family:'Montserrat',sans-serif;
    background:0;
    color:#5a5a6e;
    cursor:pointer;
    border:2px solid #33b5e5;
    transition:all .3s;
    }
.infos{
    content:'Hi';
    margin-top: 2px;
    position:absolute;
    bottom:-15px;
    right:-20px;
    background:#50505a;
    color:#fff;
    width:350px;
    padding:16px 4px 16px 0;
    border-radius:6px;
    font-size:13px;
    box-shadow:10px 10px 40px -14px #000;
}
i{
    margin:0 5px 0 15px;
    }
</style>

