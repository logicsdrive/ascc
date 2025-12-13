<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php
            $title = "About";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="about">
                <div class="container">
                    <div class="h-list nav tabs-list">
                        <a href="#tab1" data-bs-toggle="tab" class="btn btn-outline-dark active">Sheikh Abdullah Al Salem</a>
                        <a href="#tab2" data-bs-toggle="tab" class="btn btn-outline-dark">The Centre</a>
                        <a href="#tab3" data-bs-toggle="tab" class="btn btn-outline-dark">Visit Us</a>
                        <a href="#tab4" data-bs-toggle="tab" class="btn btn-outline-dark">Facilities</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane tab1 show active" id="tab1" role="tabpanel">
                            <div class="view1">
                                <div class="text">
                                    <h2 class="title-1 text-primary">A Leader Who Preserved Heritage</h2>
                                    <div class="last-margin-0">
                                        <p>The first Amir and founder of modern Kuwait. Within his two years of his reign, he accomplished countless tasks including founding of the legal and constitutional institutions of Kuwait.</p>
                                        <p>Recognizing the needs of the society of the time, he established schools and hospitals and made education and health care free to all citizens and residents, and built free housing for Kuwaiti citizens while attending to the welfare of widows, orphans and the elderly.</p>
                                        <p>Under his leadership Kuwait joined the Arab League in July 1961 and a year later, the nation celebrated the creation and promulgation of the Kuwaiti Constitution.</p>
                                    </div>
                                </div>
                                <figure class="image"></figure>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            tab2
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            tab3
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                            tab4
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
