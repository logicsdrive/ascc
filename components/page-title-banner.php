<div class="page-title-banner <?= isset($classes) ? $classes : '' ?>">
    <?php include 'components/header.php';  ?>
    <img class="image" src="<?= $image ?>" alt="" />
    <div class="content">
        <div class="container">
            <div class="page-banner-desc">
                <h1><?= $title ?></h1>
                <?php if(isset($tagline)) { ?>
                    <div class="desc"><?= $tagline ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>