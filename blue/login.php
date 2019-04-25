<!doctype html>
<html lang="en">

<script>

    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var user=getCookie("username");
        if (user != "") {
            alert("Welcome again " + user);
        } else {
            user = prompt("Please enter your name:","");
            if (user != "" && user != null) {
                setCookie("username", user, 30);
            }
        }
    }

    function onLoadGoogleCallback(){
        gapi.load('auth2', function() {
            auth2 = gapi.auth2.init({
                client_id: '52285476045-i54ldof8bmc9t2fnggkj4e0raalklok1.apps.googleusercontent.com',
                cookiepolicy: 'single_host_origin',
                scope: 'profile'
            });

            auth2.attachClickHandler(element, {},
                function(googleUser) {
                    console.log('Signed in: ' + googleUser.getBasicProfile().getName());
                    let last="";
                    let first="";
                    let inemail="google";
                    let inpw="";
                    let img="";

                    var profile = googleUser.getBasicProfile();
                    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                    console.log('Full Name: ' + profile.getName());
                    console.log('Given Name: ' + profile.getGivenName());
                    console.log('Family Name: ' + profile.getFamilyName());
                    console.log("Image URL: " + profile.getImageUrl());
                    console.log("Email: " + profile.getEmail());

                    // The ID token you need to pass to your backend:
                    var id_token = googleUser.getAuthResponse().id_token;
                    console.log("ID Token: " + id_token);

                    last=profile.getFamilyName();
                    first=profile.getGivenName();
                    inemail=inemail+profile.getEmail();
                    inpw=profile.getId();
                    img=profile.getImageUrl();
                    doFormRequest("./register.php","post",{'emailsignup':inemail,'facebookemail':inemail, 'passwordsignup':inpw,'fnamesignup':first,'lnamesignup':last,'img':img});

                }, function(error) {
                    console.log('Sign-in error', error);
                }
            );
        });

        element = document.getElementById('googleSignIn');
    }
    function doFormRequest(url, action, json)
    {
        var form = document.createElement("form");
        form.action = url;
        form.method = action;

        // append input attribute and valus
        for (var key in json)
        {
            if (json.hasOwnProperty(key))
            {
                var val = json[key];
                input = document.createElement("input");
                input.type = "hidden";
                input.name = key;
                input.value = val;

                // append key-value to form
                form.appendChild(input)
            }
        }

        // send post request
        document.body.appendChild(form);
        form.submit();

        // remove form from document
        document.body.removeChild(form);
    }
</script>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Bluemoon Admin Panel" />
		<meta name="keywords" content="Login, Unify Login, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Wrapbootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Data Once Again - Login</title>
		
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
                    <form action="" method="post" autocomplete="on">
						<div class="login-container">
							<div class="row no-gutters">
								<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
									<div class="login-box">
										<a href="index.php" class="login-logo">
											<h3>Data Once Again</h3>
										</a>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="icon-account_circle"></i></span>
											</div>
                                            <input class="form-control"  id="username" name="username" required="required" type="email" placeholder="eg. johndoe@everest.com" />
										</div>
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="password"><i class="icon-verified_user"></i></span>
											</div>
                                            <input class="form-control"  id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
										</div>
										<div class="actions clearfix">
											<a href="forgot-pwd.php">Forgot password?</a>
									  	<button type="submit" class="btn btn-primary">Login</button>
									  </div>
									  <div class="or"></div>
									  <div class="mt-4">
									  	<a href="signup.php" class="additional-link">Don't have an Account? <span>Create Now</span></a>
									  </div>
									</div>
								</div>
								<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
									<div class="login-slider"></div>
								</div>
							</div>
						</div>
                        <?php
                        include_once ('./config.php');
                        $conn=mysqli_connect($servername,$username,$password,$dbname);
                        if (mysqli_connect_errno())
                        {
                            echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
                        }
                        if(isset($_COOKIE['email'])&&isset($_COOKIE['pwd']))
                        {
                            $email=$_COOKIE['email'];
                            $pwd=$_COOKIE['pwd'];
                            $query="SELECT * FROM user where email = '$email' and pwd='$pwd' ";
                            $result = mysqli_query($conn,$query);
                            if($row = mysqli_fetch_array($result)) {
                                echo "
                                    <script>
                                        self.location = \"./index.php\";

                                    </script>
                                    ";
                            }

                        }

                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            // username and password sent from form
                            $cookiemyusername="'";
                            $cookiemyusername.='"';
                            $cookiemyusername .= mysqli_real_escape_string($conn,$_POST['username']);
                            $cookiemyusername.='"';
                            $cookiemyusername.="'";
                            $cookiemypassword="'";
                            $cookiemypassword.='"';
                            $cookiemypassword .= mysqli_real_escape_string($conn,$_POST['password']);
                            $cookiemypassword.='"';
                            $cookiemypassword.="'";

                            $myusername="'";
                            $myusername .= mysqli_real_escape_string($conn,$_POST['username']);
                            $myusername.="'";
                            $mypassword="'";
                            $mypassword .= mysqli_real_escape_string($conn,$_POST['password']);
                            $mypassword.="'";
                            $kli=mysqli_real_escape_string($conn,$_POST['username']);
                            $email=$myusername;
                            $pwd=$mypassword;
                            {//if logging in as a regular user
                                $query="SELECT * FROM user where email = $email and pwd =$pwd";
                                //$query="SELECT * FROM web.tbl_users where pwd=$pwd";
//                                echo '<h1>'.$query.'</h1>';
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result);
//                                printf("Error: %s\n", mysqli_error($conn));
                                //$active = $row['active'];
                                $name = $row['FirstName'];

                                $count = mysqli_num_rows($result);

                                // If result matched $myusername and $mypassword, table row must be 1 row

                                if($count == 1) {
                                    echo"
                                        <script>
                                            setCookie('email',".$myusername.",0.1)
                                            setCookie('pwd',".$mypassword.",0.1) 
                                        </script>";

                                        echo"
                                        <script>
                                            self.location = \"./index.php\";
                                        </script>";
                                }else {
                                    echo "<script type='text/javascript'>alert('Incorrect Email/Password Combination')</script>";
                                }
                            }
                        }
                        ?>
					</form>
				</div>
			</div>
		</div>
        <!-- BEGIN .main-footer -->
        <footer class="main-footer fixed-btm">
            Copyright raindrop 2019.
        </footer>
        <!-- END: .main-footer -->
	</body>
</html>