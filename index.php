<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="TemplateMo">

        <title>Vimal Sharma</title>

        <!-- CSS FILES -->

         <style>

.container {
  width: 100%;
  
 
}
#skillhead{
    display: flex;
    justify-content: center;
    color: black;
    text-shadow: #d037b4;
    margin-bottom: 20px;
}
.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: 90%; background-color: #04AA6D; margin-bottom: 10px;}
.css {width: 80%; background-color: #2196F3; margin-bottom: 10px;}
.js {width: 65%; background-color: #f44336; margin-bottom: 10px;}
.php {width: 60%; background-color: #808080; margin-bottom: 10px;}
.react{width: 75%; background-color: #22d32e; margin-bottom: 10px;}
.java{width: 65%; background-color: #c5c02c; margin-bottom: 10px;}
.git{width: 70%; background-color: #d9b139; margin-bottom: 10px;}
.bootstrap{width: 70%; background-color: #15d121; margin-bottom: 10px;}
.dsa{width: 65%; background-color: #d037b4; margin-bottom: 10px;}

/* form styles */


.form {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 500px;
  padding: 20px;
  width: 320px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
   outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}



/* form style end */

         </style>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
        
<!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="index.html" class="navbar-brand mx-auto mx-lg-0">Vimal Sharma</a>

                <div class="d-flex align-items-center d-lg-none">
                    <i class="navbar-icon bi-telephone-plus me-3"></i>
                    <a class="custom-btn btn" href="#section_5">
                        7088434331
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Skills</a>
                        </li>
                    </ul>

                    <div class="d-lg-flex align-items-center d-none ms-auto">
                        <i class="navbar-icon bi-telephone-plus me-3"></i>
                        <a class="custom-btn btn" href="#section_5">
                            7088434331
                        </a>
                    </div>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex align-items-center mb-4">
                                    <img src="images/vimal1.jpg" class="avatar-image avatar-image-large img-fluid" alt="">

                                    <h1 class="hero-title ms-3 mb-0">Hello friend!</h1>
                                </div>

                                <h2 class="mb-4">I’m available for  Job  /  freelance work.</h2>
                                <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_7">Hire Me</a></p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 position-relative">
                            <div class="hero-image-wrap"></div>
                            <img src="images/portrait-happy-excited-man-holding-laptop-computer.png" class="hero-image img-fluid" alt="">
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>


            <!-- <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="images/couple-working-from-home-together-sofa.jpg" class="about-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                    <h2 class="text-white me-4 mb-0">My Story</h2>

                                    <img src="images/vimal1.jpg" class="avatar-image img-fluid" alt="">
                                </div>

                                 <h3 class="pt-2 mb-3">a little bit about Joshua</h3>

                                <p>This My portfolio is provided by <a href="https://templatemo.com" target="_blank">TemplateMo</a>. This layout is based on Bootstrap v5.1.3 CSS and JS libraries. Image credits go to <a href="https://unsplash.com" target="_blank">Unsplash</a> and <a href="https://freepik.com" target="_blank">FreePik</a> for images used in this page.</p>

                                <p>You are allowed to use this template for your websites. You are not allowed to redistribute the template ZIP file on any other website. Please <a href="https://templatemo.com/contact" target="_blank">contact us</a> for more info.</p> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section> -->
             <!-- Resume -->
            <div   style="display: flex; justify-content: center;"><h4 > See My Resume to Click Below</h4></div>
            <a    class="custom-btn btn custom-link" href="https://drive.google.com/file/d/1jnCCjfLtxoz_7PHnUfGjyJhA8zfkYqzf/view?usp=sharing"  style="margin-top: 20px; justify-content: center; margin-left: 48%; background-color: #22d32e;" > Resume</a>
          <!-- Resume end -->
                        <section class="projects section-padding" id="section_4">
                            <div class="container">
                                <div class="row">
            
                                    <div class="col-lg-8 col-md-8 col-12 ms-auto">
                                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                            <img src="images/white-desk-work-study-aesthetics.jpg" class="avatar-image img-fluid" alt="">
            
                                            <h2 class="text-white ms-4 mb-0">Projects</h2>
                                            <h5  style="margin-left: 30px; color: #d32222;"> Click on the Project Name to See Projects</h5>
                                        </div>
                                    </div>
            
                                    <div class="clearfix"></div>
            
                                    
            
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="projects-thumb">
                                            <div class="projects-info">
                                                <small class="projects-tag">My Own Youtube</small>
            
                                                <a href="https://vimalsharma07.github.io/March-22-web-Fundamentals/May/Youtube/Video%20Buddy%20project/index.html"><h3 class="projects-title">VideoBuddy</h3</a>
                                            </div>
            
                                            <a href="images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="popup-image">
                                                <img src="images/videobuddy.png" class="projects-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <a href="https://vimalsharma07.github.io/codeguys/">
                                        <div class="projects-thumb">
                                            <div class="projects-info">
                                                <small class="projects-tag"> Education Website</small>
            
                                                <h3 class="projects-title">CodeGuys</h3>
                                            </div>
            
                                            <a href="images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="popup-image">
                                                <img src="images/codeguys.jpg" class="projects-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </a>
                                    </div>
                                     
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="projects-thumb">
                                            <div class="projects-info">
                                                <small class="projects-tag">  Simple VideoGame</small>
            
                                                <a href="https://vimalsharma07.github.io/March-22-web-Fundamentals/Red%20Light%20Game/Index.html"><h3 class="projects-title">Video Game</h3></a>
                                            </div>
            
                                            <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                                                <img src="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="projects-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    


                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="projects-thumb">
                                            <div class="projects-info">
                                                <small class="projects-tag">  Ludo type Game</small>
            
                                                <a href="https://graceful-stardust-326a63.netlify.app/"><h3 class="projects-title">Dice Game</h3></a>
                                            </div>
            
                                            <a href="images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                                                <img src="images/shutterstock_1570380790.webp" class="projects-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
            
            
                                </div>
                            </div>
                        </section>














                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <strong class="featured-numbers">1+</strong>

                                        <p class="featured-text">Years of Experiences</p>
                                    </div>

                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <strong class="featured-numbers">10+</strong>

                                        <p class="featured-text">Happy Customers</p>
                                    </div>

                                    <div class="col-lg-6 col-6 pt-4">
                                        <strong class="featured-numbers">10+</strong>

                                        <p class="featured-text">Project Finished</p>
                                    </div>

                                    <!-- <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <strong class="featured-numbers">72+</strong>

                                        <p class="featured-text">Digital Awards</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- <section class="clients section-padding">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-12">
                            <h3 class="text-center mb-5">Companies I've had worked</h3>
                        </div>

                        <div class="col-lg-2 col-4 ms-auto clients-item-height">
                            <img src="images/clients/cachet.svg" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="images/clients/guitar-center.svg" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="images/clients/tokico.svg" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 clients-item-height">
                            <img src="images/clients/shopify.svg" class="clients-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-2 col-4 me-auto clients-item-height">
                            <img src="images/clients/profil-rejser.svg" class="clients-image img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </section> -->


            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="images/handshake-man-woman-after-signing-business-contract-closeup.jpg" class="avatar-image img-fluid" alt="">

                                <h2 class="text-white ms-4 mb-0">Services</h2>
                            </div>

                            <div class="row pt-lg-5">
                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Websites</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">5999</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>We will build Website your Bussiness and make your Bussiness Live </p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-globe"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Education </h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">1000/hour</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>I am a freelancer and i can help to complete your Project it will be chargble if I am not able to Help You I will Charge Nothing </p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-lightbulb"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Ecommerce Website</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0">Depend on the requirement</p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>

                                        <p>If you need a customized ecommerce website for your business, feel free to discuss with me.</p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-phone"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb services-thumb-up">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0">Freelancing</h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0"> </p>
                                                <div class="services-price-overlay"> Not Specified</div>
                                            </div>
                                        </div>

                                        <p>I am a Freelancer and Till Now ihave worked on Many web techonologies Front end And Backend Both 
                                            In FrontEnd I have work on HTML,CSS, JS, React JS and In BackEnd I have Worked on JAVA and Php And Database I use MYSQL
                                        </p>

                                        <a href="#" class="custom-btn custom-border-btn btn mt-3">Discover More</a>

                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon bi-google"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            
             
            <div class="skills">
         <div  id="skillhead"> <h2 style="color: black;"> My Skills</h2> </div>      


<div class="container"  id="section_6">
    
  <div class="skills html">  HTML 90%</div>
</div>


<div class="container">
  <div class="skills css">  CSS 80%</div>
</div>


<div class="container">
    <div class="skills react">  React JS 70%</div>
  </div>

  <div class="container">
    <div class="skills git">  Git 70%</div>
  </div>


  <div class="container">
    <div class="skills bootstrap">  Bootstrap 70%</div>
  </div>

  <div class="container">
    <div class="skills dsa">   Data Structure and Algothims  65%</div>
  </div>
          

<div class="container">
  <div class="skills js"> JavaScript 65%</div>
</div>


<div class="container">
  <div class="skills php">  PHP 60%</div>
</div>




  <div class="container">
    <div class="skills java">  Java</div>
  </div>

  

  

    </div>



    <div class="formcontainer"  style="display: flex; justify-content: center; margin-top: 50px;" id="section_7">
   
   <form action="index.php"   method="post">
    <div class="form" >
        <div class="title">Welcome</div>
        <div class="subtitle">Please Fill this form to Hire me</div>
        <div class="input-container ic1">
          <input id="firstname" class="input" type="text" placeholder="Enter Company Name " name="company"  required/>
          
        </div>
        <div class="input-container ic2">
          <input id="lastname" class="input" type="text" placeholder=" Role "  name="role " required /></div>
          
        <div class="input-container ic2">
            <input id="lastname" class="input" type="text" placeholder=" Location "  name="location"  required /></div>
            
        <div class="input-container ic2">
          <input id="email" class="input" type="phone" placeholder="Phone number "   name="phonenumber"  required/></div>
          
        <input type="submit" class="submit" name ="submit"></input>
      </div>
      </form>
    </div>

            <section class="contact section-padding" id="section_5">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-md-8 col-12">
                                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                    <img src="images/aerial-view-man-using-computer-laptop-wooden-table.jpg" class="avatar-image img-fluid" alt="">

                                    <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                                <div class="contact-info contact-info-border-start d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">Services</strong>

                                    <ul class="footer-menu">
                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Websites</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Branding</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Ecommerce</a></li>

                                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">SEO</a></li>
                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                                    <ul class="social-icon">
                                        <li class="social-icon-item"><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>

                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                                        <li class="social-icon-item"><a href="https://www.youtube.com/templatemo" class="social-icon-link bi-youtube"></a></li>
                                    </ul>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                                    <p class="mb-0">I’m available for freelance projects</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                                <div class="contact-info d-flex flex-column">
                                    <strong class="site-footer-title d-block mb-3">About</strong>

                                    <p class="mb-2">
                                        Vimal is a professional web developer. Feel free to get in touch with me.
                              </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                                    <p>
                                        <a href="mailto:hello@josh.design">
                                            vimalsharma0753@gmail.com
                                        </a>
                                    </p>

                                    <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                                    <p class="mb-0">
                                        <a href="tel: 120-240-9600">
                                            7088434331
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                                <form action="index.php" method="post" class="custom-form contact-form" role="form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                                
                                                <label for="floatingInput">Name</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12"> 
                                            <div class="form-floating">
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                                
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">

                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    <i class="bi-globe form-check-icon"></i>
                                                    <span class="form-check-label-text">Websites</span>
                                                </label>
                                          </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">

                                                <label class="form-check-label" for="inlineCheckbox2">
                                                    <i class="bi-lightbulb form-check-icon"></i>
                                                    <span class="form-check-label-text">Education</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline">
                                                <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">

                                                <label class="form-check-label" for="inlineCheckbox3">
                                                    <i class="bi-phone form-check-icon"></i>
                                                    <span class="form-check-label-text">Ecommerce</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="form-check form-check-inline me-0">
                                                <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">

                                                <label class="form-check-label" for="inlineCheckbox4">
                                                    <i class="bi-google form-check-icon"></i>
                                                    <span class="form-check-label-text">Freelancing</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                                
                                                <label for="floatingTextarea">Tell me about the project</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-12 ms-auto">
                                            <input type="submit" class="form-control"></input>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">Copyright © 2036 <a href="#">First Portfolio</a> Company. All rights reserved.</span>
                                Design: 
                                <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer> -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/custom.js"></script>




    <!-- Php work start here -->
     
     <!-- Hire Form Work Here  -->
    <?php

   include('dbcon.php');

    if(isset($_POST['submit'])){
    $company= $_POST['company'];
    $role= $_POST['role'];
    $location= $_POST['location'];
    $phonenumber= $_POST['phonenumber'];

    $qry= "INSERT INTO `hire`( `company`, `role`, `location`, `phonenumber`) VALUES ('$company','$role','$location','$phonenumber')";
    
    
    if($company="" || $role=""|| $location=""|| $phonenumber=""){
    ?>
    <script>
    alert("Please Fill All the Fildes Givien in Form");
    </script>

   <?php
    }else{
        $run= mysqli_query($con, $qry);

        if($run){
            ?>
            <script>
                alert("Filled Successfully I will Connect You EOD");
            </script>
    
            <?php
        }
    }
    
}


?>
    <!-- Hire Form Work End Here -->


    
    </body>
</html>