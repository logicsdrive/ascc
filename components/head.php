<title><?= isset($pageTitle) ? $pageTitle : 'ASCC - Welcome'; ?></title>
<!-- Basic Page Needs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle : 'ASCC - Welcome'; ?>">
<meta property="og:description" content="<?= isset($pageDescription) ? $pageDescription : 'ASCC'; ?>">
<meta property="og:image" content="https://dev.kuwaitnet.net/atif/ascc/images/post-pticher.png">
<meta property="og:url" content="https://dev.kuwaitnet.net/atif/ascc/">
<meta property="og:type" content="website">

<!-- Preconnect (IMPORTANT for speed) -->
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- SEO -->

<meta name="description" content="<?= isset($pageDescription) ? $pageDescription : 'ASCC'; ?>">
<meta name="author" content="Your Name">

<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">

<!-- CSS (critical first) -->
<link rel="stylesheet" href="./css/custom-bootstrap.css">
<link rel="stylesheet" href="css/main.css">

<!-- Plugin CSS (non-critical last) -->
<link rel="stylesheet" href="./css/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/css/intlTelInput.css">