new WOW().init();

$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){

        e.preventDefault();
        $('.video-popup').css('display','flex');
        $('.iframe-src').slideDown();

    });

    $('.video-popup').on('click',function(e){

        let $target = e.target.nodeName;

        let video_src = $(this).find('iframe').attr('src');

            if($target != 'IFRAME'){

                $('.video-popup').fadeOut();
                $('.iframe-src').slideUp();
                $('.video-popup iframe').attr('src'," ");
                $('.video-popup iframe').attr('src',video_src);
            }
        });

       

});

$(window).on('load',function(){
    $(".load").fadeOut(1000);
    $(".website").fadeIn(1000);
});

let myTop = document.getElementById("toTopBtn"),
    nav = document.getElementById("nav");
    
const links = document.querySelectorAll(".nav-link");

for (const a of links) {
  
    a.addEventListener("click",function(){

        nav.classList.remove("show")
        
    });

}

window.onscroll = () => {

    if(window.scrollY < 500){
      myTop.style.opacity = "0";
      myTop.style.backgroundColor = "##C86D02";
    
    }else{
        myTop.style.backgroundColor = "#C86D02";
      myTop.style.opacity = "1";
    }

}

myTop.addEventListener("click", () => {
    window.scrollTo({
        left: 0,
        top: 0,
        behavior:"smooth"
    });
});

//======================================================= dark-mode
let we_are = document.getElementsByClassName('we-are'),
navbar = document.getElementById('navbar');
function darkMode(){

    let setTheme = document.body;


    setTheme.classList.toggle('dark-mode');
    we_are.classList.toggle('dark-mode');
    navbar.classList.toggle('dark-mode');
    
    // we_are.style.backgroundColor = "#171B20";
    // navbar.style.backgroundColor = "#171B20";

    let theme;

    if(setTheme.classList.contains('dark-mode') && we_are.classList.contains('dark-mode') && navbar.classList.contains('dark-mode')){
        theme = 'dark';
    }else{
        theme = 'light';
    }

    localStorage.setItem('PageTheme',JSON.stringify(theme));
}
 
let getTheme = JSON.parse(localStorage.getItem('PageTheme'));

if(getTheme == 'dark'){
    document.body.classList = 'dark-mode';
    document.we_are.classList = 'dark-mode';
    document.navbar.classList = 'dark-mode';
}


// ================================================================

$(window).on("scroll",function () {

    let bodyScroll = $(window).scrollTop(),
    navbar = $(".header .navbar");


    if(bodyScroll > 50){
        $('.navbar-logo img').attr('src','assets/images/logo-svg-.svg');
      
        navbar.addClass("nav-scroll");
        
        // header_more.css('border-bottom','none');
    }else{
        $('.navbar-logo img').attr('src','assets/images/logo-svg.svg');
        $('.header-more .navbar .logo img').attr('src','assets/images/logo-svg.svg');
        navbar.removeClass("nav-scroll");
        // header_more.css('border-bottom','.5px solid var(--main_color)');
    }
    
});

$(window).on("load",function (){

    let bodyScroll = $(window).scrollTop(),
    navbar = $(".navbar");

    if(bodyScroll > 50){
        $('.navbar-logo img').attr('src','assets/images/logo-svg-.svg');

        navbar.addClass("nav-scroll");
    }else{
        $('.navbar-logo img').attr('src','assets/images/logo-svg.svg');
        navbar.removeClass("nav-scroll");
    }

});

