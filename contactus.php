<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>CCRAC| Customer Care Rent A Car</title>
  <link rel="stylesheet" href="./Bootstrape/bootstrap.css" />
  <link rel="stylesheet" href="./Bootstrape/bootstrap.min.css" />
  <link rel="stylesheet" href="./CS/main.css" />
  <link rel="icon" type="image/png" sizes="180x180" href="./img/fav-icon.ico">
</head>

<body>
  <!--
      ============
       main navbar start
    ===========
  -->

  <section id="main-nav ">
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a href="index.html" class="navbar-brand"><img src="./img/cclogo.png" height="40px" width="140px" alt="rent a car without driver in Islamabad" /></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar">
          <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link active">Home</a>
            </li>

             <li class="nav-item">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>

            <li class="nav-item ">
              <a href="service.php" class="nav-link ">Service</a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link">Contact Us</a>
            </li>
          </ul>
          
            <a href="https://www.facebook.com//CCRENTACARS/" class="fa-brands fa-facebook-f mr-2 float-right text-info"></a>
          <a href="https://www.twitter.com/ccrentacars?s=09" class="fa-brands fa-twitter mr-2 float-right text-success"></a>
          <a href="https://www.instagram.com/ccrentacars" class="fa-brands fa-instagram-square mr-2 float-right text-warning"></a>
           <a href="https://www.youtube.com/channel/UC-f7g8vlxUhMVXzkbAUL2Ag" class="fa-brands fa-youtube mr-2 float-right text-danger"></a>
          
        </div>
      </nav>
    </div>

    <section id="contact">
      <div class="row text-center">
        <div class="col">
          <div class="content ">
            <h2 class="pt-3">CUSTOMER CARE RENT A CAR OPEN <span class="blink">24/7</span> </h2>
            <h2 class="text-success blink">+92 347 8435080</h2>
            <h2 class="text-warning blink"></h2>
          </div>
        </div>
      </div>
      <!-- form for contact -->
      <div class="container">
        <div class="row">
          <div class="col-lg-5 ">
            <div class="card shadow-lg mt-4 mb-3">
              <div class="row py-2">
                <div class="col-4">
                  <div class="col-4 "><img width="80px" src="./img/cclogo.png" alt="car rental"></div>
                </div>
                <div class="col-4 offset-4"> <a href="https://www.facebook.com/CCRENTACARS/"
                    class="fa-brands fa-facebook"></a> <a href="https://www.instagram.com/ccrentacars"
                    class="fa-brands fa-instagram"></a> <a href="https://www.twitter.com/ccrentacars?s=09"
                    class="fa-brands fa-twitter"></a> <a href="https://www.youtube.com/channel/UC-f7g8vlxUhMVXzkbAUL2Ag"
                    class="fa-brands fa-youtube"></a></div>
              </div>
              <div class="col text-center">
                <h1><b class="text-warning">Reserve Now!!!</b></h1>
              </div>
              <form class=" text-align-center pb-2 pt-2 px-4 px-lg-3 px-md-3" action="savedata.php" method="post">
                <div class="form-group">
                  <label for="name"> <i class="fa-solid fa-file-signature fa-2x"></i> Enter Your Name</label><br>
                  <input class="w-100" type="text" id="name" name="name" placeholder="Enter Name Here">
                </div>
                <div class="form-group">
                  <label for="phone"> <i class="fa-solid fa-mobile-button  fa-2x"></i> Contact Number</label><br>
                  <input class="w-100" type="phone" id="phone" name="phone" placeholder="Enter your Number Here">
                </div>
                <div class="form-group justify-content-center">
                  <label for="plocation"> <i class="fa-solid fa-magnifying-glass-location  fa-2x"></i> Pik Up
                    Location</label><br>
                  <input class="w-100" type="plocation" id="plocation" name="plocation"
                    placeholder="Enter your pickUp location Here">
                </div>
                <div class="form-group">
                  <label for="dlocation"> <i class="fa-solid fa-street-view  fa-2x"></i> droop off Location</label><br>
                  <input class="w-100" type="dlocation" id="dlocation" name="dlocation"
                    placeholder="Enter your droopoff location Here">
                </div>
                <div class="form-group">
                  <label for="time"> <i class="fa-solid fa-clock  fa-2x"></i> pick Up Time</label><br>
                  <input class="w-100" type="time" id="time" name="time" placeholder="Enter pick Up Time with PM $ AM">
                </div>
                
                 <div class="form-group">
                  <label for="car"> <i class="fa-solid fa-car  fa-2x"></i> pick Choice Car</label><br>
                 <select name="car" class="w-100">
                     <option value="" selected disabled>Select Car</option>
                     <option value="XLI">Toyota Corolla XLI</option>
                     <option value="GLI">Toyota Corolla GLI</option>
                     <option value="Yaris">Toyota Yaris</option>
                     <option value="City">Honda City</option>
                 </select>
                </div>

                <button class="btn btn-warning" type="submit">Submit</button>

                <div class="row">
                  <div class="col-11 offset-1">
                    <p class="lead text-primary text-end"> <a
                        href="https://api.whatsapp.com/send?phone=+923474774248&text=Hello..." target="_blank"> Contact
                        Us For Urgent action</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-7 mt-5">
            <h2 class="text-white">BOOK NOW ACCORDING TO YOUR CHOICE</h2>
            <div class="row pt-4 pb-3">
              <div class="col">
                <i class="fa-solid fa-house-user fa-2x"></i>
                <p class="lead"> City Capital Territorty of pakistan ISLAMABAD >>> office#1 2nd Floor Gondal Plaza F10
                  Markaz Islamabad for self Drive Car Please Visit Our office for fullfill the Requierments. Self Drive
                  Cars only Available in Islamabad... </p>
                <hr class="text-white">
              </div>
            </div>
            <div class="row pb-5">
              <div class="col">
                <i class="fa-solid fa-square-phone fa-2x"></i>
                <p class="lead"> Contact Us for More Details and Also for Urgent Need Cars within 10 Minutes. When you
                  submit the form your Booking are Reserved and I contact you within tow Minutes... >>> 0347-8435080 >>>
                  +92302-1826040</p>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <i class="fa-solid fa-at fa-2x"></i>
                <p class="lead">CO-FOUNDER Of Customer Care Rent A Car Email >>>> rrehanaamir@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   <a href="https://api.whatsapp.com/send?phone=+923021826040&text=Hello Sir I nead a Car for Rent Please Contact me..."
    target="_blank">
    <i><img src="img/whatsaap.png" alt="top 10 rent a car in lahore" class="float"/></i>
  </a>


  <a class="float1 bg-transparent" href="tel:+923478435080"><img src="./img/call2.png" width="50px" /></a>

    <footer>
    <div class="container">
      <div class="row pt-5 pb-2">
        <div class="col-md-4">
          <img src="./img/cclogo.png" height="50px" alt="" />
          <h4 class="mt-2 font-weight-bold">
            Customer Care <span class="logo-color"> Rent A Car</span>
          </h4>
          <p class="text-dark">
            "Best oppertunities for our Respectable Customer. i've very
            coprative with passenger..."
          </p>
          <a href="https://api.whatsapp.com/send?phone=+923478435080&text=" Hello Sir I nead a Car for Rent Please Contact me." target="_blank"" class="btn float-right font-weight-bold text-uppercase" style="
                background-color: #192a56;
                color: whitesmoke;
                padding: 8px 20px;
              ">Contact Us</a>
        </div>
        <div class="col-md-4">
          <h5 class="font-weight-bold">CONTACT DETAIL:</h5>
          <p class="text-dark">
            <i class="fa-solid fa-map-location-dot"></i> office# Islamabad F10
            Markaz ....
          </p>
          <p class="text-dark">
            <i class="fa-solid fa-phone"></i> Mobile:0347-8435080
          </p>
          <p class="text-dark">
            <i class="fa-brands fa-whatsapp"></i> Whatsaap:0347-8435080
          </p>
          <p class="text-dark">
            <i class="fa-solid fa-envelope"></i> Mail:rrehanaamir@gmail.com
          </p>
        </div>
        <div class="col-md-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.993838527117!2d73.05389401513159!3d33.709108343181796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfbba767047b%3A0x47ee179b8207ceee!2sGondal%20Plaza!5e0!3m2!1sen!2s!4v1644437138651!5m2!1sen!2s"
            width="auto" style="border: 2px" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <hr />
    </div>
    <div class="mainfooter text-dark pl-5" style="padding: 15px 0px; background: rgb(204, 201, 201)">
      <div class="row">
        <div class="col-8">&copy; Copyright 2022www.gospare.com</div>
        <div class="col-4">
          <a href="https://www.facebook.com//CCRENTACARS/" class="fa-brands fa-facebook-f mr-2 float-right"></a>
          <a href="https://www.twitter.com/ccrentacars?s=09" class="fa-brands fa-twitter mr-2 float-right"></a>
          <a href="https://www.instagram.com/ccrentacars" class="fa-brands fa-instagram-square mr-2 float-right"></a>
           <a href="https://www.youtube.com/channel/UC-f7g8vlxUhMVXzkbAUL2Ag" class="fa-brands fa-youtube mr-2 float-right"></a>
        </div>
      </div>
    </div>
  </footer>

  <!--
      ============
       export local comerical services end 
    ===========
  -->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- <script src="/Bootstrape js/bootstrap.js"></script>
<script src="/Bootstrape js/bootstrap.min.js"></script> -->

</html>