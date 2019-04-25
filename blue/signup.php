<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Bluemoon Admin Panel" />
		<meta name="keywords" content="Signup, Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Wrapbootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Data Once Again - Signup</title>
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

		<!-- Mian and Login css -->
		<link rel="stylesheet" href="css/main.css" />

	</head>  

	<body class="login-bg">
			
		<div class="container">
			<div class="login-screen row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form action="./register.php" method="post" class="text-left">
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="login-box">
                                        <a href="index.php" class="login-logo">
                                            <h3>Data Once Again</h3>
                                        </a>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
											<span class="input-group-text" id="fullname"><i class="icon-account_circle"></i></span>
										</div>
                                            <input type="text" name="fnamesignup" required="required" class="form-control" id="first_name" placeholder="First Name">
										</div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="fullname"><i class="icon-account_circle"></i></span>
                                            </div>
                                            <input type="text" name="lnamesignup" required="required" class="form-control" id="last_name" placeholder="Last Name">
                                        </div>

										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="email"><i class="icon-email"></i></span>
											</div>
                                            <input type="email" name="emailsignup" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+[.]+[a-z]{2,}$"aria-describedby="emailHelp"  placeholder="Email user name">
										</div>
										
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="password"><i class="icon-security"></i></span>
											</div>
                                            <input type="password" name="passwordsignup" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="create_password" class="form-control" aria-describedby="passwordHelpBlock"placeholder="Password">
										</div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="password"><i class="icon-verified_user"></i></span>
                                            </div>
                                            <input type="password" id="confirm_password" required="required" class="form-control"placeholder="Confirm Password">
                                        </div>

										<div class="actions clearfix">
									  	<button type="submit" class="btn btn-primary">Signup</button>
									  </div>
									  <div class="or"></div>
									  <div class="mt-4">
									  	<a href="login.php" class="additional-link">Already have an Account? <span>Login Now</span></a>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
									<div class="signup-slider"></div>
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
<script>
    var password = document.getElementById("create_password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>