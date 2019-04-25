<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Bluemoon Admin Panel" />
    <meta name="keywords" content="Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Wrapbootstrap" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>Data Once Again - Market</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
    <!-- Chartist css -->
    <link href="vendor/chartist/css/chartist.min.css" rel="stylesheet" />
    <link href="vendor/chartist/css/chartist-custom.css" rel="stylesheet" />

</head>
<body>

<!-- Loading starts -->
<div class="loading-wrapper">
    <div class="loading">
        <span></span>
    </div>
</div>
<!-- Loading ends -->

<!-- BEGIN .app-wrap -->
<div class="app-wrap">

    <!-- BEGIN .app-heading -->
    <?php include_once ('./header.php'); ?>

    <!-- END: .main-heading -->

    <!-- BEGIN .main-content -->
    <div class="main-content">
        <!-- Row start -->
        <div class="row gutters">
            <?php
            include_once ('snapbitcoin.php')
            ?>
        </div>
        <!-- Row end -->

    </div>
    <!-- END: .main-content -->

</div>
<!-- END: .app-main -->
</div>
<!-- END: .app-container -->



</div>
<!-- END: .app-wrap -->

<!-- jQuery first, then Tether, then other JS. -->
<script src="js/jquery.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendor/unifyMenu/unifyMenu.js"></script>
<script src="vendor/onoffcanvas/onoffcanvas.js"></script>
<script src="js/moment.js"></script>

<!-- News ticker -->
<script src="vendor/newsticker/newsTicker.min.js"></script>
<script src="vendor/newsticker/custom-newsTicker.js"></script>

<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Chartist JS -->
<script src="vendor/chartist/js/chartist.min.js"></script>
<script src="vendor/chartist/js/chartist-tooltip.js"></script>
<script src="vendor/chartist/js/custom/custom-line-chart.js"></script>
<script src="vendor/chartist/js/custom/custom-line-chart1.js"></script>
<script src="vendor/chartist/js/custom/donut-chart.js"></script>
<script src="vendor/chartist/js/custom/custom-multiline-chart.js"></script>
<script src="vendor/chartist/js/custom/bi-polar-bar-chart.js"></script>

<!-- Common JS -->
<script src="js/common.js"></script>

</body>
</html>