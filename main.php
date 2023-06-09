<?php
session_start();

// Check if the user has passed the reCAPTCHA verification
if (!isset($_SESSION['friendlycaptcha_passed']) || $_SESSION['friendlycaptcha_passed'] !== true) {
    // Redirect back to the landing page if not verified
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>John Michael Gonzales Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="WEBPROG" name="keywords">
    <meta content="Portfolio" name="description">
    <meta name="author" content="John Michael Gonzales">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta name="duckduckgo" content="index, follow">
    <!-- Favicon -->
    <link href="img/mylogo.png" rel="icon" type = "image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">JM</span>Gonzales</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                <a href="#testimonial" class="nav-item nav-link">Review</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="https://www.linkedin.com/in/jmazingonzales/" class="btn btn-menu d-none d-lg-block" style="background-color:#0027a8; color: #ffffff;">Hire Me</a>
        </div>
    </nav>
    <!-- Navbar End -->

 
    

    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">              
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hi, I am</h3>
                    <h1 class="display-3 text-uppercase text-primary mt-3 mb-3" style="-webkit-text-stroke: 4px #ffffff;">John Michael Gonzales</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Web Developer, Front End Developer, App Developer, Leadership, Hosting</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="https://www.linkedin.com/in/jmazingonzales/" class="btn btn-white d-none d-sm-block mr-2">Download My CV</a>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-blue d-none d-sm-block">Play the Video</a>
                    </div>
                </div>
                <div class="col-lg-6 px-8 pl-lg-0 pt-1 pb-lg-4 about-img">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/profile.png" alt="me">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="img/about.png" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Leader, Programmer, UI/UX Designer, Web Developer, Host</h3>
                    <p>Experience a user-centric development under my watch</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">John Michael Gonzales</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">8 December 2002</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">Undergraduate</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">2 Years</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">0928*******</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">jdgonzales2@student.apc.edu.ph</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">Western Bicutan, Taguig City</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">Available</span></h6></div>
                    </div>
                    <a href="https://www.linkedin.com/in/jmazingonzales/" class="btn blue btn-outline-primary mr-4">Hire Me</a>
                    <a href="https://www.linkedin.com/in/jmazingonzales/" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">69%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Javascript</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Sass</h6>
                            <h6 class="font-weight-bold">20%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Wordpress</h6>
                            <h6 class="font-weight-bold">10%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->




    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Bachelor of Science In Computer Science</h5>
                            <p class="mb-2"><strong>Asia Pacific College</strong> | <small>2021 - 2025</small></p>
                            <p>Technology is more than just a hobby for me; it is a passion that motivates me to learn and grow. I am fascinated by the endless possibilities and challenges that technology offers, and I want to pursue a career in computer science that allows me to apply my skills and creativity to real-world problems. I am always eager to explore new technologies and learn from experts in the field. I am also a team player who can collaborate effectively with others and contribute positively to any project. I believe that my enthusiasm and drive for technology make me a unique and valuable candidate for any opportunity.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">High School (Junior & Senior)</h5>
                            <p class="mb-2"><strong>Pasay City South High School</strong> | <small>2015 - 2021</small></p>
                            <p>I enjoy learning about how things work and how to solve problems using logic and creativity. I like to read books and articles about various topics such as astronomy, robotics, artificial intelligence, and biotechnology. I also like to experiment with different tools and gadgets, such as Arduino and Raspberry Pi. My dream is to become a computer scientist who can make a positive impact on the world with my inventions and discoveries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Android App Development (News App)</h5>
                            <p class="mb-2"><strong>INPROLA</strong> | <small>Great</small></p>
                            <p>A News App that focuses on giving unbiased and reliable news sources.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Machine Learning</h5>
                            <p class="mb-2"><strong>MODESIM</strong> | <small> Good</small></p>
                            <p>Currently Working on a model that can efficiently and reliably detect scam and spam emails.</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Development</h5>
                            <p class="mb-2"><strong>WEBPROG</strong> | <small>????</small></p>
                            <p>Hint: You are using it right now &#x1F609</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->



    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
            </div>
            <div class="row pb-3">
                <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Web Design</h4>
                    </div>
                    <p>I can help design your dream website! With a strong sense of nonsense I can definitely assure you that I can help you.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Development</h4>
                    </div>
                    <p>Developing whether its an app or a big project, I can certainly be up to the task! A plethora of programming experinces in languages such as java, js, c#, and many more.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-android service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Apps Design</h4>
                    </div>
                    <p>Designing an app is no easy task, that's why you should get me so that I will be the one who is going to have a headache.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">App Development</h4>
                    </div>
                    <p>Developing an app is like love. Love takes time and effort to cherish its wonderful effects, and experience love like never before.</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">SEO</h4>
                    </div>
                    <p>You want your site to be at the top of search engines? look no further!</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="service-box col-lg-4  col-md-7 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Content Creating</h4>
                    </div>
                    <p>Hi vlog! Welcome to my guys!</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Design</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Development</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Hosting</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".fourth">Leadership</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio3.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio4.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio5.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">Review</h1>
                <h1 class="position-absolute text-uppercase text-primary">Colleagues Testimonies</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">I love cats! This Website rocks! Poggers dude.</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="testimony">
                            <h5 class="font-weight-bold m-0">Alexandra Noynay</h5>
                            <span>A Person Who Loves Cats</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">JM is an amazing, passionate, and hardworking developer and designer. He can make great websites without importing libraries like Bootstrap for convenience. Now that he utilized it, his website looks even better. You can really see his improvement and growth.</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="Testimony">
                            <h5 class="font-weight-bold m-0">Akira Fidelino</h5>
                            <span>A Person Who Loves Zach</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">You can't reach me now.</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="Testimony">
                            <h5 class="font-weight-bold m-0">Lyanna Padillo</h5>
                            <span>A Giant Person Who Loves Us</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">The Best ito bro salamat sa lahat.</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="Testimony">
                            <h5 class="font-weight-bold m-0">Zach Justine Francia</h5>
                            <span>A Person Who Loves Akira</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
<!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
    <div class="container">
      <div class="position-relative d-flex align-items-center justify-content-center">
        <h1 class="display-2 text-uppercase text-white" style="-webkit-text-stroke: 2px #dee2e6;">Contact</h1>
        <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-form text-center">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate" style="display:block;">
                <div class="form-row">
                  <div class="control-group col-sm-6">
                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required"
                      data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group col-sm-6">
                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required"
                      data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required"
                    data-validation-required-message="Please enter a subject" />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" required="required"
                    data-validation-required-message="Please enter your message"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="/guestlist.php" class="btn btn-outline-primary mr-2">View Guests</a>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
              </form>              
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
      


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-1 px-sm-1 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="https://twitter.com/esoteric_jm"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/jm.gonzales.1253"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://github.com/jmazingw"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="https://www.instagram.com/esoteric_jejune"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="https://www.youtube.com/watch?v=Kz-INokaRFs">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="https://github.com/jmazingw">JMAZING</a>. All Rights Reserved.<a class="text-white font-weight-bold" href="https://github.com/jmazingw">John Michael Gonzales</a>
            </p>
            <p>Powered by <a class="text-white font-weight-bold" href="https://www.apc.edu.ph/">APC</a></p>
            
            <a href="https://www.ssltrust.com.au/security-report?domain=jmgonzales.myapc.edu.ph" rel="nofollow" target="_blank"> <img src="img/report_small.png" class="ssltrust-img"></a>
        </div>
    </div>
 <!-- Footer End -->

 <!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="contact.js"></script>

<!-- Main Javascript -->
<script src="js/main.js"></script>

</body>

</html>