<section class="other-museums">
    <div class="container">
        <div class="title-bar">
            <h2 class="section-title" data-animate="fade-up">Other Museums</h2>
            <div class="h-list arrows" data-animate="fade-left">
                <svg class="prev arrow" width="46" height="46" fill="none"><use href="#swiper_arrow"></use></svg>
                <svg class="next arrow flip" width="46" height="46" fill="none"><use href="#swiper_arrow"></use></svg>
            </div>
        </div>
        <div class="swiper animate-slider">
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