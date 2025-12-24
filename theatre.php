<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php
            $title = "Theatre";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="theatre">
                <svg width="0" height="0" style="position: absolute;">
                    <defs>
                        <clipPath id="museum-clip" clipPathUnits="objectBoundingBox">
                            <rect x="0" y="0.152" width="0.224" height="0.836" rx="0.03" />
                            <rect x="0.258" y="0" width="0.224" height="0.836" rx="0.03" />
                            <rect x="0.516" y="0.152" width="0.224" height="0.836" rx="0.03" />
                            <rect x="0.774" y="0" width="0.224" height="0.836" rx="0.03" />
                        </clipPath>
                    </defs>
                </svg>
                <div class="container">
                    <div class="grid">
                        <div class="text">
                            <h2 class="section-title" data-tagline="About Theatre">Experience the magic of live performance</h2>
                            <p>With its state-of-the-art facilities the Theatre and exhibition spaces offer unique cultural programmes relating to the arts and sciences, including new works by emerging artists, actors, performers and art students. Whether watching local or international cultural events, or participating in academic conferences and corporate exhibitions, the Centre’s 282-seat venue provides visitors of all ages with an engaging theatre-going experience and a premier venue in which to nurture homegrown talent.</p>
                            <img class="theatre_icon" src="images/theatre_icon.png" alt="" />
                        </div>
                        <figure class="image">
                            <img class="museum-clip" src="images/theatre_side_image.jpg" alt="" />
                        </figure>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
