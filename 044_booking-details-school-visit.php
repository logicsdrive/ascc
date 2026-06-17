<?php
$pageTitle = "ASCC - Booking details";
$pageDescription = "ASCC";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body class="booking-details-page">
        <?php include 'components/header.php';  ?> 
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <?php
                    $title = "Booking details";
                    $image = "images/booking-details-banner.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content"> 
                    <div class="booking-details visit">
                        <div class="columns">
                            <div class="left">
                                <video class="background-video" autoplay muted loop playsinline>
                                    <source src="images/rentals.mp4" type="video/mp4">
                                </video>
                                <h2 class="section-title mb-3" >School Visit </h2>
                                <p>Explore Kuwalt's rich history on an all-inclusive tour of Al Salam Palace Museum.</p>
                                <div class="important-notes">
                                    <h3 class="title" >Important Notice</h3>
                                    <ul>
                                        <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</li>
                                        <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </li>
                                        <li>As opposed to using 'Content here, content here making it look like readable English.</li>
                                        <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</li>
                                        <li>A search for 'lorem ipsum' will uncover many web sites still in their infancy.</li>
                                        <li>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="middle">
                                <h3>Contact Details</h3>
                                <div class="row pb-3">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">First Name</label>
                                            <input type="text" value="Murad" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" value="Mohamed" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">Email</label>
                                            <input type="email" value="Mohamednagy@gmail.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element phone-field dropdown">
                                            <label class="control-label">Phone</label>
                                            <input type="tel" id="phone" class="form-control phone-input">
                                        </div>
                                    </div>
                                </div>
                                <h3>Visit Details</h3>
                                <div class="row">
                                     <div class="col-12 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">School Name</label>
                                            <input type="text" value="School Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element full gray">
                                            <label class="control-label">Number of students</label>
                                            <select class="selectpicker">
                                                <option>20</option>
                                                <option>30</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">Number of staff</label>
                                            <input type="text" value="3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">Date</label>
                                            <input type="text" value="13-09-2025" readonly class="form-control js-calendar">
                                            <img class="icon" src="images/calender_icon.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">Time</label>
                                            <input type="text" class="form-control timepicker" id="starttime" value="2:00 PM" >  
                                            <img class="icon" src="images/time.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-element">
                                            <label class="control-label">Grade</label>
                                            <input type="text" value="Elementary" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label"> Language</label>
                                                <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="Language" id="English" value="English" checked="">
                                                        <label class="form-check-label" for="English">
                                                            English
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="Language" id="Arabic" value="Arabic">
                                                        <label class="form-check-label" for="Arabic">
                                                            Arabic
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" checked>
                                    <span class="check">
                                        <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                                            <path d="M11.4674 0.800049L4.13411 8.13338L0.800781 4.80005" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                    <label class="lbl">I understand that submitting this form does’t confirm my school booking.<label>

                                </div>
                                <div class="button-row mt-5 text-center text-md-end">
                                     <button class="btn btn-primary submit" data-bs-toggle="modal" data-bs-target="#booking-notice-modal">Submit Request</button>
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
