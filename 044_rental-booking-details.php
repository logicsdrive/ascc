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
                    <div class="booking-details">
                        <div class="retalDetails">
                            <div class="columns">
                                <div class="left">
                                    <video class="background-video" autoplay muted loop playsinline>
                                        <source src="images/rentals.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="section-title mb-3" >rental spaces </h2>
                                    <p>Explore Kuwalt's rich history on an all-inclusive tour of Al Salam Palace Museum.</p>
                                    <div class="important-notes">
                                        <h3 class="title" >Important Notice</h3>
                                        <ul>
                                            <li>This request is not a confirmed booking.</li>
                                            <li>Requests are subject to ASCC approval.</li>
                                            <li>Event proposal is required.</li>
                                            <li>Civil ID copy is required.</li>
                                            <li>Payment (if applicable) will be requested after approval.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="middle">
                                    <div class="steps">
                                        <ul>
                                            <li class="current" data-step="1">
                                                <span>1</span>
                                                <p>Event details</p>
                                            </li>
                                            <li data-step="2">
                                                <span>2</span>
                                                <p>entry & attendance</p>
                                            </li>
                                             <li data-step="3">
                                                <span>3</span>
                                                <p>contact & company info</p>
                                            </li>
                                             <li data-step="4">
                                                <span>4</span>
                                                <p>Book & confirm</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="stepsWrapper">
                                        <div class="steps__item item1 active" data-step="1">
                                            <h3>Selected space</h3>
                                            <div class="card">
                                                <div class="card__left">
                                                    <div class="image">
                                                        <img src="images/trans_block_1_image.webp" alt="" class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <p>Arabic Islamic science /fine arts centre</p>
                                                        <h4>Lecture Hall</h4>
                                                        <p>Capacity: 30-125</p>
                                                    </div>
                                                </div>
                                                <div class="card__right">
                                                    <h5><img src="images/coin.svg" alt="" class="img-fluid">5 K / day</h5>
                                                </div>
                                            </div>
                                            <h3>event DETAILS</h3>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element full gray">
                                                        <label class="control-label">Country</label>
                                                        <select class="selectpicker">
                                                            <option>Kuwait</option>
                                                            <option>Pakistan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                     <div class="form-element">
                                                        <label class="control-label">Event Title</label>
                                                        <input type="text" value="Digital Workshop" class="form-control">
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
                                                        <label class="control-label">Number of days of the event</label>
                                                        <input type="text" value="3 Days" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                     <div class="form-element">
                                                        <label class="control-label">Event start at</label>
                                                         <input type="text" class="form-control timepicker" id="starttime" value="2:00 PM" >  
                                                         <img class="icon" src="images/time.svg" alt="">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                     <div class="form-element">
                                                        <label class="control-label">Event end at</label>
                                                         <input type="text" class="form-control timepicker" id="endtime" value="3:00 PM" >  
                                                         <img class="icon" src="images/time.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                     <div class="form-element">
                                                        <label class="control-label">Event Proposal</label>
                                                          <div class="dropzone form-control">
                                                            <form action="/file-upload" class="dropzone_upload">
                                                                <div class="dz-default dz-message">
                                                                    <div class="dz-button">
                                                                        <img src="images/upload-btn.svg" alt="" class="img-fluid">
                                                                        <h4>Click to upload PDF</h4>
                                                                        <p>or drag and drop</p>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="inline-buttons d-flex align-items-center justify-content-end">
                                                <button class="btn btn-primary nextStep">Next Step</button>
                                            </div>
                                        </div>
                                        <div class="steps__item item2" data-step="2">
                                            <h3>Does registration require for this event? </h3>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="status" id="Yes" value="Yes" checked="">
                                                        <label class="form-check-label" for="Yes">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="status" id="No" value="No">
                                                        <label class="form-check-label" for="No">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                            (In case of General Invitations, Kindly note that you must provide attendees list for gate pass) 
                                            </div>
                                            <h3>Access is available to the following groups: </h3>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="groups" id="one" value="one" checked="">
                                                        <label class="form-check-label" for="one">
                                                           Event ticket holders 
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="groups" id="two" value="two">
                                                        <label class="form-check-label" for="two">
                                                           Event ticket holders + special invitations
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="groups" id="three" value="three">
                                                        <label class="form-check-label" for="three">
                                                           Special invitations 
                                                        </label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="groups" id="four" value="four">
                                                        <label class="form-check-label" for="four">
                                                           General invitation 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                 <div class="col-md-12 mb-3">
                                                     <div class="form-element">
                                                        <label class="control-label">Expected Number of Attendees</label>
                                                        <input type="text" value="20" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="inline-buttons d-flex align-items-center justify-content-between">
                                                <button class="btn btn-outline-primary backStep">Back</button>
                                                <button class="btn btn-primary nextStep">Next Step</button>
                                            </div>
                                        </div>
                                        <div class="steps__item item3" data-step="3">
                                            <h3>Point of Contact</h3>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Full Name</label>
                                                         <input type="text" class="form-control" value="Workshops" >  
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element full gray">
                                                        <label class="control-label">Job Title</label>
                                                        <select class="selectpicker">
                                                            <option>Engineering</option>
                                                            <option>Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Email</label>
                                                         <input type="email" class="form-control" value="Mohamednagy@gmail.com" >  
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element phone-field dropdown">
                                                        <label class="control-label">Phone</label>
                                                        <input type="tel" id="phone" class="form-control phone-input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Office Contact Number</label>
                                                         <input type="tel" class="form-control" value="+9653122242" >  
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                     <div class="form-element">
                                                        <label class="control-label">Copy of Civil ID</label>
                                                          <div class="dropzone form-control">
                                                            <form action="/file-upload" class="dropzone_upload">
                                                                <div class="dz-default dz-message">
                                                                    <div class="dz-button">
                                                                        <img src="images/upload-btn.svg" alt="" class="img-fluid">
                                                                        <h4>Click to upload PDF or PNG</h4>
                                                                        <p>or drag and drop</p>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3>Company Information’s</h3> 
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Company Name</label>
                                                         <input type="text" class="form-control" value="Kuwait Net">  
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Company Address </label>
                                                         <input type="text" class="form-control" value="12 street name">  
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Company’s Scope of Work </label>
                                                         <input type="text" class="form-control" value="Technology">  
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element">
                                                        <label class="control-label">Company Website </label>
                                                         <input type="text" class="form-control" value="www.Kuwait Net.com">  
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-element full gray">
                                                        <label class="control-label">Type of company</label>
                                                        <select class="selectpicker">
                                                            <option>Private sector </option>
                                                            <option>Option 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inline-buttons d-flex align-items-center justify-content-between">
                                                <button class="btn btn-outline-primary backStep">Back</button>
                                                <button class="btn btn-primary nextStep">Next Step</button>
                                            </div>
                                        </div>
                                        <div class="steps__item item4" data-step="4">
                                            <h3>Book your tour</h3>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <div class="form-element">
                                                        <label class="control-label">Start Date</label>
                                                        <input type="text" value="13-09-2025" readonly class="form-control js-calendar">
                                                        <img class="icon" src="images/calender_icon.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                             <h3>Available hours: (Sundays to Thursdays) </h3>
                                             <div class="row mb-3">
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="time" id="time1" value="time1" checked="">
                                                        <label class="form-check-label" for="time1">
                                                            9:00 Am – 10:00 Am 
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="time" id="time2" value="time2">
                                                        <label class="form-check-label" for="time2">
                                                           11:00 Am – 12:00 Am 
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="time" id="time3" value="time3">
                                                        <label class="form-check-label" for="time3">
                                                           10:00 Am – 11:00 Am
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-check customRadio">
                                                        <input class="form-check-input" type="radio" name="time" id="time2" value="time2">
                                                        <label class="form-check-label" for="time2">
                                                           12:00 Pm – 1:00 Pm
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="check">
                                                    <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                                                        <path d="M11.4674 0.800049L4.13411 8.13338L0.800781 4.80005" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                <label class="lbl">I certify that all information’s are correct<label>

                                            </div>
                                             <div class="inline-buttons d-flex align-items-center justify-content-between">
                                                <button class="btn btn-outline-primary backStep">Back</button>
                                                <button class="btn btn-primary submit" onclick="window.location.href='request-confirmation.php'">request-confirmation-success.php</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'components/footer.php';  ?>
                 
                 
                <script>
                    $(document).ready(function () {

                        let currentStep = 1;

                        // First step show
                        $('.steps__item[data-step="1"]').addClass('active');
                        updateSteps();

                        // Next button
                        $('.nextStep').on('click', function () {

                            let totalSteps = $('.steps__item').length;

                            if (currentStep < totalSteps) {
                                currentStep++;

                                $('.steps__item').removeClass('active');
                                $('.steps__item[data-step="' + currentStep + '"]').addClass('active');

                                updateSteps();
                            }
                        });

                        // Back button
                        $('.backStep').on('click', function () {

                            if (currentStep > 1) {
                                currentStep--;

                                $('.steps__item').removeClass('active');
                                $('.steps__item[data-step="' + currentStep + '"]').addClass('active');

                                updateSteps();
                            }
                        });

                        // Update step indicators
                        function updateSteps() {

                            $('.steps ul li').removeClass('current completed');

                            $('.steps ul li').each(function () {

                                let step = parseInt($(this).data('step'));

                                if (step < currentStep) {
                                    $(this).addClass('completed');
                                }

                                if (step === currentStep) {
                                    $(this).addClass('current');
                                }
                            });
                        }
                    
                    });
                </script>
            </div>
        </div>
    </body>
</html>
