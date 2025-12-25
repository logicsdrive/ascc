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
                    $title = "Booking Confirmation";
                    $image = "images/inner-banner-about.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="booking-confirmation">
                        <div class="container">
                            <div class="message success">
                                <svg class="mx-auto" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 59C46.0163 59 59 46.0163 59 30C59 13.9837 46.0163 1 30 1C13.9837 1 1 13.9837 1 30C1 46.0163 13.9837 59 30 59Z" fill="#DA1414"/>
                                    <path d="M34.2171 30.0001L41.5901 37.3731C41.8515 37.6355 41.9982 37.9907 41.9982 38.3611C41.9982 38.7314 41.8515 39.0867 41.5901 39.3491L39.3481 41.5911C39.0857 41.8524 38.7305 41.9992 38.3601 41.9992C37.9898 41.9992 37.6345 41.8524 37.3721 41.5911L29.9991 34.2181L22.6261 41.5911C22.3637 41.8524 22.0085 41.9992 21.6381 41.9992C21.2678 41.9992 20.9125 41.8524 20.6501 41.5911L18.4081 39.3491C18.1467 39.0867 18 38.7314 18 38.3611C18 37.9907 18.1467 37.6355 18.4081 37.3731L25.7811 30.0001L18.4081 22.6271C18.1467 22.3647 18 22.0094 18 21.6391C18 21.2687 18.1467 20.9135 18.4081 20.6511L20.6501 18.4091C20.9125 18.1477 21.2678 18.001 21.6381 18.001C22.0085 18.001 22.3637 18.1477 22.6261 18.4091L29.9991 25.7821L37.3721 18.4091C37.6345 18.1477 37.9898 18.001 38.3601 18.001C38.7305 18.001 39.0857 18.1477 39.3481 18.4091L41.5901 20.6511C41.8515 20.9135 41.9982 21.2687 41.9982 21.6391C41.9982 22.0094 41.8515 22.3647 41.5901 22.6271L34.2171 30.0001Z" fill="white"/>
                                </svg>
                                <h2>We Are Sorry</h2>
                                <span>Your Order has Been <em class="text-danger">Cancelled</em></span>
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
                                    <td class="text-danger">Cancelled</td>
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
            </div>
        </div>
    </body>
</html>
