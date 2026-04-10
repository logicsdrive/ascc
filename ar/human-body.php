<?php
$pageTitle = "ASCC - Natural History – Our Earth";
$pageDescription = "ASCC";
?>
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
                        <video class="background-video" autoplay muted loop playsinline data-speed="0.5" data-lag="0.2">
                            <source src="images/human-body-section-video.mp4" type="video/mp4">
                        </video>
                        <div class="sections-grid">
                            <div class="container">
                                <div class="human-body-block1 last-margin-0">
                                    <h2 class="section-title" data-animate="fade-up">The Human Blueprint Inside the Wonders of the Body</h2>
                                    <div class="description last-margin-0">
                                        <p>There is nothing more exciting and intricate than the workings of the human body and mind. Its secrets are revealed as we journey through its complex functions and realize how our brains act as super-computers! Encapsulating exhibits explain how the brain and body work in tandem.</p>
                                    <p>A journey through the hidden architecture of the human body — where bones, muscles, and cells come together to create life itself. Discover how every heartbeat, every breath, and every nerve connects us to the miracle of being human.</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $title = "Explore the Human body with us";
                                include 'components/explore_carousel.php';
                            ?>
                            <div class="container">
                                <section class="human-body-block3">
                                    <div class="text last-margin-0">
                                        <h3 class="section-title" data-animate="fade-up">Beyond the Skin The Story of Us</h3>
                                        <div class="description last-margin-0">
                                            <p>Explore the human body as nature’s most sophisticated creation — a living machine powered by thought, emotion, and energy. Dive into its systems, organs, and secrets to understand what truly makes us alive.</p>
                                            <p>Step beyond the surface to explore the body’s unseen world — from the rhythm of the heart to the language of DNA. Witness the beauty, complexity, and resilience of the human form like never before.</p>
                                            <p>Experiment spaces are an important part of the Centre’s unique quest for innovation and intellectual growth in science, technology, geology, and the environment.
                                            The museum has a space for biology experiments (Biology Laboratory) and a play area for children Under Five Interactive Area (Science Skills).</p>
                                        </div>
                                    </div>
                                    <figure class="image">
                                        <img src="images/home_banner/banner_block6_vector.gif" alt="" class="img-fluid" data-animate="fade-left">
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
    </body>
</html>
