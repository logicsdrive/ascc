<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="education-page">
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Education";
                    $image = "images/education-page-banner.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="education">
                        <div class="h-list nav tabs-list" data-animate="fade-up">
                            <a href="#tab1" data-bs-toggle="tab" class="btn btn-outline-dark active">The Academy</a>
                            <a href="#tab2" data-bs-toggle="tab" class="btn btn-outline-dark">School Education Services</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane last-margin-0 tab1 show active" id="tab1" role="tabpanel">
                                <div class="content_row_holder">
                                    <?php include 'components/content_row.php'; ?>
                                    <?php include 'components/content_row.php'; ?>
                                    <?php include 'components/content_row.php'; ?>
                                </div>
                            </div>
                            <div class="tab-pane last-margin-0 fade" id="tab2" role="tabpanel">
                                <div class="content_row_holder">
                                    <?php include 'components/content_row.php'; ?>
                                    <?php include 'components/content_row.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'components/footer.php';  ?>
            </div>
        </div>
    </body>
</html>
