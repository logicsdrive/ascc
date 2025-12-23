window.addEventListener('load', (event) => {
    document.body.classList.add("page-loaded");
    new WOW().init();
});
document.addEventListener("DOMContentLoaded", function() {
    ascc_app.init();
});

const ascc_app = {
    init: function(){
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
    },
    initMuseumsSlider: function() {
        const museums_swiper = new Swiper(".other-museums .swiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,

            navigation: {
                nextEl: ".other-museums .arrows .next",
                prevEl: ".other-museums .arrows .prev",
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
    }
};