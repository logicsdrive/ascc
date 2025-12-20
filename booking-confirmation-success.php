<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php';  ?>
    </head>
    <body>
        <?php
            $title = "Booking Confirmation";
            $image = "images/inner-banner-about.jpg";
            include 'components/page-title-banner.php';
        ?>
        <main class="main-content">
            <div class="booking-confirmation">
                <div class="container">
                    <div class="message success">
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
                        <h2>Thank You</h2>
                        <span>Your Order has Been <em class="text-success">Completed</em></span>
                    </div>
                    <div class="info">
                        <div class="item">
                            <h5>Order Number</h5>
                            <span>4584</span>
                        </div>
                        <div class="item">
                            <h5>Date</h5>
                            <span>May 15, 2025</span>
                        </div>
                        <div class="item">
                            <h5>Email</h5>
                            <span>email@gmail.com</span>
                        </div>
                        <div class="item">
                            <h5>Total</h5>
                            <span>50.00 KD</span>
                        </div>
                        <div class="item">
                            <h5>Payment Method</h5>
                            <span>KNET</span>
                        </div>
                    </div>
                    <div class="knet-seeklogo">
                        <img src="images/knet-seeklogo.jpg" alt="" />
                        <span>Knet Details</span>
                    </div>
                    <table class="table">
                        <tr>
                            <td>Result</td>
                            <td class="text-success">Completed</td>
                        </tr>
                        <tr>
                            <td>Payment ID</td>
                            <td>110510674000233077</td>
                        </tr>
                        <tr>
                            <td>Tracking ID</td>
                            <td>174480846688143</td>
                        </tr>
                        <tr>
                            <td>Transaction ID</td>
                            <td>____</td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td>8.000 KD</td>
                        </tr>
                        <tr>
                            <td>Refrance ID</td>
                            <td>____</td>
                        </tr>
                        <tr>
                            <td>Created AT</td>
                            <td>Aprill 16.2025</td>
                        </tr>
                    </table>
                    <div class="order-details">
                        <h3>Order Details</h3>
                        <div class="item">
                            <span>Product</span>
                            <span>Total</span>
                        </div>
                        <div class="item">
                            <ul class="pro-info">
                                <li>Standed Tour - Arabic *1</li>
                                <li><strong>Booking Sumaary:</strong></li>
                                <li>Standard Tour - arabic 2 hours tour</li>
                                <li>booking on 17/04/2025 pm</li>
                            </ul>
                            <span>K.D8.000</span>
                        </div>
                        <div class="item total">
                            <span>Total</span>
                            <span>K.D 8.000</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary go-back-button">Back To Home</a>
                </div>
            </div>
        </main>
        <?php include 'components/footer.php';  ?>
    </body>
</html>
