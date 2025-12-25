<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="nature-page arabic-science-page">
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Arabic Islamic Science";
                    $tagline = "With its focus on the Golden Age of Islam and the innumerable scientific, cultural and artistic contributions of Muslims and Arabs to modern day science,";
                    $video = "images/arabic-science-banner-video.mp4";
                    $classes = "v2";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="video-area">
                        <video class="background-video" autoplay muted loop playsinline data-speed="0.5" data-lag="0.2">
                            <source src="images/arabic-science-section-video.mp4" type="video/mp4">
                        </video>
                        <div class="sections-grid">
                            <div class="arabic-science-block arabic-science-block1">
                                <div class="container">
                                    <h2 class="section-title main-title">The Golden Age of Arabic Islamic Science</h2>
                                    <div class="opacity-box">
                                        <div class="text last-margin-0">
                                            <p>With its focus on the Golden Age of Islam and the innumerable scientific, cultural and artistic contributions of Muslims and Arabs to modern day science, the Arabic Islamic Science Museum highlights their ground-breaking work and accomplishments allowing visitors to proudly reconnect with the inspirational message of Islam, which actively encouraged scientific discovery.</p>
                                            <p>We recognize the work of Arab and Islamic scholars in the fields of Exploration, Medicine, Astronomy and Engineering; we see how scientific discoveries contributed to the architectural wonders of the Islamic world. Lastly,</p>
                                            <p>we are offered the spectacular opportunity to converse with ancient polymaths Al-Khwarizmi and Al-Biruni who appear to have been brought to life in a uniquely entertaining exhibit</p>
                                            <p>The museum has a learning area (Learning Zone) and an activity area (Activity Table).</p>
                                        </div>
                                        <div class="images">
                                            <figure class="image small">
                                                <img src="images/arabic_science_block1_image.jpg" alt="" />
                                            </figure>
                                            <figure class="image">
                                            <img src="images/arabic_science_block1_image.jpg" alt="" />
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="arabic-science-block arabic-science-block2" data-animate="fade-up">
                                <div class="container">
                                    <h2 class="section-title main-title">The Golden Age of Arabic Islamic Science</h2>
                                    <div class="text last-margin-0">
                                        <p>Journey through the stars as you learn how Arabic astronomers mapped the heavens and guided travelers across land and sea. See astrolabes, celestial charts, and models that reveal how their discoveries shaped our understanding of the universe.</p>
                                        <p>Step into a gallery that celebrates the scientific achievements of the Islamic world. See authentic instruments, manuscripts, and models that reveal how curiosity and knowledge flourished across centuries — inspiring generations of scientists around the globe.</p>
                                    </div>
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="image"><img src="images/echo-image1.jpg" alt=""></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="image"><img src="images/echo-image2.jpg" alt=""></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="image"><img src="images/echo-image3.jpg" alt=""></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="image"><img src="images/echo-image4.jpg" alt=""></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="image"><img src="images/echo-image5.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h-list arrows">
                                        <svg class="prev arrow" width="46" height="46" fill="none"><use href="#swiper_arrow"></use></svg>
                                        <svg class="next arrow flip" width="46" height="46" fill="none"><use href="#swiper_arrow"></use></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="arabic-science-block arabic-science-block3">
                                <div class="container">
                                    <h2 class="section-title main-title">The Golden Age of Arabic Islamic Science</h2>
                                    <div class="opacity-box">
                                        <div class="text">
                                            <h2 class="section-title">The World of Arabic Islamic Science</h2>
                                            <p>Explore how Muslim physicians advanced the art of healing. This gallery showcases ancient medical tools, detailed manuscripts, and the legacy of great scholars like Avicenna and Al-Razi, whose methods influenced both Eastern and Western medicine for centuries.</p>
                                            <p>Journey through the stars as you learn how Arabic astronomers mapped the heavens and guided travelers across land and sea. See astrolabes, celestial charts, and models that reveal how their discoveries shaped our understanding of the universe. Uncover the brilliance of Islamic mathematics and engineering — from the invention of algebra to the design of water clocks and mechanical devices. This section highlights how science and creativity worked hand in hand to solve real-world challenges.</p>
                                        </div>
                                        <img class="image" src="images/islamic-age.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include 'components/museums_carousel.php'; ?>
                </main>
                <?php include 'components/footer.php';  ?>
            </div>
        </div>
        <script>
            const swiper1 = new Swiper(".arabic-science-block2 .swiper", {
                slidesPerView: "auto",
                spaceBetween: 28,
                loop: true,
                speed: 1000,
                allowTouchMove: false,
                simulateTouch: false,
                preventInteractionOnTransition: true,
                touchMoveStopPropagation: true,
                on: {
                    init: function () {
                        const initialActive = this.slides[this.activeIndex];
                        gsap.set(initialActive, { width: "545px" });
                        this.update();
                    },
                    slideChangeTransitionStart: function () {
                        const allSlides = this.wrapperEl.querySelectorAll('.swiper-slide');
                        const activeSlide = this.slides[this.activeIndex];
                        gsap.to(activeSlide, {
                            width: "545px",
                            duration: 1,
                            ease: "power2.inOut",
                            onUpdate: () => {
                                this.update();
                            }
                        });
                        this.slides.forEach((slide) => {
                            if (slide !== activeSlide) {
                                gsap.to(slide, {
                                    width: "290px",
                                    duration: 1,
                                    ease: "power2.inOut"
                                });
                            }
                        });
                    }
                },
                navigation: {
                    nextEl: ".arabic-science-block2 .arrows .next",
                    prevEl: ".arabic-science-block2 .arrows .prev",
                }
            });
        </script>
    </body>
</html>
