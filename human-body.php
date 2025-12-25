<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="nature-page human-body-page">
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Natural History – Our Earth";
                    $tagline = "See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core";
                    $video = "images/human-body-banner-video.mp4";
                    $classes = "v2";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="video-area">
                        <video class="background-video" autoplay muted loop playsinline>
                            <source src="images/human-body-section-video.mp4" type="video/mp4">
                        </video>
                        <div class="sections-grid">
                            <div class="container">
                                <div class="human-body-block1 last-margin-0">
                                    <h2 class="section-title">The Human Blueprint Inside the Wonders of the Body</h2>
                                    <p>There is nothing more exciting and intricate than the workings of the human body and mind. Its secrets are revealed as we journey through its complex functions and realize how our brains act as super-computers! Encapsulating exhibits explain how the brain and body work in tandem.</p>
                                    <p>A journey through the hidden architecture of the human body — where bones, muscles, and cells come together to create life itself. Discover how every heartbeat, every breath, and every nerve connects us to the miracle of being human.</p>
                                </div>
                            </div>
                            <section class="explore-carousel">
                                <h2 class="section-title">Explore the Human body with us</h2>
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
                            </section>
                            <div class="container">
                                <section class="human-body-block3">
                                    <div class="text last-margin-0">
                                        <h3 class="section-title">Beyond the Skin The Story of Us</h3>
                                        <p>Explore the human body as nature’s most sophisticated creation — a living machine powered by thought, emotion, and energy. Dive into its systems, organs, and secrets to understand what truly makes us alive.</p>
                                        <p>Step beyond the surface to explore the body’s unseen world — from the rhythm of the heart to the language of DNA. Witness the beauty, complexity, and resilience of the human form like never before.</p>
                                        <p>Experiment spaces are an important part of the Centre’s unique quest for innovation and intellectual growth in science, technology, geology, and the environment.
                                        The museum has a space for biology experiments (Biology Laboratory) and a play area for children Under Five Interactive Area (Science Skills).</p>
                                    </div>
                                    <figure class="image">
                                        <img src="images/humanbody.png" alt="" />
                                    </figure>
                                </section>
                            </div>
                        </div>
                    </div>
                    <?php include 'components/museums_carousel.php'; ?>
                </main>
                <?php include 'components/footer.php';  ?>
            </div>
        </div>
        <script>
            const swiper1 = new Swiper(".explore-carousel .swiper", {
                slidesPerView: "auto",
                spaceBetween: 40,
                centeredSlides: true,
                loop: true,
                effect: "coverflow",
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
                }
            });
        </script>
    </body>
</html>
