<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="visitor-map-page">
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Visitor Map";
                    $image = "images/visitor-map-banner.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="visitor-map">
                        <div class="top-bg"></div>
                        <div class="container">
                            <div class="content">
                                <h2 class="section-title" data-animate="fade-up">Explore Our Map</h2>
                                <div class="description">
                                    <p>The Sheikh Abdullah Al Salem Cultural Centre is divided into 6 main buildings. They are the following: Ecosystems Museum, Our Earth Museum, Transportation and Robots Museum, Human Body Museum, Arabic Islamic Science Museum/Fine Arts Centre and Space Museum. There are other facilities like the Theatre, Guest Services building and different outdoor activities in the Courtyard.</p>
                                </div>
                                <div class="info" data-animate="fade-right">
                                    <h3>The Courtyard</h3>
                                    <div class="grid">
                                        <div class="item">
                                            <span>Flamingo Flock</span>
                                            <span>Science Garden</span>
                                        </div>
                                        <div class="item">
                                            <span>Dinosaur Dig</span>
                                            <span>Kinetic Sculptures</span>
                                        </div>
                                        <div class="item">
                                            <span>Amphitheatre</span>
                                            <span>Ancient Stories and Stars</span>
                                        </div>
                                        <div class="item">
                                            <span>Shadow Globes</span>
                                            <span>Rocket</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="reveal">
                                <img class="image" src="images/visitor-map.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'components/footer.php';  ?>
            </div>
        </div>
    </body>
</html>
