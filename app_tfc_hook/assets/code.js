
let menu = document.querySelector('#menu-bars');
let navbar= document.querySelector('.navbar');
let section =document.querySelector('section');
let navList= document.querySelector('Header .navbar a');


menu.click = () =>{


    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    section.forEach(sec=>{
      let top =window.scrollY;
      let height =sec.offsetHeight;
      let offset =sec.offsetTop -150;
      let id =sec.getAttribute('id');
      if(top => offset && top < offset +height){
        navList.forEach(links => {
          links.classList.remove('active');
          let navList= document.querySelector('Header .navbar a [href*='+id+']').classList.add('active');
        });
      };

    })
  }

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

document.querySelector('#search-icon').onclick = () =>{
    document.querySelector('#search-form').classList.toggle(active);
}

document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove(active);
}

     let swiper = new Swiper(".home-slider", { 
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        lopp:true
      });

       let towSwiper = new Swiper(".other-slider", {
        spaceBetween: 20,
        centeredSlides: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        lopp:true,
        breakpoints:{
          0:{
            slidesPerView :1,
          },
          640:{
            slidesPerView:2,
          },
          780:{
            slidessPerView :2,
          },
          1024:{
            slidesPerView:3
          }
        }
      });
      // pour l'animation 
      const navigation = document.querySelector(".header");
       window.addEventListener('scroll', () => {

          if(window.scrollY > 400 ){

            navigation.classList.add('animeNav');
          }
          else{
            navigation.classList.remove('animeNav');
          }

       });
       //

       // anime au clik
        window.addEventListener("click", (e) =>{
          const rond = document.createElement('div');
           rond.classList.toggle("clickAnime");
            rond.style.top = `${e.pageY - 50}px`;
            rond.style.left = `${e.pageX - 50}px`;
            document.body.appendChild(rond);
             
        setTimeout( () =>{
            rond.remove();
        }, 150); 
           
        });
    // animation input 
     const validationInput = document.querySelector('.valide');
     validationInput.addEventListener('input', (e) =>{
          if(e.target.value.length >= 3 ) {
              validationInput.style.borderColor = "green";
           } 
            else {
            validationInput.style.borderColor = "red";
            }
      });