
let profile = document.querySelector('.header .flex .profile');
let sidenav = document.querySelector(".side-navbar");
let menuBtn = document.querySelector('#menu-btn');
let closeBtn = document.querySelector('.side-navbar .fa-xmark');

// menu button → open side navbar
 menuBtn.onclick = () => {
   sidenav.style.left = "0";   // slide in
   profile.classList.remove('active'); // hide profile if open
}

// close side navbar (X icon)
closeBtn.onclick = () => {
   sidenav.style.left = "-60%"; // slide out
}

// scroll → close everything
window.onscroll = () =>{
   profile.classList.remove('active');
   sidenav.style.left = "-60%";
}
