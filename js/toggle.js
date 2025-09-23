
   let userBtn = document.querySelector('#user-btn');
   let profile = document.querySelector('.profile');

   // Toggle profile when clicking the user button
   userBtn.onclick = () => {
      profile.classList.toggle('active');
   };

   // Close profile when clicking outside
   document.addEventListener('click', function(e) {
      if (!userBtn.contains(e.target) && !profile.contains(e.target)) {
         profile.classList.remove('active');
      }
   });
