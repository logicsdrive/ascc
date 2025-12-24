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
                    <?php $color = "red"; include 'components/museum_item.php'; ?>
                </div>
                <div class="swiper-slide">
                    <?php $color = "rgba(21, 53, 126, 1)"; include 'components/museum_item.php'; ?>
                </div>
                <div class="swiper-slide">
                    <?php $color = "rgba(21, 53, 126, 1)"; include 'components/museum_item.php'; ?>
                </div>
                <div class="swiper-slide">
                    <?php $category_type = "rgba(204, 38, 38, 1)"; include 'components/museum_item.php'; ?>
                </div>
                <div class="swiper-slide">
                    <?php $color = "rgba(86, 152, 66, 1)"; include 'components/museum_item.php'; ?>
                </div>
                <div class="swiper-slide">
                    <?php $color = "rgba(21, 53, 126, 1)"; include 'components/museum_item.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ascc_app.initMuseumsSlider();
    });
</script>