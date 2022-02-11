<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Lapo - Banking & Business Loan Bootstrap-5 HTML Template</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/elegant-icons.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/all.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/nouislider.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body data-spy="scroll" data-offset="70">
    <!-- Preloader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/logo/Logo-2.png" alt="">
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <!-- Header -->
    <header class="header">
        <div class="header-menu header-menu-4" id="sticky">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <a class="navbar-brand sticky_logo" href="index.html">
                        <img class="main" src="img/logo/Logo.png" srcset="img/logo/Logo@2x.png 2x" alt="logo">
                        <img class="sticky" src="img/logo/Logo-2.png" srcset="img/logo/Logo-2@2x.png 2x" alt="logo">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_toggle">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="hamburger-cross">
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav menu ms-auto">
                            <li class="nav-item dropdown submenu ">
                                <a href="index.php" class="nav-link dropdown-toggle <?= ($page === 'Home') ? 'active' : ''; ?>" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true"
                                    data-bs-toggle="dropdown"></i>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle <?= ($page === 'Loan') ? 'active' : ''; ?>" href="loan.php" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Loan
                                </a>
                                <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                    data-bs-toggle="dropdown"></i>

                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="loan.php">Get loan</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle <?= ($page === 'Contact') ? 'active' : ''; ?>" href="contact.php" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Contact Us
                                </a>
                            </li>

                        </ul>
                        <a class="theme-btn theme-btn-rounded-2 theme-btn-alt" href="loan.php">Get Loan</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header end-->