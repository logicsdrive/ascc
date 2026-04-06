<?php
$pageTitle = "ASCC - Natural History – Ecosystems";
$pageDescription = "ASCC";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="nature-page our-echosystem">
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Ecosystems";
                    $tagline = "Travel back in time to gain a unique insight into the natural world – both past and present,";
                    $video = "images/echosystem-banner-video.mp4";
                    $classes = "v2";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="video-area">
                        <video class="background-video" autoplay muted loop playsinline data-speed="0.5" data-lag="0.2">
                            <source src="images/echosystem-section-video.mp4" type="video/mp4">
                        </video>
                        <div class="sections-grid">
                            <section class="echo-block1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="container">
                                                <div class="text" data-animate="fade-up">
                                                    Travel back in time to gain a unique insight into the natural world – both past and present, understand the importance of ecosystems and how they influenced the development of biodiversity of our planet over millions of years. Explore Southeast Asia’s rainforests and see how mangroves help the ecology.
                                                </div>
                                                <div class="big-circle">
                                                    <img src="images/echo-circle-past.jpg" class="object-fit-cover" alt="" />
                                                    <div class="icon">
                                                        <img src="images/play_icon.png" width="89" height="89" data-toggle="content-modal" data-path="data/echo_video1.html" alt="" />
                                                        <span class="next">Past</span>
                                                    </div>
                                                </div>
                                                <div class="text empty"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="container">
                                                <div class="text empty"></div>
                                                <div class="big-circle">
                                                    <img src="images/echo-circle-past.jpg" class="object-fit-cover" alt="" />
                                                    <div class="icon">
                                                        <img src="images/play_icon.png" width="89" height="89" data-toggle="content-modal" data-path="data/echo_video1.html" alt="" />
                                                        <span class="next">Present</span>
                                                    </div>
                                                </div>
                                                <div class="text empty"></div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="container">
                                                <div class="text empty"></div>
                                                <div class="big-circle">
                                                    <img src="images/echo-circle-past.jpg" class="object-fit-cover" alt="" />
                                                    <div class="icon">
                                                        <img src="images/play_icon.png" width="89" height="89" data-toggle="content-modal" data-path="data/echo_video1.html"  alt="" />
                                                        <span>Future</span>
                                                    </div>
                                                </div>
                                                <div class="text" >Dive into an underwater wonderland and go nose-to-nose with the wildlife in our pool! Get to know more about Kuwait’s extraordinary wildlife; how do creatures live in extreme environments? What is the link between trade and our natural habitat? Test your skills in our interactive displays and learn about how we can keep the coastal community alive and help sustain the planet.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php
                                $title = "Explore Ecosystems with us";
                                include 'components/explore_carousel.php';
                            ?>
                            <div class="container">
                                <section class="echo-block3">
                                    <div class="text">
                                        <h3 class="section-title" data-animate="fade-up">Journey Into the World of Sharks and Marine Wonders</h3>
                                        <div class="description">
                                            <p>Get closer than ever to the ocean’s most powerful predator — the shark. Watch as they glide effortlessly through the water, revealing their strength, intelligence, and grace. This immersive experience lets visitors understand why sharks are not monsters to fear, but vital creatures that keep marine ecosystems alive.</p>
                                        <p>Dive into the wonders of the underwater world in our Deep Sea Aquarium. Explore the beauty and diversity of marine life — from colorful coral reefs and graceful rays to the majestic sharks that rule the deep. Learn how these fascinating creatures survive, hunt, and play a vital role in keeping our oceans balanced</p>
                                        </div>
                                    </div>
                                    <div class="imageWrapper" data-animate="zoom-out">
                                        <img class="image mx-auto" src="images/home_banner/banner_block7_vector.gif" alt="" class="img-fluid">
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <?php include 'components/museums_carousel.php'; ?>
                </main>
                <?php include 'components/footer.php';  ?>
                <script>
                    const swiper2 = new Swiper(".echo-block1 .swiper", {
                        slidesPerView: 1,
                        spaceBetween: 0,
                        speed:900,
                        autoHeight: true,
                        navigation: {
                            nextEl: ".echo-block1 .next",
                        }
                    });
                </script>
            </div>
        </div>
    </body>
</html>
