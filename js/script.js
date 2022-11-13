
//////////////////
const navbarLists = document.querySelectorAll('.nav-link');
if (navbarLists.length) {
  navbarLists.forEach((list) => {
    list.addEventListener('click', (e) => {
      navbarLists.forEach((list) => {
        list.classList.remove('active');
      });
      e.preventDefault();
      list.classList.add('active');
    });
  });
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}




// ----------------added new slider script 
var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n){
index+=n;
console.log("prevSlide is called");
changeSlide();
}

function nextSlide(n){
index+=n;
changeSlide();
}

changeSlide();

function changeSlide(){

if(index>slides.length-1)
index=0;

if(index<0)
index=slides.length-1;



for(let i=0;i<slides.length;i++){
  slides[i].style.display = "none";

  dots[i].classList.remove("active");


}

slides[index].style.display = "block";
dots[index].classList.add("active");



}


