<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Bluemoon Admin Panel" />
		<meta name="keywords" content="Pricing Plans, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Wrapbootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Data Once Again - Donation</title>

		<!-- Common CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />
		<link rel="stylesheet" href="css/main.css" />

	</head>
	<body>

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			
			<!-- BEGIN .app-heading -->
            <?php include_once ('./header.php'); ?>

					<!-- END: .main-heading -->
					
					<!-- BEGIN .main-content -->
					<div class="main-content">
						<!-- Row start -->
						<div class="row gutters">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="plan-three">
									<div class="pricing-header">
										<i class="icon-strategy"></i>
										<h4 class="plan-title">
											Starter
										</h4>
										<div class="plan-cost">
											<span class="plan-price">$1</span>
										</div>
									</div>
									<ul class="plan-features">
										<li>Thank You</li>
									</ul>
                                    <div class="plan-select">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="upload" value="1">
                                            <input type="hidden" name="business" value="dataonceagain@gmail.com">
                                            <input type="hidden" name="currency_code" value="USD">

                                            <input type="hidden" name="item_name_1" value="Starter">
                                            <input type="hidden" name="amount_1" value="1">

                                            <input type='hidden' name='cancel_return' value='http://dataonceagain.com/'>
                                            <input type='hidden' name='return' value='http://dataonceagain.com'>
                                            <input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="padding: 15px 20px;">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                        </form>
                                    </div>
                                </div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="plan-three">
									<div class="pricing-header">
										<i class="icon-shield3"></i>
										<h4 class="plan-title">
											Basic
										</h4>
										<div class="plan-cost">
											<span class="plan-price">$5</span>
										</div>
									</div>
									<ul class="plan-features">
										<li>Thank You Very Much</li>
									</ul>
									<div class="plan-select">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="upload" value="1">
                                            <input type="hidden" name="business" value="dataonceagain@gmail.com">
                                            <input type="hidden" name="currency_code" value="USD">

                                            <input type="hidden" name="item_name_1" value="Basic">
                                            <input type="hidden" name="amount_1" value="5">

                                            <input type='hidden' name='cancel_return' value='http://dataonceagain.com/'>
                                            <input type='hidden' name='return' value='http://dataonceagain.com'>
                                            <input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="padding: 15px 20px;">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                        </form>
                                    </div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="plan-three">
									<div class="pricing-header">
										<i class="icon-trophy3"></i>
										<h4 class="plan-title">
											Ultra
										</h4>
										<div class="plan-cost">
											<span class="plan-price">$10</span>
										</div>
									</div>
									<ul class="plan-features">
                                        <li>Thank You Very Very Much</li>

                                    </ul>
									<div class="plan-select">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="upload" value="1">
                                            <input type="hidden" name="business" value="dataonceagain@gmail.com">
                                            <input type="hidden" name="currency_code" value="USD">

                                            <input type="hidden" name="item_name_1" value="Ultra">
                                            <input type="hidden" name="amount_1" value="10">

                                            <input type='hidden' name='cancel_return' value='http://dataonceagain.com/'>
                                            <input type='hidden' name='return' value='http://dataonceagain.com'>
                                            <input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="padding: 15px 20px;">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                        </form>
                                    </div>
								</div>
							</div>
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

		<!-- Common JS -->
		<script src="js/common.js"></script>
	</body>
</html>