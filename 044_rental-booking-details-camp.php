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
                    <div class="booking-details camp">
                        <div class="retalDetails">
                            <div class="columns">
                                <div class="left">
                                    <video class="background-video" autoplay muted loop playsinline>
                                        <source src="images/rentals.mp4" type="video/mp4">
                                    </video>
                                    <h2 class="section-title mb-3" >Winter camp </h2>
                                    <p>Explore Kuwalt's rich history on an all-inclusive tour of Al Salam Palace Museum.</p>
                                    <div class="important-notes">
                                        <h3 class="title" >Important Notice</h3>
                                        <ul>
                                            <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 

                                            </li>
                                            <li>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </li>
                                            <li>As opposed to using 'Content here, content here making it look like readable English.</li>
                                            <li>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</li>
                                            <li>A search for 'lorem ipsum' will uncover many web sites still in their infancy.</li>
                                            <li>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="middle">
                                    <div class="middleWrapper">
                                        <div class="middleWrapper__left">
                                            <div class="steps">
                                                <ul>
                                                    <li class="current" data-step="1">
                                                        <span>1</span>
                                                        <p>Camp preferences</p>
                                                    </li>
                                                    <li data-step="2">
                                                        <span>2</span>
                                                        <p>Child & guardian</p>
                                                    </li>
                                                    <li data-step="3">
                                                        <span>3</span>
                                                        <p>Medical & confirm</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="stepsWrapper">
                                                <div class="steps__item item1 active" data-step="1">
                                                    <h3>Parent information</h3>
                                                    <div class="row mb-3">
                                                        <div class="col-12 mb-3">
                                                             <div class="form-element">
                                                                <label class="control-label">Parent Name</label>
                                                                <input type="text" value="Mohamed Nagy" class="form-control">
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
                                                    <h3>CAMP PREFERENCES</h3>
                                                    <div class="form-group">
                                                        <label class="control-label">How many kids would you like to register?</label>
                                                        <ul class="custom-radio">
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="child" checked>
                                                                    <span>1</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="child">
                                                                    <span>2</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="child">
                                                                    <span>3</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group m-0">
                                                        <label class="control-label">Registration Period</label>
                                                         <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-check customRadio">
                                                                    <input class="form-check-input" type="checkbox" name="Registration" id="Registration1" value="Registration1" checked="">
                                                                    <label class="form-check-label" for="Registration1">
                                                                        Week 1
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-check customRadio">
                                                                    <input class="form-check-input" type="checkbox" name="Registration" id="Registration2" value="Registration2">
                                                                    <label class="form-check-label" for="Registration2">
                                                                     Week 2
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label">Preferred Language</label>
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
                                                    <div class="inline-buttons d-flex align-items-center justify-content-end">
                                                        <button class="btn btn-primary nextStep">Next Step</button>
                                                    </div>
                                                </div>
                                                <div class="steps__item item2" data-step="2">
                                                    <h3>Child Information </h3>
                                                    <div class="form-group">
                                                        <label class="control-label">Child 1 Info</label>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-element">
                                                                    <label class="control-label">Omar Full Name</label>
                                                                    <input type="text" class="form-control" value="Omar Mohamed">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-element">
                                                                    <label class="control-label">Age</label>
                                                                    <input type="text" class="form-control" value="12 years">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-element full gray">
                                                                    <label class="control-label">Gender</label>
                                                                    <select class="selectpicker">
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-element">
                                                                    <label class="control-label">Date of Birth</label>
                                                                    <input type="text" value="13-09-2025" readonly class="form-control js-calendar">
                                                                    <img class="icon" src="images/calender_icon.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-element customUpload">
                                                                    <label class="control-label">Child Picture</label>
                                                                    <div class="uploadWrapper">
                                                                        <div class="imageUpload">
                                                                            <input type="file" accept="image/png">
                                                                        </div>
                                                                        <p>Click to upload png</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-element customUpload">
                                                                    <label class="control-label">Child Civil ID</label>
                                                                    <div class="uploadWrapper">
                                                                        <div class="imageUpload">
                                                                            <input type="file" accept="image/png">
                                                                        </div>
                                                                        <p>Click to upload png</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3>Parent Contact Info</h3>
                                                        <div class="form-group">
                                                            <label class="control-label">Father / Guardian 1</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element phone-field dropdown">
                                                                        <label class="control-label">Phone</label>
                                                                        <input type="tel" id="phone" class="form-control phone-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element">
                                                                        <label class="control-label">Workplace</label>
                                                                        <input type="text" class="form-control" value="Place Description">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Mother / Guardian 2</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element phone-field dropdown">
                                                                        <label class="control-label">Phone</label>
                                                                        <input type="tel" id="phone" class="form-control phone-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element">
                                                                        <label class="control-label">Workplace</label>
                                                                        <input type="text" class="form-control" value="Place Description">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Emergency Contact</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element phone-field dropdown">
                                                                        <label class="control-label">Phone</label>
                                                                        <input type="tel" id="phone" class="form-control phone-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element">
                                                                        <label class="control-label">Relation</label>
                                                                        <input type="text" class="form-control" value="Brother">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="inline-buttons d-flex align-items-center justify-content-between">
                                                        <button class="btn btn-outline-primary backStep">Back</button>
                                                        <button class="btn btn-primary nextStep">Next Step</button>
                                                    </div>
                                                </div>
                                                <div class="steps__item item3" data-step="3">
                                                    <h3>Medical Information</h3>
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <div class="form-element">
                                                                <label class="control-label">Any allergies or medical conditions?</label>
                                                                <input type="text" class="form-control" value="No, don’t have any medical history">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <div class="form-element">
                                                                <label class="control-label">Current Medications (if any) </label>
                                                                <input type="text" class="form-control" value="Don’t have">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3>Authorized Pickup Persons</h3>
                                                    <div class="persons">
                                                        <div class="form-group">
                                                            <label class="control-label">Person 1</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element">
                                                                        <label class="control-label">Name </label>
                                                                        <input type="text" class="form-control" value="Omar Mohamed">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element phone-field dropdown">
                                                                        <label class="control-label">Phone</label>
                                                                        <input type="tel" id="phone" class="form-control phone-input">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Person 2</label>
                                                            <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element">
                                                                        <label class="control-label">Name </label>
                                                                        <input type="text" class="form-control" value="Omar Mohamed">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 mb-3">
                                                                    <div class="form-element phone-field dropdown">
                                                                        <label class="control-label">Phone</label>
                                                                        <input type="tel" id="phone" class="form-control phone-input">
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <a href="#" class="addPerson">Add Another Person</a>
                                                    </div>
                                                    <h3>Additional Information </h3>
                                                    <div class="row mb-3">
                                                        <div class="col-12 mb-3">
                                                            <div class="form-element">
                                                                <label class="control-label">Any additional information we should know</label>
                                                                <input type="text" class="form-control" value="NO">
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
                                                        <label class="lbl">I agree to the <a href="#">waiver and release terms</a><label>

                                                    </div>
                                                    <div class="inline-buttons d-flex align-items-center justify-content-between">
                                                        <button class="btn btn-outline-primary backStep">Back</button>
                                                        <button class="btn btn-primary" onclick="window.location.href='registration-confirmation.php'">Submit Registration</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="middleWrapper__right">
                                            <div class="your-order">
                                                <h3 class="title">Your registration summary</h3>
                                                <div class="tdata">
                                                    <div class="trow">
                                                        <div class="tcell">Winter camp registration</div>
                                                        <div class="tcell">&nbsp;</div>
                                                    </div>
                                                    <div class="trow">
                                                        <div class="tcell">Kids </div>
                                                        <div class="tcell"> Week1</div>
                                                    </div>
                                                    <div class="trow">
                                                        <div class="tcell">Weeks</div>
                                                        <div class="tcell"> Week1</div>
                                                    </div>
                                                    <div class="trow">
                                                        <div class="tcell">Price per child / week</div>
                                                        <div class="tcell">K.D 50</div>
                                                    </div>
                                                    <div class="trow total">
                                                        <div class="tcell">Estimated Total</div>
                                                        <div class="tcell">K.D 15000</div>
                                                    </div>
                                                </div>
                                                <p>Payment will be confirmed later by ASCC team</p>
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
