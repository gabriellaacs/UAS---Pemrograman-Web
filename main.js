// NAVBAR
const toggle_Btn = document.querySelector('.toggle_btn');
const toggle_BtnIcon = document.querySelector('.toggle_btn i');
const dropDown_Menu = document.querySelector('.dropdown_menu');

toggle_Btn.onclick = function () {
  dropDown_Menu.classList.toggle('open');
  const isOpen = dropDown_Menu.classList.contains('open');

  toggle_BtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
  }
// NAVBAR

// SCROLL TO TOP
window.addEventListener('scroll', function() {
    var scrollToTopBtn = document.getElementById('scrollToTopBtn');
    if (window.pageYOffset > 100) { // Adjust the value to determine when the button should appear
      scrollToTopBtn.style.display = 'block';
    } else {
      scrollToTopBtn.style.display = 'none';
    }
  });
  
  document.getElementById('scrollToTopBtn').addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  // !-- Script to show the notification -->

    function showNotification() {
      var notification = document.getElementById("successNotification");
      notification.style.display = "block";
      setTimeout(function () {
        notification.style.display = "none";
      }, 3000); // Hide the notification after 3 seconds
    }

    // Call the function to show the notification
    showNotification();

// SCROLL TO TOP

// // ABOUT
// var images = [
//   "assets/container-img1.png",
//   "assets/container-img2.png",
//   "assets/container-img3.png",
//   "assets/container-img4.png"
// ];
// var imageIndex = 0;
// var imageElement = document.getElementById("image");

// function changeImage() {
//   imageElement.style.backgroundImage = "url(" + images[imageIndex] + ")";
//   imageIndex = (imageIndex + 1) % images.length;
// }

// setInterval(changeImage, 4000);
// // ABOUT

