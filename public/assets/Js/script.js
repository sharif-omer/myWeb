/* ======== Typeing js ======== */

let text = document.querySelector(".sec-text");

let textLoad = () =>  {
    setTimeout(() => {
        text.textContent = "Web Developer";
    }, 0);
    setTimeout(() => {
        text.textContent = "Content Creator";
        }, 4000);
    setTimeout(() => {
        text.textContent = "Offer Online Courses";
    }, 8000);
    
}
textLoad();
setInterval(textLoad, 12000);



/* ======== scroll Up ======== */

let scrollUp = document.querySelector(".up")
     window.onscroll = function()  {
  
    this.scrollY >= 1000 ? scrollUp.classList.add("show") : scrollUp.classList.remove("show");
   };
   scrollUp.onclick = function() {
   window.scrollTo({
       top: 0,
       behavior: "smooth",
   });
   };

/* ======== Toggle Icon Navbar ======== */

let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};


/* ======== Scroll Section ======== */

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let ofset =  sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= ofset && top < ofset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });


    /* ======== Sticky navbar ======== */
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

   /* ======== remove toggle icon and navbar when click navbar link (scroll) ======== */
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};


        
 

 


        
        

