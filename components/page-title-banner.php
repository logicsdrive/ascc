<div class="page-title-banner <?= isset($classes) ? $classes : '' ?>">
    <?php include 'components/header.php';  ?>
    <img class="image" src="<?= $image ?>" alt="" />
    <div class="content">
        <div class="container">
            <div class="page-banner-desc wow animate__animated animate__fadeInUp">
                <h1><?= $title ?></h1>
                <?php if(isset($tagline)) { ?>
                    <div class="desc"><?= $tagline ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>