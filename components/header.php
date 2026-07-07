<div id="custom-cursor">
    <span id="cursor-text"></span>
</div>
<header class="site-header">
    <div class="container">
        <a href="@index.php" class="logo"><img class="img-fluid" src="images/site_logo.webp" alt="Site Logo" fetchpriority="high" width="141" height="100"></a>
        <div class="right">
            <div class="h-list list">
                <div class="h-list menu-list">
                    <div class="search-field">
                        <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" >
                            <use href="#header_search_icon"></use>
                        </svg>
                        <input type="text" id="header_search" placeholder="Search" class="form-control">
                        <svg class="cross-icon" onclick="document.body.classList.remove('search-opened')" width="11" height="11" viewBox="0 0 11 11" fill="none" >
                            <use href="#search_cross_icon"></use>
                        </svg>
                        <button class="send-icon">
                            <svg width="18" height="11" viewBox="0 0 18 11" fill="none" >
                                <use href="#send_icon"></use>
                            </svg>
                        </button>
                    </div>
                    <svg class="search-icon cursor-pointer" onclick="document.body.classList.toggle('search-opened')" width="17" height="17" viewBox="0 0 17 17" fill="none" >
                        <path d="M15.6017 15.6002L11.9826 11.981M11.9826 11.981C12.6016 11.3619 13.0927 10.627 13.4278 9.81813C13.7628 9.00927 13.9352 8.14234 13.9352 7.26684C13.9352 6.39133 13.7628 5.52441 13.4278 4.71555C13.0927 3.90669 12.6016 3.17174 11.9826 2.55267C11.3635 1.9336 10.6285 1.44252 9.81969 1.10748C9.01083 0.772441 8.1439 0.599998 7.2684 0.599998C6.3929 0.599998 5.52597 0.772441 4.71711 1.10748C3.90825 1.44252 3.17331 1.9336 2.55423 2.55267C1.30396 3.80294 0.601562 5.49868 0.601562 7.26684C0.601563 9.03499 1.30396 10.7307 2.55423 11.981C3.80451 13.2313 5.50025 13.9337 7.2684 13.9337C9.03656 13.9337 10.7323 13.2313 11.9826 11.981Z" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="devider"></span>
                    <a href="ar/@index.php" class="lang-link">العربية</a>
                    <span class="devider"></span>
                    <div class="h-list gap-2 nav-icon cursor-pointer" id="nav-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" >
                            <use href="#site_nav_icon"></use>
                        </svg>
                        <span class="d-none d-md-block">Menu</span>
                    </div>
                </div>
                <div class="h-list sign-list">
                    <div class="h-list gap-2 signin-link" data-bs-toggle="modal" data-bs-target="#signin-modal">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" >
                            <use href="#user_icon"></use>
                        </svg>
                        <span class="d-none d-md-block">Sign In</span>
                    </div>
                    <div class="dropdown profile-dropdown">
                        <a href="javascript: void(0);" class="profile-link btn-toggler" data-bs-offset="0,10" data-bs-toggle="dropdown">
                            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" >
                                <use href="#user_icon"></use>
                            </svg>
                            <span>My Profile</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="profile-info">
                                <div class="profile-image">
                                    <img src="images/user-img.png" alt="" loading="lazy" class="img-fluid">
                                </div>
                                <div>
                                    <div class="profile-name">Murad Mohamed</div>
                                    <p>Murad Mohamed@gmail.com</p>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#">
                                    <img src="images/profile.svg" alt="" class="img-fluid" loading="lazy">

                                    My Profile
                                </a></li>
                                <li><a href="#">
                                    <img src="images/booking-ticket.svg" alt="" class="img-fluid" loading="lazy">


                                    My Bookings
                                </a></li>
                                <li><a href="#">
                                   <img src="images/logout.svg" alt="" class="img-fluid" loading="lazy">

                                    Sign Out
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="btn btn-primary" data-bs-offset="0,10" data-bs-toggle="dropdown">Book Now</a>
                        <div class="dropdown-menu book-now-dropdown dropdown-menu-end">
                            <a href="tickets.php" class="dropdown-item">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" >
                                    <use href="#ticket_icon"></use>
                                </svg>
                                <span>Tickets</span>
                            </a>
                            <a href="rentals.php" class="dropdown-item">
                                <svg class="icon" width="18" height="18" viewBox="0 0 18 18" fill="none" >
                                    <use href="#venue_icon"></use>
                                </svg>
                                <span>Venue Higher</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="modal fade content-modal" id="content-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body loading"></div>
        </div>
    </div>
</div>
<?php include 'components/navigation.php';  ?>
<!-- Modal -->
<div class="modal fade signin-modal" id="signin-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript: avoid(0)" class="content">
                    <h2 class="section-title mb-4">Sign in</h2>
                    <div class="form-element mb-3">
                        <label class="control-label">Email</label>
                        <input type="text" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-element mb-3 password_wrapper">
                        <svg class="icon" onclick="ascc_app.togglePassword(this);" width="20" height="20" viewBox="0 0 20 20" fill="none" >
                            <use href="#eye_icon"></use>
                        </svg>
                        <label class="control-label">Password</label>
                        <input type="password" placeholder="************" class="form-control">
                    </div>
                    <a href="#forgot-password-modal" data-bs-toggle="modal"  class="forgot-link">Forgot Password</a>
                    <div class="h-list gap-3 py-4">
                        <a href="javascript: void(0);" class="btn btn-outline-dark" data-bs-dismiss="modal">Back</a>
                        <a href="profile.php" class="btn btn-primary flex-grow-1">Sign In</a>
                    </div>
                    <div class="dont-have-account">Don’t have an account <a href="#signup-modal" data-bs-toggle="modal">Register Now</a></div>
                </form>
                <figure class="image">
                    <img src="images/education.jpg" alt="" loading="lazy">
                </figure>
            </div>
        </div>
    </div>
</div>
<div class="modal fade signin-modal signup-modal" id="signup-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript: avoid(0)" class="content">
                    <h2 class="section-title mb-4">Register</h2>
                    <div class="row g-3">
                        <div class="col-sm-6 mb-3">
                            <div class="form-element">
                                <label class="control-label">First Name</label>
                                <input type="text" placeholder="Enter Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-element">
                                <label class="control-label">Last Name</label>
                                <input type="text" placeholder="Enter Last Name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-element mb-3">
                        <label class="control-label">Email</label>
                        <input type="text" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-element password_wrapper">
                        <svg class="icon" onclick="ascc_app.togglePassword(this);" width="20" height="20" viewBox="0 0 20 20" fill="none" >
                            <use href="#eye_icon"></use>
                        </svg>
                        <label class="control-label">Password</label>
                        <input type="password" placeholder="************" class="form-control">
                    </div>
                    <div class="h-list gap-3 py-4">
                        <a href="#signin-modal" class="btn btn-outline-dark" data-bs-toggle="modal">Back</a>
                        <a href="profile.php" class="btn btn-primary flex-grow-1">Sign In</a>
                    </div>
                    <div class="dont-have-account">Already have an account <a href="#signin-modal" data-bs-toggle="modal">Sign In</a></div>
                </form>
                <figure class="image">
                    <img src="images/education.jpg" alt="" loading="lazy">
                </figure>
            </div>
        </div>
    </div>
</div>
<div class="modal fade forgot-password-modal" id="forgot-password-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript: avoid(0)" class="content">
                    <h2 class="section-title mb-4">Forgot Passward</h2>
                    <div class="form-element mb-4">
                        <label class="control-label">Email</label>
                        <input type="text" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="h-list gap-3">
                        <a href="#signin-modal" class="btn btn-outline-dark" data-bs-toggle="modal">Back</a>
                        <a class="btn btn-primary flex-grow-1" href="#task-finished-modal" data-bs-toggle="modal">Change</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade change-password-modal" id="change-password-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript: avoid(0)" class="content">
                    <h2 class="title">Change Password</h2>
                    <div class="form-element mb-3 password_wrapper">
                        <svg class="icon" onclick="ascc_app.togglePassword(this);" width="20" height="20" viewBox="0 0 20 20" fill="none" >
                            <use href="#eye_icon"></use>
                        </svg>
                        <label class="control-label">Current Password</label>
                        <input type="password" placeholder="************" class="form-control">
                    </div>
                    <div class="form-element mb-4 password_wrapper">
                        <svg class="icon" onclick="ascc_app.togglePassword(this);" width="20" height="20" viewBox="0 0 20 20" fill="none" >
                            <use href="#eye_icon"></use>
                        </svg>
                        <label class="control-label">New Password</label>
                        <input type="password" placeholder="************" class="form-control">
                    </div>
                    <div class="h-list gap-3 pt-1">
                        <button class="btn btn-outline-dark" data-bs-dismiss="modal">Back</button>
                        <button class="btn btn-primary flex-grow-1">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade task-finished-modal" id="task-finished-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript: avoid(0)" class="content">
                    <svg class="mb-4 mx-auto" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <g clip-path="url(#clip0_562_7423)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0C13.4531 0 0 13.4531 0 30C0 46.5469 13.4531 60 30 60C46.5469 60 60 46.5469 60 30C60 13.4531 46.5469 0 30 0Z" fill="#CF9C5A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5059 19.8867C45.2324 20.6133 45.2324 21.8086 44.5059 22.5352L26.9277 40.1133C26.5645 40.4766 26.084 40.6641 25.6035 40.6641C25.123 40.6641 24.6426 40.4766 24.2793 40.1133L15.4902 31.3242C14.7637 30.5977 14.7637 29.4023 15.4902 28.6758C16.2168 27.9492 17.4121 27.9492 18.1387 28.6758L25.6035 36.1406L41.8574 19.8867C42.584 19.1484 43.7793 19.1484 44.5059 19.8867Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath>
                                <rect width="60" height="60" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h2 class="title mb-2">Done</h2>
                    <p>Password reset link has been sent to your email. Please check your email and login again.</p>
                    <div class="h-list gap-3 pt-1">
                        <button class="btn btn-outline-dark" data-bs-dismiss="modal">Back</button>
                        <button class="btn btn-primary flex-grow-1">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade task-finished-modal" id="thankyou-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form class="content">
                    <svg class="mb-4 mx-auto" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <g clip-path="url(#clip0_562_7423)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0C13.4531 0 0 13.4531 0 30C0 46.5469 13.4531 60 30 60C46.5469 60 60 46.5469 60 30C60 13.4531 46.5469 0 30 0Z" fill="#CF9C5A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5059 19.8867C45.2324 20.6133 45.2324 21.8086 44.5059 22.5352L26.9277 40.1133C26.5645 40.4766 26.084 40.6641 25.6035 40.6641C25.123 40.6641 24.6426 40.4766 24.2793 40.1133L15.4902 31.3242C14.7637 30.5977 14.7637 29.4023 15.4902 28.6758C16.2168 27.9492 17.4121 27.9492 18.1387 28.6758L25.6035 36.1406L41.8574 19.8867C42.584 19.1484 43.7793 19.1484 44.5059 19.8867Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath >
                                <rect width="60" height="60" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h2 class="title mb-2">Done</h2>
                    <p>Your message has been sent successfully Thank you for reaching out!</p>
                    <div class="h-list gap-3 pt-1">
                        <button class="btn btn-primary flex-grow-1" data-bs-dismiss="modal">Done</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade task-finished-modal" id="booking-notice-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="javascript: avoid(0)" class="content">
                    <svg class="mb-4 mx-auto" width="60" height="61" viewBox="0 0 60 61" fill="none">
                        <path d="M30 60C46.5685 60 60 46.5685 60 30C60 13.4315 46.5685 0 30 0C13.4315 0 0 13.4315 0 30C0 46.5685 13.4315 60 30 60Z" fill="#CF9C5A"/>
                        <path d="M30 34.8706C31.025 34.8706 31.875 34.0206 31.875 32.9956V20.4956C31.875 19.4706 31.025 18.6206 30 18.6206C28.975 18.6206 28.125 19.4706 28.125 20.4956V32.9956C28.125 34.0206 28.975 34.8706 30 34.8706Z" fill="white"/>
                        <path d="M32.3 39.5456C32.175 39.2456 32 38.9706 31.775 38.7206C31.525 38.4956 31.25 38.3206 30.95 38.1956C30.35 37.9456 29.65 37.9456 29.05 38.1956C28.75 38.3206 28.475 38.4956 28.225 38.7206C28 38.9706 27.825 39.2456 27.7 39.5456C27.575 39.8456 27.5 40.1706 27.5 40.4956C27.5 40.8206 27.575 41.1456 27.7 41.4456C27.825 41.7706 28 42.0206 28.225 42.2706C28.475 42.4956 28.75 42.6706 29.05 42.7956C29.35 42.9206 29.675 42.9956 30 42.9956C30.325 42.9956 30.65 42.9206 30.95 42.7956C31.25 42.6706 31.525 42.4956 31.775 42.2706C32 42.0206 32.175 41.7706 32.3 41.4456C32.425 41.1456 32.5 40.8206 32.5 40.4956C32.5 40.1706 32.425 39.8456 32.3 39.5456Z" fill="white"/>
                    </svg>

                    <h2 class="title mb-2">booking NOTICE</h2>
                    <p>Submitting this form is not confirmation of your school booking</p>
                    <div class="h-list gap-3 pt-1">
                        <button class="btn btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary flex-grow-1" onclick="window.location.href='confirmation.php'">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>