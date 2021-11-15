<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hotel Result</title>
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/hotel_result.css"> -->
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
    <style type="text/css">
        body{
            background-color: whitesmoke;
        }
        .social{
   display:block;
height: 25px;
width: 25px;
border-radius: 50%;
border: 1px solid blue;
padding-top: 3px;
 }

 .outer__button { 
  padding: .6em 1.5em;
  color: #000;
  margin-top: -1em;
  margin-bottom: -1em;
}
.button__right-left {
  background: linear-gradient(to left, #ff9900 50%, #fff 50%);
  background-size: 200% 100%;
  background-position: bottom left;
  transition: all .7s ease-out;
  cursor: pointer;
}
.button__right-lefts {
  background: linear-gradient(to left, #ff9900 200%, #fff 200%);
  /*background-size: 200% 200%;*/
  background-position: bottom left;
  transition: all .7s ease-out;
  cursor: pointer;
}

.button__right-left:hover {
  background-position: bottom right;
  color: #041320;
}
/*Side nav*/
.navbar-side {
  height: 100%;
  max-width: 30rem;
  /*font-size: 1.6rem;*/
  position: fixed;
  top: 0;
  right: 0;
  padding: 0;
  list-style: none;
  background-color: #ffffff;
  overflow-y: scroll;
  z-index: 1000;
}

  @media (min-width: 320px) {
    .navbar-side {
      width: 80%;
    }
  }

.navbar-side-item {
  margin-bottom: .2rem;
  height: 3rem;
  font-weight: 300;
}

  .navbar-side-item {
    padding: 1.5rem 0 4rem 0;
  }

  @media (min-width: 320px) and (max-width: 484px) {

    .navbar-side {
      width: 85%;
    }

    .navbar-side-item {
      padding: 1.5rem 0 4rem 0;
    }


    .navbar-side-item a {
      font-size: 1.4rem;
    }

  }

  .navbar-side-item:hover {
    background-color: #64C6BD;
  }

.navbar-side-item a {
  display: inline-block;
}

.side-link {
  padding-left: 1.7rem;
  padding-right: 1.2rem;
  color: #fff;
}

.side-link:active,
.side-link:hover {
  text-decoration: none;
  color: #fff;
}

.navbar-side {
  -webkit-transform: translateX(100%);
  -ms-transform: translateX(100%);
  transform: translateX(100%);
  -webkit-transition: 400ms ease;
  transition: 400ms ease;
}

.reveal {
  -webkit-transform: translateX(0%);
  -ms-transform: translateX(0%);
  transform: translateX(0%);
  -webkit-transition: 400ms ease;
  transition: 400ms ease;
}

.overlay {
  position: fixed;
  display: none;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  cursor: pointer;
  background-color: #5f5f5f;
  opacity: .6;
  z-index: 990;
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

.ex1{
    background-color: blue;
    border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.txt{
    font-size: 60px;
    font-weight: 500;
    display: inline-block;
    letter-spacing: -1px;
}
.dollar{
    font-size: 26px;
    display: inline-block;
    padding-bottom: 5;
}
.arrow{
    background-color: #febd11;
    font-weight: bold;
    width: 50px;
}
.align{
    margin-top: 120px;
}
.design2{
    display: none;
}
@media only screen and (max-width: 768px) 
{
   .design1{
    display: none;
   } 
   .arrow{
    display: none;
   }
   .design2{
    display: inline-block;
    background-color: #febd11;
    padding: 5px;
    text-align: center;
   }
}
    </style>
 <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <img src="assets/image/Travelwire_logo_final.jpg" width="200px">
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link btn btn-primary text-light" href="#">Login/Register</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="col-md-12 col-sm-12 col-lg-12 mt-3 mb-3">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="text-left">
                        <span class="ml-3">Fliter by:</span>
                        <button class="btn btn-outline-primary ml-3 mb-2">+ 2-5 Nights</button>
                        <button class="btn btn-outline-primary ml-3 mb-2">+ 6-8 Nights</button>
                        <button class="btn btn-outline-primary ml-3 mb-2">+ 9-11 Nights</button>
                        <button class="btn btn-outline-primary ml-3 mb-2">+ 12+ Nights</button>
                        <button class="btn btn-outline-primary ml-3 mb-2">+ Perfect Day at CocoCay</button>
                    </div>
                    </div>
                    <div class="col-md-3">   
                      <div class="text-right ml-3">
                        <a href="">Ships <i class="fas fa-sort-down"></i></a>
                    </div>
                    </div> 
                    </div>
                </div>
            </div>
        <!-- Side Navbar start -->
            <nav class="navbar navbar-light navbar-static bg-faded" role="navigation">
     <ul class="navbar-side" id="navbarSide">
        <div class="text-dark">
            <div class="p-5 dropdown-scrollable">
                <h3>6 NIGHT</h3>
                <p style="font-size: 18px;">WESTERN CARIBBEAN CRUISE</p>
                <button class="btn text-primary"><i class="fas fa-share-alt px-2"></i>SHARE</button><br>
                <span >LEAVING FROM:</span><br>
                <span>Miami, Florida onboard Jewel of the seas</span><br>
                  <span >VISITING:</span><br>
                   <span>Miami, Florida |Key West, Florida | Cruising | Geaoge Town, Grand Cayman | Cozumel, Mexico | Cruising | Miami Florida</span><br>
                   <small>Port schedule may vary by sail date</small>
                   <button class="btn ex1 mt-2">VIEW ITINERARY DETAILS</button><hr>
                   <p style="font-size:12px;">VIEW PRICING BY ROOM CATEGORY</p>
                   <!-- View pricing category -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="border:none">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><small class="text-center">INTERIOR <br><span class="ml-2">$270</span> </small></a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><small style="font-size:12px;" class="text-center">OUTSIDE VIEW<br><span class="ml-3">$291</span></small></a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false"><small style="font-size:12px" class="text-center">BALCONY<br><span class="ml-2">$374</span></small></a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><small style="font-size:12px;" class="text-center">SUITES<br><span class="ml-2">$2.204</span></small></a>
  </li>
</ul>
                  

<div class="tab-content">
  <div class="tab-pane active mt-3" id="home" role="tabpanel" aria-labelledby="home-tab">
      <small><b>December</b></small>
      <div class="row">
          <div class="col"><small>Sun,Dec 12, 2021</small></div>
          <div class="col"><small><strong>$270</strong></small></div>
          <div class="col"><small><a href="booking.php">SELECT DATE <i class="fas fa-chevron-right"></i></a></small></div>
      </div>
  </div>
  <div class="tab-pane mt-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <small><b>December</b></small>
      <div class="row">
          <div class="col"><small>Sun,Dec 12, 2021</small></div>
          <div class="col"><small><strong>$270</strong></small></div>
          <div class="col"><small><a href="booking.php">SELECT DATE <i class="fas fa-chevron-right"></i></a></small></div>
      </div>
  </div>
  <div class="tab-pane mt-3" id="messages" role="tabpanel" aria-labelledby="messages-tab">
      <small><b>December</b></small>
      <div class="row">
          <div class="col"><small>Sun,Dec 12, 2021</small></div>
          <div class="col"><small><strong>$270</strong></small></div>
          <div class="col"><small><a href="booking.php">SELECT DATE <i class="fas fa-chevron-right"></i></a></small></div>
      </div>
  </div>
  <div class="tab-pane mt-3" id="settings" role="tabpanel" aria-labelledby="settings-tab">
      <small><b>December</b></small>
      <div class="row">
          <div class="col"><small>Sun,Dec 12, 2021</small></div>
          <div class="col"><small><strong>$270</strong></small></div>
          <div class="col"><small><a href="booking.php">SELECT DATE <i class="fas fa-chevron-right"></i></a></small></div>
      </div>
  </div>
</div>

<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>
                   <!-- View pricing category -->
            </div>
        </div>
     </ul>

        <div class="overlay"></div>
    </nav>
    <!-- Side Navbar End -->
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                    <img src="assets/image/cruise/adventure.jpg" height="260px;" width="350px;">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <p class="text-primary h4">3 NIGHTS</p>
                        <p class="text-primary" style="font-size:25px;">Ensenada Cruise</p>
                         <span>LEAVING FROM:</span>
                          <span>Los Angles, California, Onboard Navigator of the Seas</span><br>
                           <span >VISITING:</span>
                          <span class="px-3">Los Angles, California, | Cruising | Ensenadam Mexico | Los Angels, California</span>
                    </div>
                    <!-- mobile display -->
                    <div class="col-sm design2">
                        <a href="">VIEW 49 DATES</a>
                    </div>
                    <!-- mobile display -->
                    <div class="design1" style="width: 169px;" id="navbarSideButton">
                        <div class="text-right outer__button button__right-left text-right">
                            <small><span class="text-info">From</span><span class="text-muted">USD</span></small>
                             <span class="txt"><span class="dollar">$</span>101</span>
                              <small>AVG Per person</small><br>
                           <small>
                               Valid for departure on Dec 13,2021
                           </small>
                       <p>VIEW 49 DATES</p>
                       <small>+taxes, fees and port expenses $97.94 USA*</small>
                        </div>
                    </div>
                    <div class=" text-right outer__button button__right-lefts arrow">
                        <b><i class="fas fa-chevron-right align"></i></b>
                    </div>
                    </div>          
                </div>
            </div>
            <div class="line"></div>

            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                    <img src="assets/image/cruise/adventure2.jpg" height="260px;">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <h3 class="text-primary">3 NIGHTS</h3>
                         <h4 class="text-primary">Ensenada Cruise</h4><br>
                         <span >LEAVING FROM:</span>
                          <span class="px-3">Los Angles, California, Onboard Navigator of the Seas</span><br><br>
                           <span >VISITING:</span>
                          <span class="px-3">Los Angles, California, | Cruising | Ensenadam Mexico | Los Angels, California</span>
                    </div>
                    <!-- mobile display -->
                    <div class="col-sm design2">
                        <a href="">VIEW 49 DATES</a>
                    </div>
                    <!-- mobile display -->
                    <div class="design1" style="width: 160px;" id="navbarSideButton">
                        <div class="text-right outer__button button__right-left text-right">
                            <small><span class="text-info">From</span><span class="text-muted">USD</span></small>
                             <span class="txt"><span class="dollar">$</span>101</span>
                              <small>AVG Per person</small><br>
                           <small>
                               Valid for departure on Dec 13,2021
                           </small>
                       <p>VIEW 49 DATES</p>
                       <small>+taxes, fees and port expenses $97.94 USA*</small>
                        </div>
                    </div>
                    <div class=" text-right outer__button button__right-lefts arrow">
                        <b><i class="fas fa-chevron-right align"></i></b>
                    </div>
                    </div>
                </div>            
                </div>
            </div>
            <div class="line"></div>

            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                    <img src="assets/image/cruise/adventure1.jpg" height="260px;" width="350px;">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <h3 class="text-primary">3 NIGHTS</h3>
                         <h4 class="text-primary">Ensenada Cruise</h4><br>
                         <span >LEAVING FROM:</span>
                          <span class="px-3">Los Angles, California, Onboard Navigator of the Seas</span><br><br>
                           <span >VISITING:</span>
                          <span class="px-3">Los Angles, California, | Cruising | Ensenadam Mexico | Los Angels, California</span>
                    </div>
                    <!-- mobile display -->
                    <div class="col-sm design2">
                        <a href="">VIEW 49 DATES</a>
                    </div>
                    <!-- mobile display -->
                    <div class="design1" style="width: 160px;" id="navbarSideButton">
                        <div class="text-right outer__button button__right-left text-right">
                            <small><span class="text-info">From</span><span class="text-muted">USD</span></small>
                             <span class="txt"><span class="dollar">$</span>101</span>
                              <small>AVG Per person</small><br>
                           <small>
                               Valid for departure on Dec 13,2021
                           </small>
                       <p>VIEW 49 DATES</p>
                       <small>+taxes, fees and port expenses $97.94 USA*</small>
                        </div>
                    </div>
                    <div class=" text-right outer__button button__right-lefts arrow">
                        <b><i class="fas fa-chevron-right align"></i></b>
                    </div>
                    </div>
                </div>            
                </div>
            </div>
            <div class="line"></div>

            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                    <img src="assets/image/cruise/caribbean.jpg" height="260px;" width="350px">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <h3 class="text-primary">3 NIGHTS</h3>
                         <h4 class="text-primary">Ensenada Cruise</h4><br>
                         <span >LEAVING FROM:</span>
                          <span class="px-3">Los Angles, California, Onboard Navigator of the Seas</span><br><br>
                           <span >VISITING:</span>
                          <span class="px-3">Los Angles, California, | Cruising | Ensenadam Mexico | Los Angels, California</span>
                    </div>
                    <!-- mobile display -->
                    <div class="col-sm design2">
                        <a href="">VIEW 49 DATES</a>
                    </div>
                    <!-- mobile display -->
                    <div class="design1" style="width: 160px;" id="navbarSideButton">
                        <div class="text-right outer__button button__right-left text-right">
                            <small><span class="text-info">From</span><span class="text-muted">USD</span></small>
                             <span class="txt"><span class="dollar">$</span>101</span>
                              <small>AVG Per person</small><br>
                           <small>
                               Valid for departure on Dec 13,2021
                           </small>
                       <p>VIEW 49 DATES</p>
                       <small>+taxes, fees and port expenses $97.94 USA*</small>
                        </div>
                    </div>
                    <div class=" text-right outer__button button__right-lefts arrow">
                        <b><i class="fas fa-chevron-right align"></i></b>
                    </div>
                    </div>
                </div>            
                </div>
            </div>
                 <div class="line"></div>
                 <div class="text-center mb-3">
                     <button class="btn btn-outline-warning">See More</button>
                 </div>
        </div>
    </div>

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

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // Side navbar//
        $(document).ready(function() {

  $('#navbarSideButton').on('click', function() {
    $('#navbarSide').addClass('reveal');
    $('.overlay').show();
  });

  $('.overlay').on('click', function(){
    $('#navbarSide').removeClass('reveal');
    $('.overlay').hide();
  });

});

    </script>
</body>
</html>