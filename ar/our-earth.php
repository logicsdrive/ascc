<?php
$pageTitle = "ASCC - Natural History – Our Earth";
$pageDescription = "ASCC";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?> 
    </head>
    <body class="nature-page our-earth-page">
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Natural History – Our Earth";
                    $tagline = "See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core";
                    $video = "images/our-earth-banner-video.mp4";
                    $classes = "v2";
                    include 'components/page-title-banner.php'; 
                ?>
                <main class="main-content">
                    <div class="video-area" >
                        <video class="background-video" autoplay muted loop playsinline data-speed="0.5" data-lag="0.2">
                            <source src="images/our-earth-section-video.mp4" type="video/mp4">
                        </video>
                        <div class="sections-grid">
                            <div class="container">
                                <div class="image-content">
                                    <h2 class="section-title" data-animate="fade-up">When the Earth Was Different Stories</h2>
                                    <div class="grid">
                                        <figure class="image reveal">
                                            <img src="images/earth-story-image.jpg" class="object-fit-cover" alt="">
                                        </figure>
                                        <div class="content">
                                            <div class="inner description">
                                                <p>See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core. How does Kuwait’s industry and climate affect the world and how can we affect changes in the environment, at home and in the community to ensure a cleaner, greener planet?</p>
                                                <p>Experiment spaces are an important part of the Centre’s unique quest for innovation and intellectual growth in science, technology, geology, and the environment. The museum has a space for ground experiments (Earth Lab), a space for dinosaur experiments (Dino Lab), and Under Five Interactive Area (Animals & Us).</p>
                                                <p>See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core. How does Kuwait’s industry and climate affect the world and how can we affect changes in the environment, at home and in the community to ensure a cleaner, greener planet?</p>
                                                <p>Experiment spaces are an important part of the Centre’s unique quest for innovation.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $title = "Explore Ecosystems with us";
                                include 'components/explore_carousel.php';
                            ?>
                            <div class="container">
                                <section class="earth-block3">
                                    <div class="text">
                                        <h3 class="section-title"  data-animate="fade-up">Secrets from Before Humanity</h3>
                                        <div class="description last-margin-0">
                                            <p>Travel through millions of years of natural history and discover the incredible creatures that once shared our planet — and the mysteries they left behind. Here you’ll encounter the towering Titanosaurus, the gentle giant of the dinosaur era, and the curious Dodo, a bird that lived without fear until humans changed its fate forever. From icy ages to lush rainforests, this exhibition explores the fragile relationship between life, nature, and extinction. Learn how climate shifts, evolution, and human influence shaped — and sometimes ended — entire species.</br>Through immersive visuals and scientific storytelling, “When the Earth Was Different” brings lost worlds to life, reminding us that the story of extinction is also a lesson in responsibility, resilience, and the beauty of existence itself.</p>
                                        </div>
                                    </div>
                                    <figure class="image" data-animate="fade-left">
                                        <img src="images/human-brain.png" alt="" class="img-fluid">
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
