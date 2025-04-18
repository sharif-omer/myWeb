<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Protofolio</title>
<!-- Boxicone -->
    <!-- Font Awseme Library -->
    {{-- <link href="{{asset('assets/Css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('assets/Css/font-awesome/css/fontawesome.min.css')}}" rel="stylesheet"> --}}

    <link href="{{asset('assets/Css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<body>
    <!--Start Header Design -->
    <header class="header">
        <i class='bx bx-menu' id="menu-icon"></i>    
        <a href="#home"><img src="{{asset('assets/images/sharif-logo-2.png')}}" alt="logo" class="logo"></a>
        {{-- <h2><a href="#home" class="logo">Sharif Omer</a></h2> --}}

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about me</a>
            <a href="#our-skills">skills</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact me</a>             
        </nav>
    </header>
     <!--End Header Design -->

     
     <!--Start Home Section -->
     <section class="home" id="home">
        <div class="home-image">
            <img src="{{asset('assets/images/home-img.png')}}" alt="Sharif">
         </div>
         <div class="home-contect">
             <h3>Hello, my name is</h3>
        <h1 class="myname">Sharif Omer</h1>

<div class="multiple-text">
  <span class="text first-text">I'M a </span>
  <span class="text sec-text"></span>
</div>
        

        <p>Skilled web developer with extensive experience designing and building dynamic and effective websites.
            </p>
        
            

        <div class="social-media">
           
          <a class="hint--bottom" href="https://www.facebook.com/sharifomerhessen/" aria-label="Facebook" target="_blank">
            <i class="fa-brands fa-facebook-f"></i>
         </a>

         <a class="hint--bottom" href="https://wa.me/+211922307319" aria-label="Whatsapp" target="_blank">
           <i class="fa-brands fa-whatsapp"></i>
        </a>

        <a class="hint--bottom" href="https://www.linkedin.com/in/sharif-omer-hussen-301241182/" aria-label="Linkedin" target="_blank">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>

        <a class="hint--bottom" href="https://github.com/Abdalshrif" aria-label="Github" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
        </div>
        <a href="#" class="btn">Dowload CV</a>

     </div>
     
   </section>
    <!--End Home Section -->

    <!--Start About Section -->
 <section class="about" id="about">
   
   <div class="about-content">
    <h2 class="heading">About <span>Me</span></h2>
    <h3>Frontend developer</h3>
    <p>Passionate web designer crafting captivating and effective websites tailored to client needs. Adept at problem-solving,  staying abreast of design and development trends, delivering exceptional results exceeding client expectations.
    </p>
      {{-- <p> 
        As a passionate web designer, I am driven to create beautiful and effective websites that captivate users. My constant pursuit of innovative solutions ensures that my clients' websites deliver an exceptional user experience and achieve optimal performance. I am adept at utilizing my problem-solving skills to tackle any challenge that arises, ensuring that each project meets the unique needs of my clients. By staying abreast of the latest web design and development trends, I am able to incorporate cutting-edge technologies into my work, delivering websites that are both visually stunning and functionally sound. I wholeheartedly embrace collaboration with my clients, fostering a dynamic and engaging project experience. My unwavering commitment to excellence ensures that every project I undertake culminates in exceptional results that exceed my clients' expectations.
        </p> --}}
        <a href="#" class="btn">Read More</a>
   </div>

   <div class="about-img">
    <img src="{{asset('assets/images/about-img.png')}}" alt="">
 </div>
 </section>

  <!-- Start Skills -->
  <section class="our-skills" id="our-skills">
    <h2 class="heading">My <span>Skills</span></h2>
    <div class="container">
      <div class="skills">
        <div class="skill">
              <h3>HTML & CSS<span>90%</span></h3>
              <div class="the-progress">
                  <span style="width: 90%"></span>
              </div>
        </div>
      
        <div class="skill">
            <h3>JavaScript <span>80%</span></h3>
            <div class="the-progress">
                <span style="width: 85%"></span>
            </div>
        </div>
    
        <div class="skill">
            <h3>Bootstrap <span>80%</span></h3>
            <div class="the-progress">
                <span style="width: 80%"></span>
            </div>
        </div>

        <div class="skill">
            <h3>React-js <span>75%</span></h3>
            <div class="the-progress">
                <span style="width: 80%"></span>
            </div>
        </div>
    
        <div class="skill">
            <h3>PHP <span>85%</span></h3>
            <div class="the-progress">
                <span style="width: 85%"></span>
            </div>
        </div>

        <div class="skill">
            <h3>MySql <span>80%</span></h3>
            <div class="the-progress">
                <span style="width: 80%"></span>
            </div>
        </div>

        <div class="skill">
            <h3>Laravel <span>80%</span></h3>
            <div class="the-progress">
                <span style="width: 80%"></span>
            </div>
        </div>

        <div class="skill">
            <h3>Codeigniter <span>70%</span></h3>
            <div class="the-progress">
                <span style="width: 70%"></span>
            </div>
        </div>

        <div class="skill">
            <h3>Git & Github <span>80%</span></h3>
            <div class="the-progress">
                <span style="width: 80%"></span>
            </div>
        </div>

        <div class="skill">
            <h3>Digital Marketing <span>60%</span></h3>
            <div class="the-progress">
                <span style="width: 60%"></span>
            </div>
        </div>
    </div>
    </div>
  </section>
<!-- End Skills -->

 <!-- Start Services -->
 <section class="services" id="services">
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
        <div class="services-box">
            <a href="#"><i class="fa fa-code i-red" ></i></a>
            <h3>Web Development</h3>
            <p>with extensive experience designing and building dynamic and effective websites. I possess a passion for crafting user-friendly interfaces and implementing functionalities that meet client needs.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa fa-search i-brown" aria-hidden="true"></i>
            <h3>SEO</h3>
            <p>with strong analytical skills and a proven track record in search engine optimization. I leverage my expertise to drive website rankings and increase organic traffic, ensuring your website reaches its full potential.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa fa-life-ring i-pink" aria-hidden="true"></i>
            <h3>Support</h3>
            <p>with strong problem-solving abilities. I work diligently to provide clear and concise communication through various channels, ensuring clients are informed and supported throughout the development process.
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa fa-thumbs-o-up i-yellow" aria-hidden="true"></i>
            <h3>Freiendly Services</h3>
            <p>with a passion for creating positive customer experiences. I am skilled in building rapport, actively listening to concerns, and resolving issues effectively to exceed customer expectations.                
            </p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
 </section>
 <!-- End Services -->

   <!--Start Protfolio Section -->
 <section class="portfolio" id="portfolio">
    <h2 class="heading">Latest<span> Project</span></h2>
    <div class="portfolio-container">
       <div class="portfolio-box">
         <img src="{{asset('assets/images/portfolio-1.jpg')}}" alt="">
         <div class="portfolio-layer">
            <h4>Web Design</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
            <a href="#">More</a>
         </div>
       </div>

       <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-2.jpg')}}" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">More</a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-3.jpg')}}" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">More</a>
        </div>
      </div>

    </div>
 </section> 
   <!--End Protfolio Section -->

   <!-- Start Contact Section -->
   @include('backend.create')
   <!--Scroll Up -->
   <div class="up">Up</div>

   <!-- ==== Start Footer === -->
   <footer class="footer">
    <div class="footer-text">
       <p>Copyright &copy; 2024, Coding with <span style="color: rgb(45, 0, 158);"><i class="fa fa-heart"></i></span> by <span>Sharif Omer</span> | All Rights Reserved.</p>
    </div>
  </footer>
   <!-- End Footer -->

<!-- Scroll Reveal -->

   <!-- Custom JavaScript -->

    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/typed.min.js')}}"></script>

    
   
</body>
</html>