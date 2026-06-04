<?php
$pageTitle = "ASCC - Booking Confirmation";
$pageDescription = "ASCC";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php include 'components/header.php';  ?>
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Request Confirmation";
                    $image = "images/inner-banner-about.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="booking-confirmation request">
                        <div class="container">
                            <div class="message success" data-animate="fade-up">
                                <svg class="mx-auto" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_538_6152)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0C13.4531 0 0 13.4531 0 30C0 46.5469 13.4531 60 30 60C46.5469 60 60 46.5469 60 30C60 13.4531 46.5469 0 30 0Z" fill="#CF9C5A"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5059 19.8867C45.2324 20.6133 45.2324 21.8086 44.5059 22.5352L26.9277 40.1133C26.5645 40.4766 26.084 40.6641 25.6035 40.6641C25.123 40.6641 24.6426 40.4766 24.2793 40.1133L15.4902 31.3242C14.7637 30.5977 14.7637 29.4023 15.4902 28.6758C16.2168 27.9492 17.4121 27.9492 18.1387 28.6758L25.6035 36.1406L41.8574 19.8867C42.584 19.1484 43.7793 19.1484 44.5059 19.8867Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_538_6152">
                                            <rect width="60" height="60" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <h2 class="section-title" data-animate="fade-up">thank YOU</h2>
                                <p data-animate="fade-up">your winter camp registration has been submitted successfully</p>
                            </div>
                            <div class="info">
                                <div class="item" data-animate="fade-up">
                                    <h5>registration Reference</h5>
                                    <span>CAMP-2093-397</span>
                                </div>
                                <div class="item" data-animate="fade-up">
                                    <h5>Kids</h5>
                                    <span>1</span>
                                </div>
                                <div class="item" data-animate="fade-up">
                                    <h5>Weeks</h5>
                                    <span>1 Week</span>
                                </div>
                                 <div class="item" data-animate="fade-up">
                                    <h5>estimated total</h5>
                                    <span>50 KD</span>
                                </div>
                            </div>
                            <a href="@index.php" class="btn btn-primary go-back-button">Back To Home</a>
                        </div>
                    </div>
                </main>
                <?php include 'components/footer.php';  ?>
            </div>
        </div>
    </body>
</html>
