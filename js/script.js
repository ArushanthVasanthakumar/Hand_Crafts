let profile = document.querySelector('.header .flex .profile');
let sidenav = document.querySelector(".side-navbar");

// menu button → open side navbar
document.querySelector('#menu-btn').onclick = () => {
   sidenav.style.left = "0";   // slide in
   profile.classList.remove('active'); // hide profile if open
}

// user button → toggle profile
document.querySelector('#user-btn').onclick = () => {
   profile.classList.toggle('active');
   sidenav.style.left = "-60%"; // close side navbar if profile is open
}

// close side navbar (X icon)
function closeNavbar(){
   sidenav.style.left = "-60%"; // slide out
}

// scroll → close everything
window.onscroll = () =>{
   profile.classList.remove('active');
   sidenav.style.left = "-60%";
}
