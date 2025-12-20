<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="our-earth-page nature-page">
        <?php
            $title = "Natural History – Our Earth";
            $tagline = "See the world of geology and geography come alive as we delve below the earth’s crust to its fiery core";
            $image = "images/earth-banner-image.jpg";
            $classes = "v2";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="video-area">
                <video class="background-video" autoplay muted loop playsinline>
                    <source src="images/sunshine.mp4" type="video/mp4">
                </video>
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
                    <div class="secrets-before-human">
                        ssdg
                    </div>
                </div>
            </div>
            <section class="other-museums">
                <div class="container">
                    <div class="title-bar">
                        <h2 class="section-title">Other Museums</h2>
                        <div class="h-list arrows">
                            <svg class="prev arrow" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <foreignObject x="-40" y="-40" width="125.818" height="125"><div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(20px);clip-path:url(#bgblur_0_782_7059_clip_path);height:100%;width:100%"></div></foreignObject><rect data-figma-bg-blur-radius="40" x="-1" y="1" width="43.8182" height="43" rx="21.5" transform="matrix(-1 0 0 1 43.8184 0)" stroke="currentColor" stroke-width="2"/>
                                <path d="M25.1992 17.25L19.8538 22.5L25.1992 27.75" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <clipPath id="bgblur_0_782_7059_clip_path" transform="translate(40 40)"><rect x="-1" y="1" width="43.8182" height="43" rx="21.5" transform="matrix(-1 0 0 1 43.8184 0)"/></clipPath>
                                </defs>
                            </svg>
                            <svg class="next arrow" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <foreignObject x="-40" y="-40" width="125.818" height="125"><div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(20px);clip-path:url(#bgblur_0_782_6833_clip_path);height:100%;width:100%"></div></foreignObject><rect data-figma-bg-blur-radius="40" x="1" y="1" width="43.8182" height="43" rx="21.5" stroke="currentColor" stroke-width="2"/>
                                <path d="M20.6191 17.25L25.9646 22.5L20.6191 27.75" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                    <clipPath id="bgblur_0_782_6833_clip_path" transform="translate(40 40)"><rect x="1" y="1" width="43.8182" height="43" rx="21.5"/></clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php $category_type = "property"; include 'components/category_item_v2.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "sea"; include 'components/category_item_v2.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "property"; include 'components/category_item_v2.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "property"; include 'components/category_item_v2.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "property"; include 'components/category_item_v2.php'; ?>
                            </div>
                            <div class="swiper-slide">
                                <?php $category_type = "property"; include 'components/category_item_v2.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'components/footer.php';  ?>
        <script>
            const swiper = new Swiper(".other-museums .swiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,

                navigation: {
                    nextEl: ".other-museums .arrows .next",
                    prevEl: ".other-museums .arrows .prev",
                }
            });
        </script>
    </body>
</html>
