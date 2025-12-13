<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php
            $title = "Education";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="education">
                <div class="h-list nav tabs-list">
                    <a href="#tab1" data-bs-toggle="tab" class="btn btn-outline-dark active">The Academy</a>
                    <a href="#tab2" data-bs-toggle="tab" class="btn btn-outline-dark">School Education Services</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane last-margin-0 tab1 show active" id="tab1" role="tabpanel">
                        <?php include 'components/content_row.php'; ?>
                        <?php include 'components/content_row.php'; ?>
                        <?php include 'components/content_row.php'; ?>
                    </div>
                    <div class="tab-pane last-margin-0 fade" id="tab2" role="tabpanel">
                        <?php include 'components/content_row.php'; ?>
                        <?php include 'components/content_row.php'; ?>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
