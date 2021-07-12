<?php
session_start();
 include('signupmodel.php');
 include('loginmodel.php');
 
 

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>vps-virtual police station</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     
   <style>
     .hindi{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius:20px;
     }
     .english{
         margin-left:150px;
         border-radius:20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     }
    
   </style>


    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"><img src="./assets/images/mp-police-logo.jpg" height="70px" width="100px" alt=""><em></em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="#our-classes">Classes</a></li>
                          <!--  <li class="scroll-to-section"><a href="#schedule">Schedules</a></li>
                            -->
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> 
                            <?php 
                              if(isset($_SESSION['email'])){

                              ?>
                              
                            
                              <li class="main-button"><a href="userdashboard.php" style="padding-top:1px;" data-target="">Dashboard</a></li>
                            <?php
                              }
                              else{
                                  ?>
                                  <li class="main-button"><a href="#" data-toggle="modal" data-target="#signupmodel" style="padding-top:1px;" >Signup</a></li>
                                <?php 
                              }
                            ?>

                             <!-- login-->
                             <?php 
                              if(isset($_SESSION['email'])){

                              ?>
                              
                            
                                <li class="main-button"><a  style="padding-top:0px;" href="logout.php"  data-target="">logout</a></li>
                            <?php
                              }
                              else{
                                  ?>
                                  <li class="main-button"><a href="#"  style="padding-top:0px;" data-toggle="modal" data-target="#loginmodel">Login</a></li>
                                <?php 
                              }
                            ?>
                            
                            <li ><a class="btn btn-success" style="background-color:green;color:white;" target="_blank" href="admin_login_page.php">Admin</a></li>
                            
                         </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
      <video autoplay muted loop id="bg-video">
              <!---<source src="assets/images/gym-video.mp4" type="video/mp4" />
           -->
        </video> 
        
        

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>CRIME FREE INDIA</h6>
                <h2 >Virtual police station <em> <br> VPS</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="signUp.php" class="btn btn-success" style="background-color:rgb(8, 99, 15);">File-FIR</a>
                </div>
            </div>S
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
     <div class="container">
        <div class="row">
           <div class="col-lg-5  hindi mt-5">
              <center><h4 style="color:#ed563b;">Sample FIR Format in Hindi </h4> <br>
               <a href="assets/images/hindi-sample.jpg"  target="_blank"><button class="btn btn-info "> View Sample</button></a>
               </center> 
           </div>
           <div class="col-lg-5 english mt-5">
              <center><h4 style=" color:#ed563b;">Sample FIR Format in English </h4> <br>
               <a href="assets/images/english -sample.jpg"  target="_blank"><button class="btn btn-info "> View Sample</button></a>
               </center> 
           
           
           </div>
        
        </div>
     
     
     
     </div>

       

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/police-badge.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Lodge E-FIR</h4>
                                <p>This process consists of 3 stages i.e. complainant's detail, witness's detail,and event's description. </p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/police-file1.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Check all details of E-FIR</h4>
                                <p>You can check the information that you have filled in the form in this section.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/police-identification.png" alt="third gym training">
                            </div>
                            <div class="right-content">
                                <h4> Check E-FIR status online using E-FIR ID </h4>
                                <p>Get the current status of the fir lodged by the complainant.</p>
                                <a href="#" style="margin-left:130px;" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/police-car.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4> Get support online 24/7 via call center </h4>
                                <p>Any time support for any queries and emergency response through call</p>
                                <a href="#" style="margin-left:130px;" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/police-file.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4> Get copy of E-FIR </h4>
                                <p>Get fir receipt with all the details mentioned while filling the form.</p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/sand-clock.png" alt="gym training">
                            </div>
                            <div class="right-content">
                                <h4>Track your progress on investigation</h4>
                                <p>Track the progress status of the  through the user dasboard</p>
                                <a href="#" style="margin-left:130px;" class="text-button">Discover More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don’t <em>think</em>, begin <em>today</em>!</h2>
                        <p>My heroes are those who risk their lives every day to protect our world and make it a better place. </p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">Virtual Police Station</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Online FIR</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Fast Investigation</a></a></li>
                 
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/background.jpg" alt="First Class">
                    <h4>Virtual Police Station</h4>
                    <p>The concept of a virtual police station was initially proposed by AU vice-chancellor Prasad Reddy during the launch of Mahila Mitras in August. After DGP Gautam Sawang agreed to the idea, it was proposed that the initiative will be launched in all universities. </p>
                    <div class="main-button">
                        
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/FIR.jpg" alt="Second Training">
                    <h4>Online FIR</h4>
                    <p>FIR in simple words is First Information Report. ... In simple words, it is a complaint lodged with the police by the victim of a cognizable offence or by someone on his or her behalf, but anyone can make such a report either orally or in writing to the police. People can also lodge an FIR through online medium.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/sm10.jpg" alt="Third Class">
                    <h4>Fast Investigation</h4>
                    <p>In order to maintain a legal system in a huge country like India, the constitution had laid down the foundation of system of Law. As against Indian army and other paramilitary forces, our police force is mainly responsible for maintaining internal peace and security of the country. But everyone is reluctant in visiting the police station in our country. The reason behind this behavior is that people are not aware of the working procedure of police generally.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                 
                  
                </section>
              </div>
            </div>
        </div>
    </section>
<!-- ***** Our Classes End ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Some Of The <em>Best Police Officer </em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/ajit.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>FORMAL IPS OFFICER</span>
                            <h4>Ajit Kumar Doval</h4>
                            <p>National Security Advisor to the Prime Minister of India</p> <br> <br>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/kiran bedi.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>FORMAL IPS OFFICER</span>
                            <h4>Kiran Bedi</h4>
                            <p>Kiran Bedi (born 9 June 1949) is a retired Indian Police Service officer</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/K.webp" alt="">
                        </div>
                        <div class="down-content">
                            <span>FORMAL IPS OFFICER</span>
                            <h4> K. Vijay Kumar</h4>
                            <p> He was the chief of the Special Task Force of Tamil Nadu</p> <br> <br>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="656px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                  
                    <div class="contact-form">
                       <center><h2 style="color:white;margin-bottom:10px;">Feedback/Query</h2></center>
                        <form id="contact" action="contactscript.php" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer style="background-color:#232d39;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <p style="color:white;"> Copyright &copy; 2021 </p>
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>