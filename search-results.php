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
                    $title = "Search Result";
                    $image = "images/inner-banner-about.jpg";
                    include 'components/page-title-banner.php';
                ?>
                <main class="main-content">
                    <div class="search-results">
                        <div class="container">
                            <div class="search-field mb-5">
                                <svg class="icon" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.7502 22.75L18.0453 18.0451M18.0453 18.0451C18.8501 17.2403 19.4885 16.2849 19.9241 15.2334C20.3596 14.1818 20.5838 13.0548 20.5838 11.9167C20.5838 10.7785 20.3596 9.65152 19.9241 8.6C19.4885 7.54849 18.8501 6.59306 18.0453 5.78826C17.2405 4.98346 16.2851 4.34507 15.2336 3.90951C14.182 3.47396 13.055 3.24979 11.9169 3.24979C10.7787 3.24979 9.65173 3.47396 8.60021 3.90951C7.5487 4.34507 6.59327 4.98346 5.78847 5.78826C4.16312 7.41362 3.25 9.61807 3.25 11.9167C3.25 14.2153 4.16312 16.4197 5.78847 18.0451C7.41383 19.6705 9.61829 20.5836 11.9169 20.5836C14.2155 20.5836 16.4199 19.6705 18.0453 18.0451Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <input type="search" value="Diwan of Beasts" placeholder="Search" class="form-control" />
                            </div>
                            <div class="grid">
                                <?php $color = "rgba(207, 156, 90, 1)"; $icon="property"; include 'components/category_item_v2.php'; ?>
                                <?php $color = "rgba(188, 173, 54, 1)"; $icon="sea"; include 'components/category_item_v2.php'; ?>
                                <?php $color = "rgba(21, 53, 126, 1)"; $icon="tech"; include 'components/category_item_v2.php'; ?>
                                <?php $color = "rgba(86, 152, 66, 1)"; $icon="property"; include 'components/category_item_v2.php'; ?>
                                <?php $color = "rgba(204, 38, 38, 1)"; $icon="property"; include 'components/category_item_v2.php'; ?>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'components/footer.php';  ?>
            </div>
        </div>
    </body>
</html>
