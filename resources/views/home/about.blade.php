@extends('base')
@section('title', 'About')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alphal/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="style.css">
<br> <br> <br> <br>
<h1 style="text-align: center;"> About <span class="text-info"> Us</span> </h1>
<div class="responsive-container-block bigContainer">
    <div class="responsive-container-block Container">
      <div class="responsive-container-block leftSide">
        <p class="text-blk heading">
          Our mission
        </p>
        <p class="text-blk subHeading">
            &nbsp; &nbsp; &nbsp; Our mission on the home services website is to simplify and enhance homeowners' lives by providing easy access to quality services. We aim to create a reliable and user-friendly platform that allows users to quickly and efficiently find the service providers they need, whether it's plumbing, electrical work, gardening, cleaning, or other domestic services.
            <br> &nbsp; &nbsp; &nbsp; We are committed to delivering an exceptional customer experience, ensuring that every interaction with our website is smooth, secure, and transparent. We collaborate with qualified and trustworthy professionals to ensure that our users can rely on dependable service providers.
            <br> &nbsp; &nbsp; &nbsp; Our mission goes beyond merely connecting homeowners with service providers. We strive to provide useful resources and practical advice on our blog to help homeowners make informed decisions regarding home maintenance and improvement.
        </p>
      </div>
      <div class="responsive-container-block rightSide">
        <img class="number1img" src="{{asset('images/gardener.jpeg')}}">
        <img class="number2img" src="{{asset('images/furniture.png')}}">
        <img class="number3img" src="{{asset('images/repair.jpg')}}">
        <img class="number5img" src="{{asset('images/house.jpg')}}">
        <img class="number4vid" src="{{asset('images/clean.jpg')}}">
        <img class="number7img" src=" {{asset('images/deliv.jpeg')}}">
        <img class="number6img" src=" {{asset('images/dad with baby.jpg')}}">
      </div>
    </div>
    <div class="sub_footer">
        <p> 2023 © All rights reserved by {TDI ENSA-BM}</p>
    </div>

@endsection
 <style>
    .text-blk {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  line-height: 20px;
  color: black;
  font-size: 14px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 40px;
  margin-left: 0px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

.responsive-container-block.bigContainer {
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  padding-top: 10px;
  padding-right: 20px;
  padding-bottom: 10px;
  padding-left: 20px;
  margin: 0 0 0 0;
}

.responsive-container-block.Container {
  max-width: 1320px;
  align-items: center;
  justify-content: center;
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 80px;
  margin-left: auto;
  padding-top: 10px;
  padding-right: 0px;
  padding-bottom: 10px;
  padding-left: 0px;
}

.responsive-container-block.leftSide {
  width: auto;
  align-items: flex-start;
  padding-top: 10px;
  padding-right: 0px;
  padding-bottom: 10px;
  padding-left: 0px;
  flex-direction: column;
  position: static;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  max-width: 300px;
}

.text-blk.heading {
  font-size: 40px;
  line-height: 64px;
  font-weight: 900;
  color: #33b5e5;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 40px;
  margin-left: 0px;
}

.text-blk.btn {
  color: rgb(0, 178, 235);
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: rgb(255, 255, 255);
  box-shadow: rgba(160, 121, 0, 0.2) 0px 12px 35px;
  border-top-left-radius: 100px;
  border-top-right-radius: 100px;
  border-bottom-right-radius: 100px;
  border-bottom-left-radius: 100px;
  padding-top: 20px;
  padding-right: 50px;
  padding-bottom: 20px;
  padding-left: 50px;
  cursor: pointer;
}

.responsive-container-block.rightSide {
  width: 675px;
  position: relative;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  display: flex;
  height: 700px;
  min-height: auto;

}

.number1img {
  margin-top: 39%;
  margin-right: 80%;
  margin-bottom: 29%;
  margin-left: 0px;
  height: 32%;
  width: 20%;
  position: absolute;
}

.number2img {
  margin-top: 19%;
  margin-right: 42%;
  margin-bottom: 42%;
  margin-left: 23%;
  width: 35%;
  height: 39%;
  position: absolute;
}

.number3img {
  width: 13%;
  height: 21%;
  position: absolute;
  margin-top: 62%;
  margin-right: 64%;
  margin-bottom: 30%;
  margin-left: 23%;
}

.number4vid {
  width: 34%;
  height: 33%;
  position: absolute;
  margin-top: 62%;
  margin-right: 27%;
  margin-bottom: 0px;
  margin-left: 39%;
}

.number5img {
  position: absolute;
  width: 13%;
  height: 21%;
  margin-top: 38%;
  margin-right: 27%;
  margin-bottom: 41%;
  margin-left: 60%;
}

.number6img {
  position: absolute;
  margin-top: 0px;
  margin-right: 3%;
  margin-bottom: 67%;
  margin-left: 62%;
  width: 35%;
  height: 33%;
}

.number7img {
  position: absolute;
  width: 25%;
  margin-top: 40%;
  margin-right: 0px;
  margin-bottom: 18%;
  margin-left: 75%;
  height: 42%;
}

.text-blk.subHeading {
  font-size: 14px;
  line-height: 25px;
}

@media (max-width: 1024px) {
  .responsive-container-block.Container {
    flex-direction: column-reverse;
  }

  .text-blk.heading {
    text-align: center;
    max-width: 370px;
  }

  .text-blk.subHeading {
    text-align: center;
  }

  .responsive-container-block.leftSide {
    align-items: center;
    max-width: 480px;
  }

  .responsive-container-block.rightSide {
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 100px;
    margin-left: auto;
  }

  .responsive-container-block.rightSide {
    margin: 0 auto 70px auto;
  }
}

@media (max-width: 768px) {
  .responsive-container-block.rightSide {
    width: 450px;
    height: 450px;
  }

  .responsive-container-block.leftSide {
    max-width: 450px;
  }
}

@media (max-width: 500px) {
  .number1img {
    display: none;
  }

  .number2img {
    display: none;
  }

  .number3img {
    display: none;
  }

  .number5img {
    display: none;
  }

  .number6img {
    display: none;
  }

  .number7img {
    display: none;
  }

  .responsive-container-block.rightSide {
    width: 100%;
    height: 250px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 100px;
    margin-left: 0px;
  }

  .number4vid {
    position: static;
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
    width: 100%;
    height: 100%;
  }

  .text-blk.heading {
    font-size: 25px;
    line-height: 40px;
    max-width: 370px;
    width: auto;
  }

  .text-blk.subHeading {
    font-size: 14px;
    line-height: 25px;
  }

  .responsive-container-block.leftSide {
    width: 100%;
  }
}
.sub_footer{
    width: 100%;
    background-color:#c8ebf8;
    text-align:center;
    color:black;
    padding:0.01rem;
}
 </style>
