<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="nature-page our-earth-page">
        <?php
            $title = "Natural History – Our Earth";
            $tagline = "See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core";
            $video = "images/our-earth-banner-video.mp4";
            $classes = "v2";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="video-area">
                <video class="background-video" autoplay muted loop playsinline>
                    <source src="images/our-earth-section-video.mp4" type="video/mp4">
                </video>
                <div class="sections-grid">
                    <div class="container">
                        <div class="image-content">
                            <h2 class="section-title">When the Earth Was Different Stories</h2>
                            <div class="grid">
                                <figure class="image">
                                    <img src="images/earth-story-image.jpg" class="object-fit-cover" alt="" />
                                </figure>
                                <div class="content">
                                    <div class="inner">
                                        <p>See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core. How does Kuwait’s industry and climate affect the world and how can we affect changes in the environment, at home and in the community to ensure a cleaner, greener planet?</p>
                                        <p>Experiment spaces are an important part of the Centre’s unique quest for innovation and intellectual growth in science, technology, geology, and the environment. The museum has a space for ground experiments (Earth Lab), a space for dinosaur experiments (Dino Lab), and Under Five Interactive Area (Animals & Us).</p>
                                        <p>See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core. How does Kuwait’s industry and climate affect the world and how can we affect changes in the environment, at home and in the community to ensure a cleaner, greener planet?</p>
                                        <p>Experiment spaces are an important part of the Centre’s unique quest for innovation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="explore-carousel">
                        <h2 class="section-title">Explore Ecosystems with us</h2>
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
                        <section class="earth-block3">
                            <div class="text">
                                <h3 class="section-title">Secrets from Before Humanity</h3>
                                <p>Travel through millions of years of natural history and discover the incredible creatures that once shared our planet — and the mysteries they left behind. Here you’ll encounter the towering Titanosaurus, the gentle giant of the dinosaur era, and the curious Dodo, a bird that lived without fear until humans changed its fate forever. From icy ages to lush rainforests, this exhibition explores the fragile relationship between life, nature, and extinction. Learn how climate shifts, evolution, and human influence shaped — and sometimes ended — entire species.</br>Through immersive visuals and scientific storytelling, “When the Earth Was Different” brings lost worlds to life, reminding us that the story of extinction is also a lesson in responsibility, resilience, and the beauty of existence itself.</p>
                            </div>
                            <figure class="image">
                                <img src="images/human-brain.png" alt="" />
                            </figure>
                        </section>
                    </div>
                </div>
            </div>
            <?php include 'components/museums_carousel.php'; ?>
        </main>
        <?php include 'components/footer.php';  ?>
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
