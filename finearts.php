<?php
$pageTitle = "ASCC - Fine Arts Centre";
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
                    $title = "Fine Arts centre";
                    $image = "images/finearts-page-banner.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="finearts">
                        <section class="content_row_holder">
                            <?php include 'components/content_row.php'; ?>
                            <?php include 'components/content_row.php'; ?>
                            <?php include 'components/content_row.php'; ?>
                        </section>
                        <section class="selection-process">
                            <div class="container">
                                <h2 class="section-title text-primary mb-5" data-animate="fade-up">Application and Selection Process</h2>
                                <div class="grid">
                                    <div class="item animateCard">
                                        <figure class="image"><img src="images/our-mission-image.jpg" alt="" /></figure>
                                        <div class="inner">
                                            <h4 class="section-title">Season 1, 2019 - Artists</h4>
                                            <p>The LEAF Award for the best building in 2017, which is considered one of the most prestigious architectural awards.</p>
                                        </div>
                                        <a href="#" data-custom-cursor="Read More" class="abs-link"></a>
                                    </div>
                                    <div class="devider"></div>
                                    <div class="item animateCard">
                                        <figure class="image"><img src="images/our-vision-image.jpg" alt="" /></figure>
                                        <div class="inner">
                                            <h4 class="section-title">Season 2, 2020 - Artists</h4>
                                            <p>the best engineering project in the category of public facilities in the Middle East and North Africa for the year 2018.</p>
                                        </div>
                                        <a href="#" data-custom-cursor="Read More" class="abs-link"></a>
                                    </div>
                                    <div class="devider"></div>
                                    <div class="item animateCard">
                                        <figure class="image"><img src="images/our-vision-image.jpg" alt="" /></figure>
                                        <div class="inner">
                                            <h4 class="section-title">Season 3, 2021 - Artists</h4>
                                            <p>the year 2021 under the category of Best Cultural Destination in the Middle East and North Africa.</p>
                                        </div>
                                        <a href="#" data-custom-cursor="Read More" class="abs-link"></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="faqs">
                            <div class="container">
                                <h3 class="title-1" data-animate="fade-up">FAQs</h3>
                                <div class="accordion" id="faqs">
                                    <div class="accordion-item" data-animate="fade-right">
                                        <div class="trigger" data-bs-toggle="collapse" data-bs-target="#view1" aria-expanded="true">
                                            <div class="h-list gap-2">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C3.57841 0 0 3.578 0 8C0 12.4215 3.578 16 8 16C12.4216 16 16 12.422 16 8C16 3.57841 12.422 0 8 0ZM7.76328 11.7443C7.31047 11.7443 6.96297 11.3652 6.96297 10.9335C6.96297 10.4912 7.321 10.1227 7.76328 10.1227C8.20559 10.1227 8.57409 10.4912 8.57409 10.9335C8.57409 11.3652 8.21606 11.7443 7.76328 11.7443ZM8.96372 7.648C8.38456 8.10081 8.374 8.41672 8.374 8.96428C8.374 9.16441 8.26869 9.39606 7.75272 9.39606C7.32094 9.39606 7.17356 9.23809 7.17356 8.69053C7.17356 7.78491 7.57372 7.35316 7.87909 7.08991C8.22659 6.79503 8.81631 6.46863 8.81631 5.9C8.81631 5.41556 8.39509 5.18391 7.86856 5.18391C6.79447 5.18391 7.02616 5.99478 6.45747 5.99478C6.17316 5.99478 5.82566 5.80519 5.82566 5.39453C5.82566 4.82591 6.47853 3.98344 7.90016 3.98344C9.24803 3.98344 10.1431 4.73112 10.1431 5.72097C10.1431 6.71081 9.24803 7.42687 8.96372 7.648Z" fill="#CF9C5A"/>
                                                </svg>
                                                <span>Where does the residency take place?</span>
                                            </div>
                                            <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6641 6L7.9974 10.6667L3.33073 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div id="view1" class="accordion-collapse collapse show" data-bs-parent="#faqs">
                                            <div class="accordion-body">
                                                <p>Due to the new COVID-19 regulations, the program will take place in both studio facilities and online.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" data-animate="fade-left">
                                        <div class="trigger" data-bs-toggle="collapse" data-bs-target="#view2">
                                            <div class="h-list gap-2">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C3.57841 0 0 3.578 0 8C0 12.4215 3.578 16 8 16C12.4216 16 16 12.422 16 8C16 3.57841 12.422 0 8 0ZM7.76328 11.7443C7.31047 11.7443 6.96297 11.3652 6.96297 10.9335C6.96297 10.4912 7.321 10.1227 7.76328 10.1227C8.20559 10.1227 8.57409 10.4912 8.57409 10.9335C8.57409 11.3652 8.21606 11.7443 7.76328 11.7443ZM8.96372 7.648C8.38456 8.10081 8.374 8.41672 8.374 8.96428C8.374 9.16441 8.26869 9.39606 7.75272 9.39606C7.32094 9.39606 7.17356 9.23809 7.17356 8.69053C7.17356 7.78491 7.57372 7.35316 7.87909 7.08991C8.22659 6.79503 8.81631 6.46863 8.81631 5.9C8.81631 5.41556 8.39509 5.18391 7.86856 5.18391C6.79447 5.18391 7.02616 5.99478 6.45747 5.99478C6.17316 5.99478 5.82566 5.80519 5.82566 5.39453C5.82566 4.82591 6.47853 3.98344 7.90016 3.98344C9.24803 3.98344 10.1431 4.73112 10.1431 5.72097C10.1431 6.71081 9.24803 7.42687 8.96372 7.648Z" fill="#CF9C5A"/>
                                                </svg>
                                                <span>Do the artists get paid?</span>
                                            </div>
                                            <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6641 6L7.9974 10.6667L3.33073 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div id="view2" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                            <div class="accordion-body">
                                                <p>Due to the new COVID-19 regulations, the program will take place in both studio facilities and online.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item" data-animate="fade-right">
                                        <div class="trigger" data-bs-toggle="collapse" data-bs-target="#view3">
                                            <div class="h-list gap-2">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8 0C3.57841 0 0 3.578 0 8C0 12.4215 3.578 16 8 16C12.4216 16 16 12.422 16 8C16 3.57841 12.422 0 8 0ZM7.76328 11.7443C7.31047 11.7443 6.96297 11.3652 6.96297 10.9335C6.96297 10.4912 7.321 10.1227 7.76328 10.1227C8.20559 10.1227 8.57409 10.4912 8.57409 10.9335C8.57409 11.3652 8.21606 11.7443 7.76328 11.7443ZM8.96372 7.648C8.38456 8.10081 8.374 8.41672 8.374 8.96428C8.374 9.16441 8.26869 9.39606 7.75272 9.39606C7.32094 9.39606 7.17356 9.23809 7.17356 8.69053C7.17356 7.78491 7.57372 7.35316 7.87909 7.08991C8.22659 6.79503 8.81631 6.46863 8.81631 5.9C8.81631 5.41556 8.39509 5.18391 7.86856 5.18391C6.79447 5.18391 7.02616 5.99478 6.45747 5.99478C6.17316 5.99478 5.82566 5.80519 5.82566 5.39453C5.82566 4.82591 6.47853 3.98344 7.90016 3.98344C9.24803 3.98344 10.1431 4.73112 10.1431 5.72097C10.1431 6.71081 9.24803 7.42687 8.96372 7.648Z" fill="#CF9C5A"/>
                                                </svg>
                                                <span>Does the centre provide funding and supplies?</span>
                                            </div>
                                            <svg class="arrow" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6641 6L7.9974 10.6667L3.33073 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div id="view3" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                            <div class="accordion-body">
                                                <p>Due to the new COVID-19 regulations, the program will take place in both studio facilities and online.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="contact-info">
                            <div class="container">
                                <h4 class="title" data-animate="fade-up">For any further questions, do not hesitate to contact us at: <a href="mailto:asccairprogram@kndc-kw.org">asccairprogram@kndc-kw.org</a></h4>
                                <div class="grid">
                                    <div class="item" data-animate="fade-up">
                                        <svg class="icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#email_icon"></use>
                                        </svg>
                                        <div>
                                            <h5>E-mail</h5>
                                            <a href="mailto: info@ascckw.com">info@ascckw.com</a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="fade-up">
                                        <svg class="icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#phone_icon"></use>
                                        </svg>
                                        <div>
                                            <h5>Mobile Number</h5>
                                            <a href="tel">25533555</a>
                                        </div>
                                    </div>
                                    <div class="item" data-animate="fade-up">
                                        <svg class="icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use href="#registration_icon"></use>
                                        </svg>
                                        <div>
                                            <h5>Registration</h5>
                                            <a href="#"><u>Registration from here</u></a>
                                        </div>
                                    </div>
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
