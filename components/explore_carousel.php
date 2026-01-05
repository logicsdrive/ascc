<section class="explore-carousel">
    <?php if(isset($title)) { ?>
        <h2 class="section-title" data-animate="fade-up"><?= $title ?></h2>
    <?php } ?>
    <div class="swiper animate-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image1.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image2.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image3.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image4.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image5.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image1.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image2.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image3.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image4.webp" alt=""></figure>
            </div>
            <div class="swiper-slide">
                <figure class="image"><img src="images/echo-image5.webp" alt=""></figure>
            </div>
        </div>
    </div>
    <div class="h-list arrows" data-animate="fade-up">
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
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ascc_app.initExploreSlider();
    });
</script>