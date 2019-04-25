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
		<title>Data Once Again - Forgot Password</title>
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="css/main.css" />

	</head>  
    <?php
    if (isset($_POST['text'])){
        echo "<script type='text/javascript'>alert('".$_POST['text']."')</script>";
    }
    ?>
	<body class="login-bg">
			
		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<form action="sendemail.php"method="post">
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
									<div class="login-box">
                                        <a href="index.php" class="login-logo">
                                            <!--<img src="img/bluemoon-dark.png" alt="Bluemoon Admin Dashboard" />-->
                                            <h3>Data Once Again</h3>
                                        </a>

										<h5>Forgot Password?</h5>
										<p class="info">In order to receive your access code by email, please enter the address you provided during the registration process.</p>
										
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="emial"><i class="icon-account_circle"></i></span>
											</div>
											<input type="email" class="form-control" placeholder="Email Address" id="email" name="email">
										</div>
										<div class="actions clearfix">
									  	<button type="submit" class="btn btn-primary">Submit</button>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="login-slider">

									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<footer class="main-footer no-bdr fixed-btm">
			<div class="container">
				Copyright raindrop 2019.
			</div>
		</footer>
	</body>
</html>