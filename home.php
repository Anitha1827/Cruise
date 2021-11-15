<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cruise</title>
	  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <script type="text/javascript" src="assets/js/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<!-- media 1261 -->

<style type="text/css">
  /*body{
    height: 1920px;
    width: 1080px;
  }
*/
  @media only screen and (max-width: 1261px)
  {

  }
	 .logo{
  }
  }
  width:50px;
  height:50px;
}
/*Navbar*/
.dropbtn {
  /*background-color: #4CAF50;*/
  color: white;
  width: 182px;
  padding: 8px;
  font-size: 20px;
  border: none;
  cursor: pointer;

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {text-decoration: underline;}
/*Navbar End*/
/*header Card Start*/
section {
  color: white;
  width: 450px;
  /*margin: 50px auto;*/
  /*padding: 10px;*/
  border-radius: 10px;
}
section#good {
  position: relative;
  background: rgba(0,0,0,0.4);
}
/*header Card End*/
/*Search Form*/
input {
    outline: 0 !important;
    border-width: 0 0 2px !important;
    border-color: #d1d1cf !important
}

input:focus {
    border-color: #d1d1cf !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important
}

/*.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
*/
/*.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}*/

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

#year{
font-weight: bold;
}
.dropdown-scrollable {
    overflow-x: hidden;
    overflow-y: auto;
    padding: 5px 5px 0 5px;
    max-height: 355px;
}
.color{
  background-color:#D3D3D3;
  margin-right:5px;
  padding:8px; 
  width: 78px;
  border: none;
}

/*.color:hover{
  background-color:orange;
}*/

.color:focus{
  background-color:darkblue;
  color: white;
}
.color1{
  background-color:#D3D3D3;
  margin-right:5px;
  padding:8px; 
  width: 115px;
  border: none; 
  font-size: 14px;
   color: black;
}
/*.color1:hover{
  background-color:orange;
}*/

.color1:focus{
  background-color:darkblue;
  color: white;
}
.color2{
  background-color:#D3D3D3;
  margin-right:5px;
  padding:8px; 
  width: 235px;
  border: none; 
  font-size: 14px;
   color: black;
}
/*.color2:hover{
  background-color:orange;
}*/

.color2:focus{
  background-color:darkblue;
  color: white;
}
.input-row {
  display: flex;
  padding: var(--space-8) 0;
  border-bottom: var(--border);
}
.input-row:last-child {
  border-bottom: 0;
}
.title {
  margin-right: var(--space-8);
}
.label {
  margin-bottom: var(--space-1);
  font-weight: bold;
}
.description {
  color: var(--color-gray-600);
}
.input {
  display: flex;
  align-items: center;
  margin-left: auto;
}
/*button {
  display: flex;
  justify-content: center;
  align-items: center;
  width: var(--space-12);
  height: var(--space-12);
  border: 1px solid var(--color-blue-500);
  border-radius: var(--round);
  background-color: var(--color-white);
}
button:hover {
  background-color: var(--color-blue-200);
  cursor: pointer;
}*/
/*button:focus {
  outline: none;
  box-shadow: var(--shadow-focus);
}
button[disabled] {
  opacity: var(--opacity-50);
  pointer-events: none;
}
button:active {
  background-color: var(--color-blue-300);
}*/

.number {
  font-size: var(--text-lg);
  min-width: var(--space-12);
  text-align: center;
}
.icon {
  user-select: none;
}
.dim {
  color: var(--color-gray-400);
}
.find{
  background-color: #134D7F;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
/*Search From End*/
/*Make Memories with our 2022 cruise deals*/
@media (max-width:767px) {
     h2 {
         margin-bottom: 25px;
         padding-top: 25px;
         font-size: 24px
     }
     .good {
  display: none;
 }
 .heart{
  margin-top: 10px;
  margin-left: 65px;
 }
 }
  .intro {
     font-size: 16px;
     max-width: 500px;
     margin: 0 auto
 }

 .intro p {
     margin-bottom: 0
 }

 .people {
     padding: 50px 0;
     cursor: pointer
 }

 .item {
     margin-bottom: 30px
 }
 .item .box {
     text-align: center;
     background-repeat: no-repeat;
     background-size: cover;
     background-position: center;
     height: 280px;
     position: relative;
     overflow: hidden
 }
 .item .boxs{
  height: 400px; 
  /*width:260px;*/
  text-align: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  overflow: hidden
 }
  .item .cover {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: rgba(31, 148, 255, 0.75);
     transition: opacity 0.15s ease-in;
     opacity: 0;
     padding-top: 80px;
     color: #fff;
     text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15)
 }
  .item:hover .cover {
     opacity: 1
 }

 .item .name {
     font-weight: bold;
     margin-bottom: 8px
 }

 .item .title {
     text-transform: uppercase;
     font-weight: bold;
     color: #bbd8fb;
     letter-spacing: 2px;
     font-size: 13px;
     margin-bottom: 20px
 }

/*Make Memories with our 2022 cruise deals end*/
/*Top cruise destinarion*/
/*Top cruises*/
.grid {
  position: relative;
  clear: both;
  margin: 0 auto;
  padding: 1em 0 4em;
  max-width: 1000px;
  list-style: none;
  text-align: center;
}

/* Common style */
.grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 320px;
  max-width: 480px;
  max-height: 360px;
  width: 100%;
  height: auto;
  background: #3085a3;
  text-align: center;
  cursor: pointer;
}

.grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  opacity: 0.8;
}

.grid figure figcaption {
  padding: 2em;
  color: #fff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
  pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
  z-index: 1000;
  text-indent: 200%;
  white-space: nowrap;
  font-size: 0;
  opacity: 0;
}

.grid figure h2 {
  word-spacing: -0.15em;
  font-weight: 300;
}

.grid figure h2 span {
  font-weight: 800;
}

.grid figure h2,
.grid figure p {
  margin: 0;
}

.grid figure p {
  letter-spacing: 1px;
  font-size: 68.5%;
}


figure.effect-goliath {
  background: #df4e4e;
}

figure.effect-goliath img,
figure.effect-goliath h2 {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

figure.effect-goliath img {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

figure.effect-goliath h2,
figure.effect-goliath p {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 30px;
}

figure.effect-goliath p {
  text-transform: none;
  font-size: 90%;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,50px,0);
  transform: translate3d(0,50px,0);
}

figure.effect-goliath:hover img {
  -webkit-transform: translate3d(0,-80px,0);
  transform: translate3d(0,-80px,0);
}

figure.effect-goliath:hover h2 {
  -webkit-transform: translate3d(0,-100px,0);
  transform: translate3d(0,-100px,0);
}

figure.effect-goliath:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
/*Top cruise destination end*/
/*Last minut cruise*/
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
/*Last minut Cruise end*/
/*Take adventure*/
.gal-item{
  overflow: hidden;
  padding: 8px;
}
.gal-item .box{
  height: 100%;
  overflow: hidden;
}
.box img{
  height: 100%;
  width: auto;
  object-fit:cover;
}
div.scrollmenu{
  overflow: auto;
  white-space: nowrap;
}
/*Amazing seaonal cruise deals*/
.containerm {
    min-height: 60vh;
    overflow: hidden;
    width: 100%;
    padding: 2rem;
    display: flex;
    justify-content: center;
    align-items: center
}

.image {
    overflow: hidden;
    height: 300px;
    width: 330px;
    position: relative;
    cursor: pointer;
    margin: 0 15px;
    box-shadow: 0 0 25px 1px rgba(0, 0, 0, .3);
    transition: .5s;
    background-color: #555
}

.image:after {
    content: '';
    position: absolute;
    z-index: 1;
    top: 50%;
    left: 50%;
    width: 500px;
    height: 500px;
    transform: translate(-140%, -50%);
    background-color: blue;
    opacity: 0.8;
    border-radius: 50%;
    transition: .8s
}

.image:hover:after {
    transform: translate(-50%, -50%)
}

.image:hover .design {
    transform: translate(-50%, -50%) scale(1.3) rotate(20deg)
}

.design {
    position: absolute;
    height: 110%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: .8s
}

.txt {
    position: absolute;
    z-index: 2;
    top: 50%;
    left: 50%;
    transform: translate(-2000px, -50%);
    color: #fff;
    transition: .8s;
    transition-timing-function: ease-in
}

.image:hover .txt {
    transform: translate(-50%, -50%);
    transition-timing-function: ease
}
.booknow{
  position: absolute;
    z-index: 2;
    top: 80%;
    left: 40%;
    transform: translate(-2000px, -50%);
    color: #fff;
    transition: .8s;
    transition-timing-function: ease-in
}
.image:hover .booknow {
    transform: translate(-50%, -50%);
    transition-timing-function: ease
}

.content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content:hover .content-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-bottom{
  top: 80%;
}
.heroContent {
  position: absolute;
  top: 50%;
  left: 50%;
  color: white;
  font-weight: bold;
  transform: translate(-50%, -50%);
}
/*Amazing seasonal cruise deals end*/
.social{
   display:block;
height: 25px;
width: 25px;
border-radius: 50%;
border: 1px solid blue;
padding-top: 3px;
margin-left: 50px;
 }
/*Footer*/

.shfooter .collapse {
  display: inherit;
}
@media (max-width:767px) {
  .shfooter ul {
    margin-bottom: 0;
  }

  .shfooter .collapse {
    display: none;
  }

  .shfooter .collapse.show {
    display: block;
  }

  .shfooter .title .fa-angle-up,
  .shfooter .title[aria-expanded=true] .fa-angle-down {
    display: none;
  }

  .shfooter .title[aria-expanded=true] .fa-angle-up {
    display: block;
  }

  .shfooter .navbar-toggler {
    display: inline-block;
    padding: 0;
  }

}

.resize {
  text-align: center;
}
.resize {
  margin-top: 3rem;
  font-size: 1.25rem;
}
/*RESIZESCREEN ANIMATION*/
.fa-angle-double-right {
  animation: rightanime 1s linear infinite;
}

.fa-angle-double-left {
  animation: leftanime 1s linear infinite;
}
@keyframes rightanime {
  50% {
    transform: translateX(10px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(10px);
    opacity: 0;
  }
}
@keyframes leftanime {
  50% {
    transform: translateX(-10px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(-10px);
    opacity: 0;
  }
}
/*Footer end*/
.short-caribbean{
  bottom: 350%;   
  position: absolute; 
  left: 55%; 
  color: black; 
  transform: translate(-50%, -50%);
  opacity: 1.0;
  padding:10px;
}
.select{
  width: 400px;
}

.animate{
  display: block;
  position: relative;
  padding: 0.2em 0;
}
.animate::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0.1em;
  background-color: green;
  opacity: 0;
  transition: opacity 300ms, transform 300ms;
}
.animate:hover::after,
.animate:focus::after {
  opacity: 5;
  transform: translate3d(0, 0.2em, 0);
}
</style>
<body>
<!-- Navbar -->
<nav class="navb navbar-expand-lg navbar-lig bg-transparent ">
  <div class="col-md-12 col-sm-12">
    <div class="row">
    <div class="col-4">
      <a class="navbar-brand" style="margin-left: 150px; margin-top: 18px;" href="#"><img src="assets/image/logo.jpg" width="160px"></a>
    </div>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="col-8 mt-2 mb-2">
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="px-2"><a href="#"><small><i class="fas fa-phone-alt text-success ex1 px-1"></i><b>877-860-0010</b></a></small></li>
      <li class="px-2"><a href="#"><small><span class="text-muted"><i class="fas fa-sign-in-alt  px-1"></i>Sign In</span></a></small></li>
      <li class="px-2"><a href="#"><small><span class="text-muted"><i class="fab fa-telegram-plane  px-1"></i>My Trips</span></small></li>
      <li class="px-2"><a href="#"><small><span class="text-muted"><i class="fas fa-mobile-alt px-1"></i>Free Apps</span></a></small></li>
      <li class="px-2"><a href="#"><small><span class="text-muted">Support</span></a></small></li>
      <li class="px-2"><a href="#"><small><span class="text-muted">Agent Sign In</span> </a></small></li>
    <!-- <li class="px-3"><a href="#"><img src="assets/image/icons/usd.jpg" width="20px" class="px-1">USD</a></li> -->
    <div class="dropdown px-2">
      <small><a href="" class=""><span class="text-muted" style="font-size:14px;">USD <i class="fas fa-sort-down px-1"></i></span></a>
  <div class="dropdown-content">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a></small>
  </div>
</div>
<div class="dropdown">
  <a href="" class=""><span class="text-muted" style="font-size:14px;">English <i class="fas fa-sort-down px-1"></i></span></a>
  <div class="dropdown-content">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div> 
    </ul>
  </div><hr>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="px-2"><span href="#" class="animate" style="text-decoration: none; font-size: 12px;"><!-- <i class="fad fa-ship px-1"></i> --><b>FIND A CRUISE</b></span></li>
       <li class="px-2 "><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><!-- <i class="fas fa-tags px-1"></i> --><b>DEALS</b></span></li> 
       <li class="px-2"><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><!-- <i class="fas fa-ship px-1"></i> --><b>SHIPS</b></span></li> 
        <li class="px-2"><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><!-- <i class="fas fa-map-marker-alt px-1"></i> --><b>DESTINATIONS</b></span></li>
        <li class="px-2"><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><b>MANAGE MY CRUISE</b></span></li> 
      <li class="px-2"><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><!-- <i class="fas fa-bed px-1"></i> --><b>HOTELS</b></span></li>
       <li class="px-2"><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><!-- <i class="fas fa-snowboarding px-1"></i> --><b>ACTIVITIES</b></span></li>
      <li class="px-2"><span href="#" class="animate" style="text-decoration: none;font-size: 12px;"><!-- <i class="fas fa-snowboarding px-1"></i> --><b>FLIGHTS</b></span></li>
    </ul>
  </div>
    </div>
  </div>
  </div>
</nav> 
<!-- Navbar end -->

<!-- banner-->
  <header>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="assets/image/3.mp4" type="video/mp4" style="overflow: hidden;">
  </video>
  <div class="container mt-3">
    <div class="col-md-12 col-sm-12">
      <div class="row">
        <section id="good" class="p-3">
    <h2>
      THIS IS YOUR
    </h2>
    <h3>
      6 Nights Eastern Caribbean Cruise
    </h3>
    <h4><button class="btn btn-outline-primary badge badge-pill">Explore This Itinerary</button></h4>
    <div class="row">
      <div class="col-md-4">
        <span>LEAVING FROM</span>
        <p>Orlando(Posrt Canaveral),Florida</p>
      </div>
      <div class="col-md-3 text-right">
        <span>ONBOARD</span>
        <p>Mariner of the Seas</p>
      </div>
    </div>
    <div class="mt-2">
        <span>DAY PORT</span>
        <p><span>1. </span>Oriando (Posrt Carveral),Florida <br>
          <small class="ml-3">Departs at 4:00PM</small></p>
        <p><span>2. </span>Nassau, Bahamas <br>
          <small class="ml-3">From 8:00AM - 5:00PM</small></p>
      </div>
  </section>
  <section id="good" class="p-3 good " style="margin-left:200px;">
   <div class="text-right mb-5">
      <a href="">SIGN IN <i class="fas fa-search px-2"></i></a>
   </div>
   <div class="text-center">
      <h6>
     YOUR CRUISE IS WAITING 
    </h6>
    <h2>3 NIGHT PERFECT</h2>
    <h2>DAY BAHAMAS</h2>
    <h2>GETWAY</h2>
    <h6>From USD<small>*</small></h6>
    <h2>$172</h2>
    <button class="btn btn-warning">COMPLETE BOOKING</button>
   </div>
  </section>
      </div>
    </div>
   </div>
</header>
<!-- banner End-->
<!-- Plan Your Laxury cruise vacation -->
<div class="col-md-12 mt-5 text-center">
  <h4 class="text-primary mb-3">Plan Your Laxuary  Cruise Vacation</h4>
  <div class="container">
    <div class="col-md-9 col-sm-9">
   <div class="row">
      <div class="col-sm-3 mb-2">
        <button type="button" class="btn btn-outline-success badge badge-pill europe  p-2">EUROPE CRUISES</button>
      </div>
      <div class="col-sm-3 mb-2">
        <button type="button" class="btn btn-outline-success badge badge-pill  p-2">EUROPEAN CRUISES</button> 
      </div>
      <div class="col-sm-4 mb-2">
        <button type="button" class="btn btn-outline-success badge badge-pill p-2">HOLIDAY CRUISES</button>
      </div> 
      <div class="col-sm-2">
        <button type="button" class="btn btn-outline-success badge badge-pill  p-2">SHORT CARIBBEAN GETAWAYS</button>  
      </div>
   </div>
  </div>
  </div>
</div>
<!-- Plan Your Laxury Cruise Vaction End-->

<!-- Search Form -->

<div class="container">
  <div class="text-center mt-3">
  <div class="dropdown">
  <input type="text" name="" onclick="myFunction()" class="dropbtn" placeholder="Departure Dates" id="mySelect" style="width:170px;">
  <div  id="myDropdown" class="dropdown-content">
    <div class="dropdown-scrollable">
      <div style="background-color: #cccdcf; width: 250px; text-align: center; padding: 5px; "><span>Departure Dates</span></div></br>
      <span style="margin-left: 10px;" id="year"></span><a href="" style="margin-left:110px; display: inline; color: blue;" id="year2"></a><br>
    <button class="color"  id="date" value="Oct,2021"></button><button class="color"id="date1" value="Nov,2021"></button><button  class="color" id="date2" ></button><br><br>
    <!-- <button>year</button> -->

    <div id="text">
      <span style="margin-left: 10px; font-weight: bold;" id="year1"></span></span>
      <a href="" style="margin-left:100px; display: inline; color: blue;" id="year3"></a>
     <br><br>
      <button  class="color" id="month"></button><button class="color" id="month1"></button><button  class="color" id="month2"></button><br><br>
     <button class="color" id="month3"></button>
     <button style="width:65px;" class="color" id="month4"></button><button  class="color" id="month5"></button><br><br><button class="color" id="month6"></button>
     <button class="color" style="width:65px;" id="month7"></button><button class="color" style="width: 75px;" id="month8"></button><br><br>
     <button class="color"  id="month9"></button><button class="color" id="month10"></button><button class="color" id="month11"></button><br><br>
    </div>
    <div>
      <span style=" font-weight: bold;" id="year4"></span><a href="" style="margin-left:110px; display: inline; color: blue;" id="year5"></a></span><br><br>
      <button class="color" id="ex"></button><button class="color" id="ex1"></button><button class="color" id="ex2"></button><br><br>
       <button class="color" id="ex3"></button><button class="color" id="ex4"></button><button class="color" id="ex5"></button><br><br>
       <button  class="color" id="ex6"></button><button  class="color" id="ex7"></button><button class="color" id="ex8"></button><br><br>
       <button class="color"  id="ex9"></button><button class="color" id="ex10"></button><button  class="color" id="ex11"></button><br><br>
    </div>
    <div>
      <span style=" font-weight: bold;" id="year6"></span><a href="" style="margin-left:110px; display: inline; color: blue;" id="year7"></a></span><br><br>
      <button class="color" id="EX"></button><button class="color" id="EX1"></button><button  class="color" id="EX2"></button><br><br>
    </div>
    </div><hr>
    <div style="padding:20px;"><span style="color:blue; margin-left: 10px;">Reset</span><span style="margin-left:100px;"></span>
      <button class="color" onclick="mySelect()" >APPLY</button></div>
  </div>
</div>

<!-- Destination Start -->
<div class="dropdown">
  <input type="text" name="" onclick="show_hide()" class="dropbtn" placeholder="Destination" style="width:170px;">
  <div id="list_items" class="dropdown-content">
  <div class="dropdown-scrollable">
    <div style="background-color: #cccdcf; width: 250px; text-align: center; padding: 5px; "><span>Destination</span></div></br>
    <div style="margin-left:10px;">
       <button class="color1"  id="date">Alaska</button><button class="color1"id="date1">Asia</button><br><br>

       <button  class="color1"  id="date">Australia and New Zealand</button><button class="color1"id="date1">Bahamas</button><br><br>

       <button class="color1"  id="date">Bermuda</button><button  class="color1"id="date1">Canada</button><br><br>

       <button  class="color1"  id="date">Caribbean</button><button class="color1"id="date1">Europe</button><br><br>

       <button  class="color1"  id="date">Galapagos</button><button class="color1"id="date1">Hawaii</button><br><br>

       <button class="color1"  id="date">Mexican Riviera</button><button  class="color1"id="date1">Pacific Coastal</button><br><br>

       <button class="color1"  id="date">Panama Canal</button><button class="color1"id="date1">South America</button><br><br>

       <button  class="color1"  id="date">South Pacific</button><button  class="color1"id="date1">Transatlantic</button><br><br>

       <button class="color1"  id="date">Transpacific </button><!-- <button style="margin-right:5px;padding:8px; width: 115px;border: none;" class="color"id="date1">Pacific Coastal</button> --><br><br>

    </div>
  </div><hr>
  <div style="padding:20px;"><span style="color:blue; margin-left: 10px;">Reset</span><span style="margin-left:100px;"></span>
      <button class="color" >APPLY</button></div>
  </div>
</div>
<!-- Destination End -->

<!-- Departure Ports start-->
<div class="dropdown">
  <input type="text" name="" onclick="hide_show()" class="dropbtn" placeholder="Departure Ports" style="width:170px;">
  <div id="items" class="dropdown-content">
    <div class="dropdown-scrollable">
      <div style="background-color: #cccdcf; width: 250px; text-align: center; padding: 5px; "><span>Departure Ports</span></div></br>
      <div style="margin-left:15px;">
        <button class="color2" id="date">Amsterdam, Netherlands</button><br><br>

         <button class="color2" id="date">Athens (Piraeus), Greece</button><br><br>

          <button class="color2" id="date">Auckland, New Zealand</button><br><br>

           <button class="color2" id="date">Baltra Island(Galapagos)</button><br><br>

            <button class="color2" id="date">Barcelona, Spain</button><br><br>

             <button class="color2"  id="date">Boston, Massachusetts</button><br><br>

              <button class="color2"  id="date">Buenos Aires, Argentina</button><br><br>

               <button class="color2" id="date">Buenos Aires, Argentina</button><br><br>

                <button class="color2" id="date">Cape Liberty, New Jersey</button><br><br>

                 <button class="color2"  id="date">Fort Lauderdale, Florida</button><br><br>

                  <button class="color2"  id="date">Hong Kong, China</button><br><br>

                   <button class="color2"  id="date">Honolulu, Oahu, Hawaii</button><br><br>

                    <button class="color2" id="date">Lisbon, Portugal</button><br><br>

                     <button class="color2"  id="date">Los Angeles California</button><br><br>

                      <button class="color2"  id="date">Miami, Florida</button><br><br>

                       <button class="color2"  id="date">Rome (Civitavecchia), Italy</button><br><br>

                        <button class="color2" id="date">San Diego, California</button><br><br>

                         <button class="color2" id="date">San Juan Puerto Rico</button><br><br>

                          <button class="color2"  id="date">Seattle, Washington</button><br><br>

                           <button class="color2" id="date">Seward, Alaska</button><br><br>

                            <button class="color2"class="color"  id="date">Singapore, Singapore</button><br><br>

                             <button class="color2" class="color"  id="date">Southampton, England</button><br><br>

                              <button class="color2"  id="date">Sydney, Australia</button><br><br>

                              <button class="color2" id="date">Tampa, Florida</button><br><br>

                              <button class="color2" id="date">Tokyo (Yokohama), Japan</button><br><br>

                              <button class="color2" id="date">Valparaiso, Chile</button><br><br>
                              <button class="color2"  id="date">Vancouver, British Columbia</button><br><br>
                          <button class="color2" id="date">Vancouver, British Columbia</button><br><br>

                        <button class="color2"  id="date">Venice (Ravenna), Italy</button><br><br>

      </div>
    </div><hr>
    <div style="padding:20px;"><span style="color:blue; margin-left: 10px;">Reset</span><span style="margin-left:100px;"></span>
      <button class="color" >APPLY</button></div>
  </div>
</div>
<!-- Departure Ports end-->

<!-- Duration start-->
  <div class="dropdown">
    <input type="text" name="" onclick="duration()" class="dropbtn" placeholder="Duration"style="width:170px;">
    <div  id="duration" class="dropdown-content">
       <div class="dropdown-scrollable">
          <div style="background-color: #cccdcf; width: 250px; text-align: center; padding: 5px; "><span>Duration</span></div></br>
          <div style="margin-left:15px;">
        <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">2-5 Nights</button><br><br>

         <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">6-8 Nights</button><br><br>

          <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">9-11 Nights</button><br><br>

           <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">12+ Nights</button><br><br>
      </div><hr>
      <div style="padding:20px;"><span style="color:blue; margin-left: 10px;">Reset</span><span style="margin-left:70px;"></span>
      <button class="color" >APPLY</button></div>
       </div>
    </div>
  </div>
<!-- Duration End-->

<!-- Ship Start-->
<div class="dropdown">
   <input type="text" name="" onclick="ships()" class="dropbtn" placeholder="Ships" style="width:150px;">
   <div id="ship" class="dropdown-content">
    <div  class="dropdown-scrollable">
      <div style="background-color: #cccdcf; width: 250px; text-align: center; padding: 5px; "><span>Ships</span></div></br>
          <div style="margin-left:15px;">
        <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Royal Caribbean</button><br><br>

         <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Carnival</button><br><br>

          <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Disney Cruise</button><br><br>

           <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Norwegian Cruise</button><br><br>
           <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Celebrity Cruises</button><br><br>
           <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Holland America</button><br><br>
            <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">MSC Cruises</button><br><br>
             <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Costa Cruises</button><br><br>
              <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Oceania Cruises</button><br><br>
              <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Regent Cruises</button><br><br>
              <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Cunard Cruises</button><br><br>
              <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Seaborn Cruises</button><br><br>
              <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Princess Cruises</button><br><br>
               <button style="margin-right:5px;padding:8px; width: 235px;border: none;" class="color"  id="date">Azamara Cruises</button><br><br>
      </div><hr>
      <div style="padding:20px;"><span style="color:blue; margin-left: 10px;">Reset</span><span style="margin-left:70px;"></span>
      <button class="color" >APPLY</button></div>
    </div> 
   </div>
</div>
<button class="find"> FIND A CRUISES</button>
<!-- Ships End-->

</div>
</div>
<!-- Search From End -->

<!-- Book Your short caribean getway -->
<div class="container mt-5">
  <div class="col-md-9">
    <h2>BOOK YOUR SHORT CARIBBEAN GETWAYS!</h2>
  </div>
  <div class="container">
    <div class="col-md-12">
      <img class="mt-3" src="assets/image/banner1.jpg" alt="Snow" style="width:100%; height: 350px; border-radius: 20px; ">
      <div class="col">
    <div  class="short-caribbean">
    <img src="assets/image/banner1text.jpg" width="400px">
    <div class="col text-center">
      <button class="btn btn-primary mt-3">BOOK NOW</button>
    </div>
  </div>
  </div>
    </div>
  </div>
</div>
<!-- Book Your short caribbean getway end -->
<!-- Image slider Start -->
    <div class="container">
      <div class="container my-5 bg-dark">
      <div class="mb-5">
        <h2 class="text-light pt-3">UP TO <i class="fas fa-dollar-sign"></i>450 OFF ON SELECT CRUISES</h2>
      <span class="text-light" style="font-size:20px">Plus 60% off second guest.</span>
      </div>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="assets/image/cruise/ship-1.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn text-primary">View 9 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="assets/image/cruise/img1.jpg" height="228px" 
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn text-primary">View 2 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="assets/image/cruise/img2.jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn text-primary">View 12 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                       <a href="" class="btn text-primary">View 3 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn text-primary">View 10 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                       <a href="" class="btn text-primary">View 4 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                      <a href="" class="btn text-primary">View 8 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                  alt="Card image cap">
               <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                       <a href="" class="btn text-primary">View 2 Dates</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">4 NIGHT EASTERN CARIBBEAN CRUISE</h4>
                  <p class="card-text text-muted">Departs From Orlando (Part Canveral), Florida Onboard Mariner of the Seas</p>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span class="text-muted" style="font-size:12px">From USD</span>
                      <h2><i class="fas fa-dollar-sign"></i>181</h2>
                    </div>
                    <div class="mt-4">
                      <a href="" class="btn text-primary">View 1 Date</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>
    </div>
   <!-- Image slider END -->
   <!-- Make a Memory with our 2022 cruises deals -->
   <div class="container mt-3">
       <div class="col-md-9">
         <h2 >MAKE MEMORIES WITH OUR 2022 CRUISE DEALS</h2>
       </div>

       <div class="team-grid">
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-lg-3 col-sm-6 item">
                 <div class="boxs" style="background-image:url(assets/image/cruise/caribbean1.jpg);">
                     <div class="cover">
                         <h3 class="name">EASTERN</h3>
                         <p class=" name">Caribbean</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 col-sm item">
                 <div class="boxs" style="background-image:url(assets/image/cruise/west.jpg);">
                     <div class="cover">
                         <h3 class="name">WESTERN</h3>
                         <p class=" name">Caribbean</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="boxs" style="background-image:url(assets/image/cruise/mediterranean.jpg);">
                     <div class="cover">
                         <h3 class="name">SOUTHERN</h3>
                         <p class=" name">Caribbean</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="boxs" style="background-image:url(assets/image/cruise/maxico.jpg);">
                     <div class="cover">
                         <h3 class="name">MEXICO</h3>
                         <p class=" name">& Cancun</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-outline-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
     </div>
   <!-- Make a Memory with our 2022 cruises deals end -->
   <!-- Top Cruise Destination -->
   <div class="container">
   	<div class="col-md-9 mt-3">
      <h2>TOP CRUISE DESTINATIONS</h2>
      <p>Chase sun-kissed shores and emerald rainforests in top Caribbean destinations, like The Bahamas. the ABC Islands, and Mexico's Yucation peninsula. Or go wild beneath the midnight sun go journeys that take you to Alaska's most awe-inspiring fjords and national parks. No matter where you choose to wander, adventure is always just a click away.</p>
    </div>
   </div>
     <div class="container">
  <div class="row">
   <div class="col-md-4 col-sm-12">
     <div class="grid">
          <figure class="effect-goliath">
            <img src="assets/image/cruise/alaska.jpg" width="460px" height="280px" alt="img23"/>
            <figcaption>
              <h2> <span>THE BAHAMAS</span></h2>
              <p>Cruises to the Bahamas starting from $119</p>
              <!-- <p><a href="#">View more</a></p> -->
            </figcaption>     
          </figure>
        </div>
   </div>
   <div class="col-sm-4">
     <div class="grid">
       <figure class="effect-goliath">
            <img src="assets/image/cruise/caribbean1.jpg" width="460px" height="280px" alt="img24"/>
            <figcaption>
              <h2><span>THE CARIBBEAN</span></h2>
              <p>Cruises to the Caribbean starting from $189</p>
             <!-- <p> <a href="#">View more</a></p> -->
            </figcaption>     
          </figure>
     </div>
   </div>
   <div class="col-sm-4">
     <div class="grid">
       <figure class="effect-goliath">
            <img src="assets/image/cruise/maxico.jpg" height="280px" alt="img24"/>
            <figcaption>
              <h2> <span>MEXICO</span></h2>
              <p>Cruises to the ALASKA starting from $299</p>
              <!-- <a href="#">View more</a> -->
            </figcaption>     
          </figure>
     </div>
   </div>
  </div>
</div>
   <!-- Top Cruise Destination End -->
   <!-- Last minut Cruise -->
   <div class="container">
    <h2 class="mt-5 ml-3">LAST MINUTE CRUISES</h2> 
    <div class="hovereffect">
        <img class="img-responsive" src="assets/image/offer2.png" alt="">
        <div class="overlay">
            <h2>Cruises For You</h2>
            <a class="info" href="#">Book Now</a>
        </div>
    </div>
   </div>
   <!-- Last Minut Cruise End -->

   <!-- Select Your Favorite cruise -->
    <div class="container">
     <h2>SELECT YOUR FAVORITE CRUISES</h2> 
   </div>
    <div class="container mb-5">
      <div class="row">
        <div class="col">
           <div class="card" >
          <img src="assets/image/cruise/alaska.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">7-Night Caribbean Cruises</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">VIEW CARIBBEAN CRUISES</a>
            <a href="" class="btn btn-outline-danger btn-sm heart"><i class="far fa-heart"></i></a>
          </div>
        </div>
        </div>
        <div class="col">
           <div class="card" >
          <img src="assets/image/cruise/alaska.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">7-Night Caribbean Cruises</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
            <a href="" class="btn btn-outline-success btn-sm">VIEW CARIBBEAN CRUISES</a>
            <a href="" class="btn btn-outline-danger btn-sm heart"><i class="far fa-heart"></i></a>
          </div>
        </div>
        </div>
        <div class="col good">
           <div class="card">
  <img src="assets/image/cruise/alaska.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">7-Night Caribbean Cruises</h5>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
    <a href="" class="btn btn-outline-success btn-sm">VIEW CARIBBEAN CRUISES</a>
    <a href="" class="btn btn-outline-danger btn-sm"><i class="far fa-heart"></i></a>
  </div>
</div>
        </div>
      </div>
    </div>
   <!-- Select your Favorite cruise End -->
   <!-- seek the royal caribbean -->
   <div class="container">
     <div class="container" style="background-image: url('assets/image/cruise/coco.jpg'); min-height: 100vh; background-size: cover;  opacity: 0.75;">
       <div class="text-center text-light  text-align">
         <span class="text-muted">COME SEEK THE ROYAL CARIBBEAN</span><br>
         <strong style="font-size:22px">START YOUR ADVENTURE</strong>
         <div class="col-sm">
           Picture yourself wading into them warm, bright-blue water with a rum cocktail in hand, taking in treatop views or swimming with stingrays, Head to the <a href="">Eastern Caribbean</a> for mountain peaks and rainforest thrills. In the <a href="">Western Caribbran,</a> you'll find the allluing ruins of civilizations. Or choose the <a href="">Southern Carribbean</a> for those bright, exotic beaches.
         </div>
       </div>

      <div class="team-grid">
     <div class="container">
         <div class="row people d-flex justify-content-center">
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(assets/image/cruise/caribbean1.jpg)">
                     <div class="cover">
                         <h3 class="name">EASTERN</h3>
                         <p class=" name">Caribbean</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-outline-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(assets/image/cruise/west.jpg)">
                     <div class="cover">
                         <h3 class="name">WESTERN</h3>
                         <p class=" name">Caribbean</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-outline-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(assets/image/cruise/mediterranean.jpg)">
                     <div class="cover">
                         <h3 class="name">SOUTHERN</h3>
                         <p class=" name">Caribbean</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-outline-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-lg-3 item">
                 <div class="box" style="background-image:url(assets/image/cruise/maxico.jpg)">
                     <div class="cover">
                         <h3 class="name">MEXICO</h3>
                         <p class=" name">& Cancun</p>
                         <div class="media-body">
                        <h6 class="my-0 text-white d-block text-center"><button class="btn btn-outline-warning">EXPLORE</button></h6>
                      </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
     </div>
   </div>
   <!-- seek the royal caribbean End -->
   <!-- Take adventure to new heights -->
   <div class="container mt-5">
      <h2 class="text-dark text-left">TAKE ADVENTURE TO NEW HEIGHTS</h2>
      <p>Everyone deserves a vacation. You’ll find endless opportunities to make the most of every moment — like game-changing activities, world-class dining, show-stopping entertainment, and plenty of ways to unwind in the sun.</p>
     <div class="container">
        <div class="row">
    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
         <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-80">
        <div class="box adventure">
          <img src="assets/image/cruise/adventure5.jpg" class="img-ht img-fluid rounded">
          <div class="heroContent">
            ALASKA
          </div>
        </div>
        </div>
            </div>
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
       <div class="row h-50">
          <div class="col-md-8 col-sm-8 co-xs-12 gal-item">
              <div class="box adventure">
             <img src="assets/image/cruise/PerfectDayHero1.jpg" class="img-ht img-fluid rounded">
             <div class="heroContent">
            PERFECT DAY AT COCOCAY
          </div>
              </div>
          </div>
          <div class="col-md-4 col-sm co-xs-12 gal-item">
          <div class="box adventure">
          <img src="assets/image/cruise/mexico1.jpg" class="img-ht img-fluid rounded">
          <div class="heroContent">
            MEXICO
          </div>
        </div>
        </div>
      </div>
    
      <div class="row h-40 mt-5">
         <div class="col-md-4 col-sm-4 co-xs-12 gal-item">
          <div class="box">
          <img src="assets/image/cruise/mexico.jpg" class="img-ht img-fluid rounded">
          <div class="heroContent">
            BAHAMAS
          </div>
        </div>
        </div>

        <div class="col-md-4 col-sm-4 co-xs-12 gal-item">
         <div class="box adventure">
          <img src="assets/image/cruise/caribbean2.jpg" class="img-ht img-fluid rounded">
          <div class="heroContent">
            CARIBBEAN
          </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 co-xs-12 gal-item">
         <div class="box caribbean">
          <img src="assets/image/cruise/southern.jpg" class="img-ht img-fluid rounded">
          <div class="heroContent">
            SOUTHERN CARIBBEAN
          </div>
        </div>
        </div>
            </div>
      </div>
  </div>

     </div>  
     </div>
   <!-- Take adventure to new heights end -->
   <!-- Amazing seaonal cruise deals -->
   <div class="container">
   	<div class="col-md-9 mt-3">
      <h2>AMAZING SEASONAL CRUISE DEALS</h2>
      <p>No matter what time of year it is, a cruise with Royal Caribbean is always a great idae. Set sail on unforgettable spring and summer vacations the whole family will love, or get away on fail and winter escapes to the world's most captiviting destinations with seasonal savings on all your favorite cruises.</p>
    </div>
    <div class="containerm" style="background-color:#115C9C;">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="image">
             <img class="design" src="assets/image/cruise/cruise_deals.jpg" alt="">
              <h4 class="txt">2022 ALASKA CRUISES STARTING FROM $320</h4>
              <button class="booknow btn btn-warning">BOOK NOW</button>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="image">
              <img class="design" src="assets/image/cruise/cruise_deals1.jpg" alt="">
              <h4 class="txt">PERFECT WEEKEND GETAWAYS STARTING FROM $120</h4>
              <button class="booknow btn btn-warning">BOOK NOW</button>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="image">
              <img class="design" src="assets/image/cruise/cruise_deals2.jpg" alt="">
              <h4 class="txt">7 NIGHT CARIBBEAN CRUISES STARTING FROM $251</h4>
              <button class="booknow btn btn-warning">BOOK NOW</button>
              </div>
        </div>
    </div>
</div>
   </div>
   <!-- Amazing seaonal cruise deals end -->
   <!-- Get Travel wire deals -->
   <div class="col-md-12 col-sm-12 mt-5">
     <div class="container">
      <h2 class=" mb-3 text-dark">GET TRAVELWIRE DEALS, SIGN UP TODAY</h2>
      <div class="row">
  <div class="col-sm-3">
    <div class="form-group">
    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="First Name">
  </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
    <input type="password" class="form-control" id="" placeholder="Last Name">
  </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
     <input type="password" class="form-control" id="" placeholder="Email Address">
  </div>
  </div>
  <div class="form-group">
     <select id="inputState" class="form-control">
        <option selected>United States</option>
        <option>...</option>
      </select>
  </div>
  <div class="col-sm">
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </div>
      </div>
      <p style="font-size:12px">Sign up to receive information about our special offers and deals. You can unsubscribe at any time. For more details about how we use your information, view our <a href="">Privacy policy</a></p>
     </div>
   </div>

   <!-- Get travelwire deals ends -->

 <!--====== footer PART START ======-->
 <footer id="footer" class="d-flex-column text-center" style="background-color: #b3b3ff; background-image: url('assets/image/cruise/footer.jpg');width: 100%;">
  <!--Footer Links-->
  <div class="container text-left text-md-center">
    <div class="row">
      <!--First column-->
      <div class="col-sm mt-2 mx-auto shfooter">
    <img src="assets/image/logo1.png
" width="200px">
<h5 class="my-2 font-weight-bold d-none d-md-block text-success">CONTACT WITH US</h5>
    <div class="row ml-1">
    <i class="fab fa-facebook-f ml-2 text-primary text-center social"></i>
    <i class="fab fa-twitter ml-2 text-primary text-center social"></i>
    <i class="fab fa-youtube ml-2 text-primary text-center social"></i>
    <i class="fab fa-skype ml-2 text-primary text-center social"></i>
    <i class="fab fa-linkedin-in ml-2 text-primary text-center social"></i>
    <i class="fab fa-instagram  ml-2 text-primary text-center social"></i>
  </div>
  </div>

      <div class="col-sm mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block text-success">QUICK LINK</h5>
        <div class="d-md-none title" data-target="#Product" data-toggle="collapse">
          <div class="mt-3 font-weight-bold text-success">QUICK LINK
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Product">
          <li><a href="#" class="text-light">Top Us Destinations</a></li>
          <li><a href="#" class="text-light">Top Caribbean</a></li>
          <li><a href="#" class="text-light">Destination</a></li>
          <li><a href="#" class="text-light">Top mexico Destination</a></li>
          <li><a href="#" class="text-light">Top Hotel Brands</a></li>
          <li> <a href="#" class="text-light">Top Deals</a></li>
        </ul>
      </div>
      <!--/.First column-->
      <!--Second column-->
      <div class="col-sm mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block text-success">BOOK</h5>
        <div class="d-md-none title" data-target="#Company" data-toggle="collapse">
          <div class="mt-3 font-weight-bold text-success">BOOK
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Company">
          <li> <a href="#" class="text-light">Flights</a></li>
          <li><a href="#" class="text-light">Vacation</a></li>
          <li><a href="#" class="text-light">Packages</a></li>
          <li><a href="#" class="text-light">Hotels</a></li>
          <li><a href="#" class="text-light">Cars</a></li>
          <li><a href="#" class="text-light">Cruises</a></li>
        </ul>
      </div>
      <!--/.Second column-->
      <!--Third column-->
      <div class="col-sm mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block text-success">TOOLS</h5>
        <div class="d-md-none title" data-target="#Resources" data-toggle="collapse">
          <div class="mt-3 font-weight-bold text-success">TOOLS
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="Resources">
          <li><a href="#" class="text-light">My Trips</a></li>
          <li><a href="#" class="text-light">Travel Guides</a></li>
          <li><a href="#" class="text-light">Costomer</a></li>
          <li><a href="#" class="text-light">Support</a></li>
          <li><a href="#" class="text-light">Airline Baggage</a></li>
          <li><a href="#" class="text-light">Fees</a></li>
        </ul>
      </div>
      <!--/.Third column-->
      <!--Fourth column-->
      <div class="col-sm mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block text-success">ABOUT TRAVELWIRE</h5>
        <div class="d-md-none title" data-target="#TRAVELWIRE" data-toggle="collapse">
          <div class="mt-3 font-weight-bold text-success">ABOUT TRAVELWIRE
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="TRAVELWIRE">
          <li><a href="#" class="text-light">About Us</a></li>
          <li><a href="#" class="text-light">Contact Us</a></li>
          <li><a href="#" class="text-light">Newsletter</a></li>
          <li><a href="#" class="text-light">Travel Agent</a></li>
          <li><a href="#" class="text-light">Afiliate Program</a></li>
          <li><a href="#" class="text-light">Travelwire Rewards</a></li>
        </ul>
      </div>
      <!--/.Fourth column-->
      <!-- Fifth Column -->
      <div class="col-sm mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block text-success">BOOK</h5>
        <div class="d-md-none title" data-target="#BOOK" data-toggle="collapse">
          <div class="mt-3 font-weight-bold text-success">BOOK
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="BOOK">
          <li><a href="#" class="text-light">Facebook</a></li>
          <li><a href="#" class="text-light">Twitter</a></li>
          <li><a href="#" class="text-light">Youtube</a></li>
          <li><a href="#" class="text-light">Pinterest</a></li>
          <li><a href="#" class="text-light">Google +</a></li>
           <li><a href="#" class="text-light">Instagram</a></li>
        </ul>
      </div>
      <!-- /. Fifth Column -->
      <!-- Sixth Column -->
      <div class="col-sm mx-auto shfooter">
        <h5 class="my-2 font-weight-bold d-none d-md-block text-success">LEGAL</h5>
        <div class="d-md-none title" data-target="#LEGAL" data-toggle="collapse">
          <div class="mt-3 font-weight-bold text-success">LEGAL
            <div class="float-right navbar-toggler">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </div>
          </div>
        </div>
        <ul class="list-unstyled collapse" id="LEGAL">
          <li><a href="#" class="text-light">Privacy Policy</a></li>
          <li><a href="#" class="text-light">Terms & Conditions</a></li>
          <li><a href="#" class="text-light">Taxes & Fee</a></li>
        </ul>
      </div>
      <!-- Sixth Column -->
    </div>
  </div>
  <!--/.Footer Links-->
  <!-- Icons -->
  <div class="text-center mt-4 p-2" style="background-color:#D3D3D3;">
    <img src="assets/image/icons/iata1.png" width="60px"><strong style="font-size:14px; margin-right: 10px; margin-left: 20px;">Rating and Reviews Powered By</strong><img src="assets/image/icons/advisor.png" width="190px"><img src="assets/image/icons/authorize.png" class="ml-2" width="90px"><img src="assets/image/icons/secured.png" class="ml-2" width="100px">
  </div>
  <!-- Icons -->
  <!--Copyright-->
  <div class="py-3 text-center text-light" style="background-color:#083A66">
    Copyright © 2021 Travelwire Inc. <a href="#" class=" text-light">All rights reserved</a>
    <!-- <script>
      document.write(new Date().getFullYear())
    </script> -->
  </div>
  <!--/.Copyright-->
</footer>
  <!--====== footer PART ENDS ======-->


<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onload = setInterval(clock,1000);
function clock()
{
    var d = new Date();
    var date = d.getDate();
    var year = d.getFullYear();
    var year1 = d.getFullYear()+1;
    var year2 = d.getFullYear()+2;
    var year3 = d.getFullYear()+3;
    var month = d.getMonth();
    var month1 = d.getMonth()+1;

    var monthArr = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November","December"];
    month = monthArr[month];

    month1 = monthArr[month1];
    document.getElementById("date").innerHTML=month;
    document.getElementById("date1").innerHTML=month1;
    document.getElementById("date2").innerHTML=monthArr[11];
    document.getElementById("year").innerHTML=year;
    document.getElementById("year1").innerHTML=year1;
    document.getElementById("year4").innerHTML=year2;
    document.getElementById("year6").innerHTML=year3;
    document.getElementById("year2").innerHTML="All "+year;
    document.getElementById("year3").innerHTML="All "+year1;
     document.getElementById("year5").innerHTML="All "+year2;
     document.getElementById("year7").innerHTML="All "+year3;
    document.getElementById("month").innerHTML=monthArr[0];
    document.getElementById("month1").innerHTML=monthArr[1];
    document.getElementById("month2").innerHTML=monthArr[2];
    document.getElementById("month3").innerHTML=monthArr[3];
    document.getElementById("month4").innerHTML=monthArr[4];
    document.getElementById("month5").innerHTML=monthArr[5];
    document.getElementById("month6").innerHTML=monthArr[6];
    document.getElementById("month7").innerHTML=monthArr[7];
    document.getElementById("month8").innerHTML=monthArr[8];
    document.getElementById("month9").innerHTML=monthArr[9];
    document.getElementById("month10").innerHTML=monthArr[10];
    document.getElementById("month11").innerHTML=monthArr[11];

    document.getElementById("ex").innerHTML=monthArr[0];
    document.getElementById("ex1").innerHTML=monthArr[1];
    document.getElementById("ex2").innerHTML=monthArr[2];
    document.getElementById("ex3").innerHTML=monthArr[3];
    document.getElementById("ex4").innerHTML=monthArr[4];
    document.getElementById("ex5").innerHTML=monthArr[5];
    document.getElementById("ex6").innerHTML=monthArr[6];
    document.getElementById("ex7").innerHTML=monthArr[7];
    document.getElementById("ex8").innerHTML=monthArr[8];
    document.getElementById("ex9").innerHTML=monthArr[9];
    document.getElementById("ex10").innerHTML=monthArr[10];
    document.getElementById("ex11").innerHTML=monthArr[11];

    document.getElementById("EX").innerHTML=monthArr[0];
    document.getElementById("EX1").innerHTML=monthArr[1];
    document.getElementById("EX2").innerHTML=monthArr[2];
}

// Destination //
function show_hide(){
  var click = document.getElementById("list_items");
  if(click.style.display ==="none"){
    click.style.display="block";
  }else{
    click.style.display="none";
  }
}

//Departure ports//
// function hide_show(){
//   var click = document.getElementById("items");
//   if(click.style.display ==="none"){
//     click.style.display="block";
//   }else{
//     click.style.display="none";
//   }
// }
function hide_show(){
  document.getElementById("items").classList.toggle("show");
}

window.onclick = function(event)
{
  if(!event.target.matches('.dropbtn'))
  {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for(i=0; i < dropdowns.length; i++)
    {
      var openDropdown = dropdowns[i];
      if(openDropdown.classList.contains('show'))
      {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function duration(){
  document.getElementById("duration").classList.toggle("show");
}


function ships(){
  document.getElementById("ship").classList.toggle("show");
}


const buttons = document.querySelectorAll("button");
const minValue = 0;
const maxValue = 10;

buttons.forEach((button) => {
  button.addEventListener("click", (event) => {
    // 1. Get the clicked element
    const element = event.currentTarget;
    // 2. Get the parent
    const parent = element.parentNode;
    // 3. Get the number (within the parent)
    const numberContainer = parent.querySelector(".number");
    const number = parseFloat(numberContainer.textContent);
    // 4. Get the minus and plus buttons
    const increment = parent.querySelector(".plus");
    const decrement = parent.querySelector(".minus");
    // 5. Change the number based on click (either plus or minus)
    const newNumber = element.classList.contains("plus")
      ? number + 1
      : number - 1;
    numberContainer.textContent = newNumber;
    console.log(newNumber);
    // 6. Disable and enable buttons based on number value (and undim number)
    if (newNumber === minValue) {
      decrement.disabled = true;
      numberContainer.classList.add("dim");
      // Make sure the button won't get stuck in active state (Safari)
      element.blur();
    } else if (newNumber > minValue && newNumber < maxValue) {
      decrement.disabled = false;
      increment.disabled = false;
      numberContainer.classList.remove("dim");
    } else if (newNumber === maxValue) {
      increment.disabled = true;
      numberContainer.textContent = `${newNumber}+`;
      element.blur();
    }
  });
});

function mySelect()
{
  document.getElementById('mySelect').value = this.value;
}
// Search From End
</script>
</body>
</html>