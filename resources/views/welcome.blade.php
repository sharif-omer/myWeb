<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protofolio</title>
<!-- Boxicone -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awseme Library -->
    <link href="{{asset('assets/Css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('assets/Css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!--Start Header Design -->
    <header class="header">
        <a href="#home"><img src="{{asset('assets/images/logo.jpg')}}" alt="logo" class="logo"></a>

     <i class='bx bx-menu' id="menu-icon"></i>    
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
            <img src="{{asset('assets/images/profile.png')}}" alt="Sharif">
         </div>

         <div class="home-contect">
             <h3>Hello, my name is</h3>
        <h1>Sharif Omer</h1>

<div class="multiple-text">
  <span class="text first-text">I'M a </span>
  <span class="text sec-text"></span>
</div>
        

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        
        <div class="social-media">
           
          <a class="hint--bottom" href="https://www.facebook.com/SharifOmerHussen" aria-label="Facebook" target="_blank">
            <i class="fa fa-facebook"></i>
         </a>

         <a class="hint--bottom" href="https://www.instagram.com/shreefomerhessen" aria-label="Instagram" target="_blank">
            <i class="fa fa-instagram"></i>
        </a>

        <a class="hint--bottom" href="https://www.linkedin.com/in/sharif-omer-hussen-301241182/" aria-label="Linkedin" target="_blank">
            <i class="fa fa-linkedin"></i>
        </a>

        <a class="hint--bottom" href="https://github.com/Abdalshrif" aria-label="Github" target="_blank">
            <i class="fa fa-github"></i>
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
      <p> 
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil,
        consectetur harum minima nulla cupiditate illo reiciendis nisi 
        tempore nemo inventore magnam temporibus omnis quae possimus adipisci
        fuga eveniet et velit veniam autem eius iusto iste quam obcaecati. 
        Beatae sequi soluta, expedita rem optio provident dignissimos reiciendis!
        </p>
        <a href="#" class="btn">Read More</a>
   </div>

   <div class="about-img">
    <img src="{{asset('assets/images/home.png')}}" alt="">
 </div>
 </section>

  <!-- Start Skills -->
  <section class="our-skills" id="our-skills">
    <h2 class="heading">My <span>Skills</span></h2>
    <div class="container">
     <!-- <img src="images/skill-2.jpg" alt=""> -->
      <div class="skills">
        <div class="skill">
              <h3>HTML <span>90%</span></h3>
              <div class="the-progress">
                  <span style="width: 90%"></span>
              </div>
        </div>
      
        <div class="skill">
            <h3>CSS <span>85%</span></h3>
            <div class="the-progress">
                <span style="width: 85%"></span>
            </div>
        </div>
    
        <div class="skill">
            <h3>JavaScript <span>80%</span></h3>
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
            <a href=""><i class="fa fa-code i-red" ></i></a>
            <h3>Web Development</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia eius autem, 
                sequi beatae est eligendi dolores nobis! Vel, libero aspernatur!
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa fa-life-ring i-pink" aria-hidden="true"></i>
            <h3>Support</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia eius autem, 
                sequi beatae est eligendi dolores nobis! Vel, libero aspernatur!
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa fa-search i-brown" aria-hidden="true"></i>
            <h3>SEO</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia eius autem, 
                sequi beatae est eligendi dolores nobis! Vel, libero aspernatur!
            </p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services-box">
            <i class="fa fa-thumbs-o-up i-yellow" aria-hidden="true"></i>
            <h3>Freiendly Services</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia eius autem, 
                sequi beatae est eligendi dolores nobis! Vel, libero aspernatur!
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
            <a href="#">link</a>
         </div>
       </div>

       <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-2.jpg')}}" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">link</a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-3.jpg')}}" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">link</a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-4.jpg')}}" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">link</a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-5.jpg')}}" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">link</a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="{{asset('assets/images/portfolio-6.jpg')}}" class="port" alt="">
        <div class="portfolio-layer">
           <h4>Web Design</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quis!</p>
           <a href="#">link</a>
           <a href="#"><i class="fa fa-life-ring i-pink" aria-hidden="true"></i></a>
        </div>
      </div>

    </div>
 </section> 
   <!--End Protfolio Section -->

   <!-- Start Contact Section -->
   <section class="contact" id="contact">
     <h2 class="heading">Contact <span>Me</span></h2>

     <div class="form-info">
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Inter Your Name">
                <input type="email" placeholder="Inter Your Email">
            </div>
            
            <div class="input-box">
                <input type="number" placeholder="Inter Your Number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Messge" class="btn">
         </form>
     </div>

   </section>

   <!--Scroll Up -->
   <div class="up">Up</div>

   <!-- ==== Start Footer === -->
   <footer class="footer">
     <div class="footer-text">
        <p>Copyright &copy; 2023, Coding with <span style="color: rgb(228, 54, 54);"><i class="fa fa-heart"></i></span> by <span>Sharif Omer</span> | All Rights Reserved.</p>
     </div>
   </footer>
   <!-- End Footer -->

<!-- Scroll Reveal -->

   <!-- Custom JavaScript -->

    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/typed.min.js')}}"></script>

    
   
</body>
</html>