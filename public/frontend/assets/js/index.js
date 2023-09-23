let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "flex") {
      panel.style.display = "none";
    } else {
      panel.style.display = "flex";
    }
  });
}

var swiper = new Swiper(".blog-swiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1400: {
      slidesPerView: 3
    },
    500: {
      slidesPerView: 2
    },
    0: {
      slidesPerView: 1.1,
      spaceBetween: 10,
    }
  }
});

var swiper = new Swiper(".service-swiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1400: {
      slidesPerView: 3
    },
    500: {
      slidesPerView: 2
    },
    0: {
      slidesPerView: 1.1,
      spaceBetween: 10
    }
  }
});



function showRecoveryFAQ(){
  event.preventDefault()
  document.getElementById("serviceFAQs").style.display='none'
  document.getElementById("recoveryFAQs").style.display='flex'
  document.getElementById("recovery-faq").classList.add('active-faq')
  document.getElementById("general-faq").classList.remove('active-faq')
  document.getElementById("service-faq").classList.remove('active-faq')
}
function showServiceFAQ(){
  event.preventDefault()
  document.getElementById("recoveryFAQs").style.display='none'
  document.getElementById("serviceFAQs").style.display='flex'
  document.getElementById("recovery-faq").classList.remove('active-faq')
  document.getElementById("general-faq").classList.remove('active-faq')
  document.getElementById("service-faq").classList.add('active-faq')
}

function showGeneralFAQ(){
  event.preventDefault()
  document.getElementById("recoveryFAQs").style.display='flex'
  document.getElementById("serviceFAQs").style.display='flex'
  document.getElementById("recovery-faq").classList.remove('active-faq')
  document.getElementById("general-faq").classList.add('active-faq')
  document.getElementById("service-faq").classList.remove('active-faq')
}

function showResponsiveMenu(){
 document.getElementById('MenuIcon').style.display='none'
 document.getElementById('CloseMenuIcon').style.display='block'
 document.getElementById('navbar-items').style.display='flex'
}
function closeResponsiveMenu(){
  document.getElementById('MenuIcon').style.display='block'
  document.getElementById('CloseMenuIcon').style.display='none'
  document.getElementById('navbar-items').style.display='none'
}


