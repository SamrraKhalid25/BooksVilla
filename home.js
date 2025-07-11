// toggle for mobile view hamburger
  function toggleSidebar() {
    document.getElementById("mobileSidebar").classList.toggle("active");
  }
// toggle search bar
  function toggleMobileSearch() {
    const searchBar = document.getElementById("mobileSearch");
    searchBar.classList.toggle("active");
  }


// slider functionality
let slideIndex = 0;
        const slides = document.querySelectorAll(".slide");
        let slideInterval = setInterval(nextSlide, 3000);

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove("active");
                if (i === index) {
                    slide.classList.add("active");
                }
            });
        }

        function nextSlide() {
            slideIndex = (slideIndex + 1) % slides.length;
            showSlide(slideIndex);
        }

        function prevSlide() {
            slideIndex = (slideIndex - 1 + slides.length) % slides.length;
            showSlide(slideIndex);
        }


        function pauseSlider() {
            clearInterval(slideInterval);
        }

        function resumeSlider() {
            slideInterval = setInterval(nextSlide, 3000);
        }

// slider functionality ends
    //   theme toggle functionality
       function toggleTheme() {
    document.body.classList.toggle("light-mode");
    const icon = document.querySelector(".toggle-btn i");
    const isLightMode = document.body.classList.contains("light-mode");

    // Save preference
    localStorage.setItem("theme", isLightMode ? "light" : "dark");

    // Update icon
    icon.classList.remove(isLightMode ? "fa-moon" : "fa-sun");
    icon.classList.add(isLightMode ? "fa-sun" : "fa-moon");
}
window.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme");
    const icon = document.querySelector(".toggle-btn i");

    if (savedTheme === "light") {
        document.body.classList.add("light-mode");
        if (icon) {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        }
    } else {
        if (icon) {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
        }
    }
});
// theme toggle functionality ends
        function startCountdown(targetDate) {
            function updateCountdown() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    document.querySelector(".countdown").innerHTML = "Offer Expired!";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").textContent = days;
                document.getElementById("hours").textContent = hours;
                document.getElementById("minutes").textContent = minutes;
                document.getElementById("seconds").textContent = seconds;
            }

            updateCountdown();
            setInterval(updateCountdown, 1000);
        }

        const offerEndDate = new Date();
        offerEndDate.setDate(offerEndDate.getDate() + 15);
        startCountdown(offerEndDate);


        window.onscroll = function () {
            let scrollButton = document.getElementById("scrollToTop");
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollButton.style.display = "block";
            } else {
                scrollButton.style.display = "none";
            }
        };
        
        // Scroll to top smoothly
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        document.addEventListener("DOMContentLoaded", () => {
            const bookCards = document.querySelectorAll(".book-card");
        
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, { threshold: 0.1 });
        
            bookCards.forEach((card) => observer.observe(card));
        });
        function scrollCarousel(direction) {
            const carousel = document.getElementById('carousel');
            const scrollAmount = 300;
            carousel.scrollBy({
              left: direction * scrollAmount,
              behavior: 'smooth'
            });
          }
          
          // Automatic scrolling every 3 seconds
          setInterval(() => {
            const carousel = document.getElementById('carousel');
            const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
          
            if (carousel.scrollLeft >= maxScrollLeft - 5) {
              // If at end, scroll back to start
              carousel.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
              carousel.scrollBy({ left: 300, behavior: 'smooth' });
            }
          }, 3000); // Adjust interval (ms) here
          // Cart functionality`~
  let iconCart = document.querySelector('.icon-cart');
  let closeCart = document.querySelector('.close');
  let body = document.querySelector('body');

  iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart')
  }); 
 closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart')
  });
// cart functionality end
          