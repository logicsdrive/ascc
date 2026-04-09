const cameraView = document.getElementById('camera_view');
const maxSteps = 6;
let isHolding = false;
let currentStep = 0;

// --- Auto-scroll Logic ---
let autoScrollInterval;
const scrollDelay = 3000; // Time in milliseconds (3 seconds)

// Function to update classes (Shared by Arrows and Scroll)
function goToStep(step) {
    // Clean up old classes and add the new ones
    for (let i = 1; i <= maxSteps; i++) {
        document.getElementById('camera_view').classList.toggle(`move_step${i}`, i <= step);
    }
    
    currentStep = step;
}
function startAutoScroll() {
    autoScrollInterval = setInterval(() => {
        let nextStep = currentStep + 2;
        
        // If we exceed max steps, reset to 0
        if (nextStep > maxSteps) {
            nextStep = 0;
        }
        
        goToStep(nextStep);
    }, scrollDelay);
}

function stopAutoScroll() {
    clearInterval(autoScrollInterval);
}

window.addEventListener('load', (event) => {
    gsap.registerPlugin(ScrollTrigger);
    
    const banner_title = document.querySelector(".page-title-banner .page-banner-desc");
    if (banner_title) {
        gsap.to(banner_title, {
            y: 0,
            opacity: 1,
            duration: 1.2,
            ease: "power3.out",
            onComplete: () => {
                gsap.to(banner_title, {
                    scrollTrigger: {
                        trigger: ".page-title-banner",
                        start: "top top",
                        end: "bottom 20%",
                        scrub: 1,
                    },
                    y: -150,
                    opacity: 0,
                    ease: "none"
                });
            }
        });
    }

    if(document.body.classList.contains("home-page")) {
        const contact_view_timeline = gsap.timeline({
            scrollTrigger: {
              trigger: ".home-page .contact .columns",
              start: "top 80%",
              end: "top 30%",
              scrub: 1,
              markers: false
            }
        });
        contact_view_timeline.from(".home-page .contact .form", {
            x: -200,
            opacity: 0,
            duration: 1
        }, 0);
        contact_view_timeline.from(".home-page .contact .address", {
            x: 200,
            opacity: 0,
            duration: 1
        }, 0);
        contact_view_timeline.from(".home-page .contact .block2", {
            y: 200,
            opacity: 0,
            duration: 1
        }, 0);
    
        const plan_visit_timeline = gsap.timeline({
            scrollTrigger: {
              trigger: ".home-page .plan-visit",
              start: "top 40%",
              end: "bottom 120%",
              scrub: 1,
              markers: false
            }
        });
    }
    

    // 1. Only start if the click begins ON the cameraView element
    if(cameraView && window.innerWidth > 991) {
        if (document.getElementById('camera_view_next')) {
            document.getElementById('camera_view_next').addEventListener('mouseenter', stopAutoScroll);
            document.getElementById('camera_view_next').addEventListener('mouseleave', startAutoScroll);
        }

        // Logic for the Previous Button
        if (document.getElementById('camera_view_prev')) {
            document.getElementById('camera_view_prev').addEventListener('mouseenter', stopAutoScroll);
            document.getElementById('camera_view_prev').addEventListener('mouseleave', startAutoScroll);
        }

        // Update your Arrow Event Listeners to use the same goToStep function
        document.getElementById('camera_view_next').addEventListener('click', () => {
            if (currentStep < maxSteps) goToStep(currentStep + 2);
        });

        document.getElementById('camera_view_prev').addEventListener('click', () => {
            if (currentStep > 0) goToStep(currentStep - 2);
        });
    }
});

// 3. Handle the movement logic
window.addEventListener('mousemove', (e) => {
    if (!isHolding) return;

    const screenWidth = window.innerWidth;
    const mouseX = e.clientX;

    // Adjust these percentages if you want the "active" area to be larger or smaller
    const leftBoundary = screenWidth * 0.35;  // Left 35% of screen
    const rightBoundary = screenWidth * 0.65; // Right 35% of screen

    if (mouseX < leftBoundary) {
        // MOUSE IS ON THE LEFT
        cameraView.classList.add('move-left');
        cameraView.classList.remove('move-right');
        cameraView.style.setProperty('--bg-shift', '50px');
    } 
    else if (mouseX > rightBoundary) {
        // MOUSE IS ON THE RIGHT
        cameraView.classList.add('move-right');
        cameraView.classList.remove('move-left');
        cameraView.style.setProperty('--bg-shift', '-50px');
    } 
    else {
        // MOUSE IS IN THE MIDDLE
        cameraView.classList.remove('move-left', 'move-right');
        cameraView.style.setProperty('--bg-shift', '0');
    }
});

document.addEventListener("DOMContentLoaded", function() {
    ascc_app.init();
});

setTimeout(function() {
    document.body.classList.add("page-loaded");
}, 3000);

const ascc_app = {
     isAnimating: false,
    init: function(){
        this.eventBindings();
        if (document.querySelector('.js-calendar')) {
            flatpickr(".js-calendar", {
                disableMobile: true,
                showMonths: 1,
                dateFormat: "Y-m-d",
                locale: {
                    weekdays: {
                        shorthand: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
                        longhand: [
                            "Monday",
                            "Tuesday",
                            "Wednesday",
                            "Thursday",
                            "Friday",
                            "Saturday",
                            "Sunday"
                        ]
                    }
                }
            });
        }

        // 1. Select all elements with the class ".phone-input"
        const phoneFields = document.querySelectorAll(".phone-input");

        // 2. Loop through each field
        phoneFields.forEach((field) => {
            window.intlTelInput(field, {
                initialCountry: "kw",
                excludeCountries: ["il"],
                geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("kw")); // Default to Kuwait on error
                },
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.0/build/js/utils.js"
            });
        });

        const cursor = document.querySelector('#custom-cursor');
        const cursorText = document.querySelector('#cursor-text');

        window.addEventListener('mousemove', (e) => {
            // Use transform for better performance than top/left
            cursor.style.transform = `translate3d(${e.clientX}px, ${e.clientY}px, 0)`;
          
            // Check if we are hovering over a custom-cursor element
            const target = e.target.closest('[data-custom-cursor]');
          
            if (target) {
              cursor.classList.add('active');
              cursorText.innerText = target.getAttribute('data-custom-cursor');
            } else {
              cursor.classList.remove('active');
            }
        });
    },
    eventBindings: function() {
        document.getElementById("nav-icon")?.addEventListener("click", () => {
            document.body.classList.add('menu-opened')
            this.animateNavigation();
        });
        document.addEventListener("click", function(e) {
            if(!e.target.closest(".search-icon") && !e.target.closest("#header_search")) {
                document.body.classList.remove("search-opened");
            }
            if(e.target.closest(".search-icon")) {
                document.getElementById("header_search").focus();
            }
        });
        document.body.addEventListener('click', async (e) => {
            const trigger = e.target.closest("[data-toggle='content-modal']");
            
            if (trigger) {
                e.preventDefault();
        
                const modal = new bootstrap.Modal(document.getElementById("content-modal"));
                const dataURL = trigger.getAttribute("data-path");
                modal.show();

                try {
                    const response = await fetch(dataURL);
                    if (!response.ok) throw new Error('Network response was not ok');
                    const data = await response.text();

                    document.getElementById("content-modal").querySelector(".modal-body").classList.remove("loading");
                    document.getElementById("content-modal").querySelector(".modal-body").innerHTML = data;
                } catch (error) {
                    document.getElementById("content-modal").querySelector(".modal-body").innerHTML = "Error! Data Not Loaded";
                }        
            }
        });
    },
    updateProfileImage: function(input){
        const preview = document.getElementById('profile_image');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
    
            reader.onload = function(e) {
                preview.src = e.target.result;
            }
            
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = "#";
        }
    },
    animateNavigation: function() {
        const navItems = document.querySelectorAll(".nav-list > li");
        gsap.fromTo(navItems, 
            { 
                opacity: 0, 
                x: 50,
                y: 100,
                skewX: -10
            }, 
            { 
                opacity: 1, 
                x: 0, 
                y: 0, 
                skewX: 0,
                duration: 0.6, 
                stagger: 0.1,
                ease: "power2.out" 
            }
        );
    },
    initExploreSlider: function() {
        new Swiper(".explore-carousel .swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            loop: true,
            effect: "coverflow",
            slideToClickedSlide: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 120,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: ".explore-carousel .arrows .next",
                prevEl: ".explore-carousel .arrows .prev",
            },
            breakpoints: {
                768: {
                    centeredSlides: true,
                    spaceBetween: 40,
                    slidesPerView: "auto",
                    slidesPerView: 3,
                },
            }
        });
    },
    initMuseumsSlider: function() {
        new Swiper(".other-museums .swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            slideToClickedSlide: true,
            speed:900,
            navigation: {
                nextEl: ".other-museums .arrows .next",
                prevEl: ".other-museums .arrows .prev",
            },
            breakpoints: {
                700: {
                    slidesPerView: 2,
                },
                1200: {
                    slidesPerView: 3,
                },
            }
        });
    },
    qtyUpdate: function(el, type) {
        const qtyBox = el.closest('.qty');
        const numEl = qtyBox.querySelector('.num');
        let value = parseInt(numEl.innerText);

        if (type === 'increment') {
            value++;
        } else if (type === 'decrement' && value > 1) {
            value--;
        }

        numEl.innerText = value;
    },
    togglePassword: function(element) {
        const wrapper = element.closest('.password_wrapper');
        const passwordField = wrapper.querySelector('input');
        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordField.placeholder = "Enter Password";
        } else {
            passwordField.type = "password";
            passwordField.placeholder = "************";
        }
    },
    homeSectionVisible: function () {
        if (this.isAnimating) return; // prevent double trigger
        this.isAnimating = true;

        gsap.to(window, {
            scrollTo: 0,
            duration: 2,
            ease: "power2.out",
            onComplete: () => {
                ScrollTrigger.refresh();
                this.isAnimating = false;
            }
        });

        document.documentElement.classList.add('home-loaded');

        if (typeof cameraView !== "undefined" && cameraView) {
            cameraView.classList.remove(
                'move_step1',
                'move_step2',
                'move_step3',
                'move_step4',
                'move_step5',
                'move_step6'
            );
        }

        startAutoScroll();
    }
};


const header = document.querySelector(".site-header");
const toggleClass = "is-sticky";

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll > 150) {
        header.classList.add(toggleClass);
    } else {
        header.classList.remove(toggleClass);
    }
});