<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="../social-image.png" />
<meta name="format-detection" content="telephone=no">
<title>Naxum - Technical Assessment </title>
<!-- Favicon icon -->

<link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL ?>/assets/images/favicon.png">
<link href="<?= BASE_URL ?>/public/assets/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css" />
<link href="<?= BASE_URL ?>/public/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="<?= BASE_URL ?>/public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="<?= BASE_URL ?>/public/assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />
<link href="<?= BASE_URL ?>/public/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
	Nav header start
***********************************-->
        <div class="nav-header">
            <a href="/">
                <h1 class="text-light text-center" style="color: white">NaXuM</h1>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
	Nav header end
***********************************-->
        <!--**********************************
	Chat box start
***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">


            </div>
        </div>
        <!--**********************************
	Chat box End
***********************************-->
        <!--**********************************
	Header start
***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <?= $data['title'] ?></div>
                        </div>


                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
	Header end ti-comment-alt
***********************************-->
        <!--**********************************
	Sidebar start
***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="<?= BASE_URL ?>/pages/dashboard"><i class="flaticon-381-networking"></i> <span class="nav-text">Dashboard</span></a></li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-layer"></i>
                            <span class="nav-text">Tasks</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASE_URL ?>/pages/task_one">Task One</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
	Sidebar end
***********************************-->
        <!--**********************************
	Content body start
***********************************-->