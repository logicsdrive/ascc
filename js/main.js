const cameraView = document.getElementById('camera_view');
const maxSteps = 6;
let isHolding = false;
let currentStep = 0;

window.addEventListener('load', (event) => {
    document.body.classList.add("page-loaded");
    gsap.registerPlugin(ScrollTrigger);
    
    gsap.to(".page-title-banner .page-banner-desc", {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: "power3.out",
        onComplete: () => {
            gsap.to(".page-title-banner .page-banner-desc", {
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
    plan_visit_timeline.from(".home-page .plan-visit .item1", {
        y: 50,
        opacity: 0,
        duration: 1.5
    }, 0);
    plan_visit_timeline.from(".home-page .plan-visit .item2", {
        y: 100,
        opacity: 0,
        duration: 2
    }, 0);
    plan_visit_timeline.from(".home-page .plan-visit .item3", {
        y: 200,
        opacity: 0,
        duration: 2.5
    }, 0);

    
    // gsap.to(".camera-view .set1", {
    //     scaleX: 1,
    //     duration: 1,
    //     ease: "power3.out",
    //     immediateRender: false,
    //     scrollTrigger: {
    //       trigger: cameraView,
    //       start: "top 0%",
    //       toggleActions: "play none none none"
    //     }
    // });    

    // Function to update classes (Shared by Arrows and Scroll)
    function goToStep(step) {
        // Clean up old classes and add the new ones
        for (let i = 1; i <= maxSteps; i++) {
            document.getElementById('camera_view').classList.toggle(`move_step${i}`, i <= step);
        }
        
        currentStep = step;
    }

    // Create the ScrollTrigger that "Locks" the page
    ScrollTrigger.create({
        trigger: cameraView, // The section shown in your image
        start: "top top",
        end: `+=${maxSteps * 500}`,    // Distance user must scroll to finish all steps
        pin: true,                     // Pins the section in place
        scrub: true,
        onUpdate: (self) => {
            // Calculate which step we should be on based on scroll progress (0 to 1)
            const progressStep = Math.round(self.progress * maxSteps);
            if (progressStep !== currentStep) {
                goToStep(progressStep);
            }
        }
    });


    // 1. Only start if the click begins ON the cameraView element
    if(cameraView) {
        // Update your Arrow Event Listeners to use the same goToStep function
        document.getElementById('camera_view_next').addEventListener('click', () => {
            if (currentStep < maxSteps) goToStep(currentStep + 1);
        });

        document.getElementById('camera_view_prev').addEventListener('click', () => {
            if (currentStep > 0) goToStep(currentStep - 1);
        });

        cameraView.addEventListener('mousedown', (e) => {
            if (e.button === 0) { // Check for left click
                isHolding = true;
                // Optional: prevent text selection while dragging
                e.preventDefault(); 
            }
        });
    }

    // 2. Stop tracking when mouse is released
    window.addEventListener('mouseup', () => {
        isHolding = false;
        // Optional: Reset position when let go
        cameraView.classList.remove('move-left', 'move-right');
        cameraView.style.setProperty('--bg-shift', '0px');
    });
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

const ascc_app = {
    init: function(){
        this.eventBindings();
        if (document.querySelector('.js-calendar')) {
            flatpickr(".js-calendar", {
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
                geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("kw")); // Default to Kuwait on error
                },
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.0/build/js/utils.js"
            });
        });
    },
    eventBindings: function() {
        document.getElementById("nav-icon").addEventListener("click", () => {
            document.body.classList.add('menu-opened')
            this.animateNavigation();
        });
        document.addEventListener("click", function(e) {
            if(!e.target.closest(".search-icon") && !e.target.closest(".search-field")) {
                document.body.classList.remove("search-opened");
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
    initMuseumsSlider: function() {
        const museums_swiper = new Swiper(".other-museums .swiper", {
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
                992: {
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

// const input = document.querySelector("#phone");
// const iti = window.intlTelInput(input, {
//   initialCountry: "kw",
//   geoIpLookup: callback => {
//     fetch("https://ipapi.co/json")
//       .then(res => res.json())
//       .then(data => callback(data.country_code))
//       .catch(() => callback("us"));
//   },
//   utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.0/build/js/utils.js" 
// });