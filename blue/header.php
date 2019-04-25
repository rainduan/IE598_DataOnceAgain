
<!-- BEGIN .main-footer -->
<footer class="main-footer fixed-btm">
    Copyright raindrop 2019.
</footer>
<!-- END: .main-footer -->

<header class="app-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-8">
                <div class="logo-block">
                    <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                        <i class="icon-arrow_back"></i>
                    </a>
                    <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                        <i class="icon-chevron-thin-left"></i>
                    </a>
                    <div class="custom-search hidden-sm hidden-xs">
                        <i class="icon-magnifying-glass"></i>
                        <input type="text" class="search-query" placeholder="Search ...">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-4">
                <ul class="header-actions">
                    <?php
                    include_once ('./config.php');
                    $conn=mysqli_connect($servername,$username,$password,$dbname);
                    if (mysqli_connect_errno())
                    {
                        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
                    }
                    $login=0;
                    if(isset($_COOKIE['email'])&&isset($_COOKIE['pwd']))
                    {
                        $login=1;
                        $email= $_COOKIE['email'];
                        $pwd= $_COOKIE['pwd'];
                        //$UID=$_COOKIE['UID'];
                        $query="SELECT * FROM user where email = '$email' and pwd ='$pwd'";
                        //$query="SELECT * FROM web.tbl_users where pwd=$pwd";
                        //echo '<h1>'.$query.'</h1>';
                        $result = mysqli_query($conn,$query);
                        if($row = mysqli_fetch_array($result))
                        {
                            $name=$row['FirstName'];
                            $lastname=$row['LastName'];
                            $img=$row['img'];
                            echo'
                              <li class="dropdown">
                                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-notifications_none"></i>
                                    <span class="count-label green">6</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                                    <ul class="imp-notify">
                                        <li>
                                            <div class="icon">W</div>
                                            <div class="details">
                                                <p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">J</div>
                                            <div class="details">
                                                <p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon secondary">R</div>
                                            <div class="details">
                                                <p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-person_outline"></i>
                                    <span class="count-label red">9</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
                                    <ul class="stats-widget">
                                        <li>
                                            <h4>$37895</h4>
                                            <p>Revenue <span>+2%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                                    <span class="sr-only">87% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>4,897</h4>
                                            <p>Downloads <span>+39%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    <span class="sr-only">65% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>2,219</h4>
                                            <p>Uploads <span class="text-secondary">-7%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                                                    <span class="sr-only">42% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="user-name text-truncate">'.$name.' '.$lastname.'</span>
                                    <img class="avatar" src="'.$img.'" alt="User Thumb">
                                    <i class="icon-chevron-small-down"></i>
                                </a>
                                <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                                    <ul class="user-settings-list">
                                        <li>
                                            <a href="profile.php">
                                                <div class="icon">
                                                    <i class="icon-account_circle"></i>
                                                </div>
                                                <p>Profile</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calendar.php">
                                                <div class="icon red">
                                                    <i class="icon-schedule"></i>
                                                </div>
                                                <p>Calendar</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="map.php">
                                                <div class="icon yellow">
                                                    <i class="icon-earth"></i>
                                                </div>
                                                <p>Map</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="logout-btn">
                                        <a href="logout.php" class="btn btn-primary">Logout</a>
                                    </div>
                                </div>
                            </li>
                            ';
                        }else{
                            echo'
                                <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="user-name text-truncate">Guest User</span>
                                    <img class="avatar" src="img/user-img/guest.png" alt="User Thumb">
                                    <i class="icon-chevron-small-down"></i>
                                </a>
                                <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                                    <div class="logout-btn">
                                        <a href="login.php" class="btn btn-primary">Login</a>
                                    </div>
                                </div>
                            </li>
                        ';
                        }
                    }else{
                        echo'
                                 <li class="dropdown">
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <span class="user-name text-truncate">Guest User</span>
                                    <img class="avatar" src="img/user-img/guest.png" alt="User Thumb">
                                    <i class="icon-chevron-small-down"></i>
                                </a>
                                <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                                    <div class="logout-btn">
                                        <a href="login.php" class="btn btn-primary">Login</a>
                                    </div>
                                </div>
                            </li>
                        ';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</header>

<!-- END: .app-heading -->

<!-- BEGIN .app-container -->
<div class="app-container">

    <!-- BEGIN .app-side -->
    <aside class="app-side fixed" id="app-side">

        <!-- BEGIN .side-content -->
        <div class="side-content ">

            <!-- BEGIN .user-profile -->
            <div class="user-profile">
                <a href="index.php" class="login-logo">
                    <h5 style="color: white">Data Once Again</h5>
                </a>

                <ul class="profile-actions">

                    <?php
                    if ($login==1){

                        echo '
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i>
                                    <span class="count-label red"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-event_note"></i>
                                    <span class="count-label"></span>
                                </a>  
                            </li><li>
                                <a href="logout.php">
                                    <i class="icon-log-out"></i>
                                </a>  
                            </li>
                            ';

                    }else{
                        echo '
                            <li>
                                <a href="login.php">
                                    <i class="icon-login"></i>
                                </a>  
                            </li>
                            ';
                    }

                    ?>

                </ul>
            </div>
            <!-- END .user-profile -->

            <!-- BEGIN .side-nav -->
            <div class="sidebarNavScroll">
                <nav class="side-nav">
                    <!-- BEGIN: side-nav-content -->
                    <ul class="unifyMenu" id="unifyMenu">
                        <?php
                        if (basename($_SERVER['PHP_SELF'])=='index.php'){
                            echo'
                            <li class="selected">
                        ';
                        }else{
                            echo'
                            <li>
                        ';
                        }
                        ?>
                        <a href="index.php">
											<span class="has-icon">
												<i class="icon-laptop_windows"></i>
											</span>
                            <span class="nav-title">Dashboard</span>
                        </a>
                        </li>
                        <?php
                        if (basename($_SERVER['PHP_SELF'])=='market.php'){
                            echo'
                            <li class="selected">
                        ';
                        }else{
                            echo'
                            <li>
                        ';
                        }
                        ?>
                        <a href="market.php" class="has-arrow" aria-expanded="false">
											<span class="has-icon">
												<i class="icon-stats-bars"></i>
											</span>
                            <span class="nav-title">Market</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="market.php?level=91">Bit Coin</a>
                            </li>
                            <li>
                                <a href="market.php?level=92">Stock</a>
                            </li>
                            <li>
                                <a href='market.php?level=93'>Option</a>
                            </li>
                            <li>
                                <a href='market.php?level=94'>Future</a>
                            </li>
                        </ul>
                        </li>
                        <?php
                        if ($login==1){
                            if (basename($_SERVER['PHP_SELF'])=='profile.php'||basename($_SERVER['PHP_SELF'])=='calendar.php'||basename($_SERVER['PHP_SELF'])=='map.php'){
                                echo'
                            <li class="selected">
                        ';
                            }else{
                                echo'
                            <li>
                        ';
                            }
                            echo'
                        <a href="#" class="has-arrow" aria-expanded="false">
											<span class="has-icon">
												<i class="icon-tabs-outline"></i>
											</span>
                            <span class="nav-title">Your Account</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a href=\'profile.php\'>Profile</a>
                            </li>
                            <li>
                                <a href=\'calendar.php\'>Calendar</a>
                            </li>
                            <li>
                                <a href=\'map.php\'>Map</a>
                            </li>
                        </ul>
                    </li>
                        ';
                        }
                        ?>
                        <?php
                        if (basename($_SERVER['PHP_SELF'])=='map.php'){
                            echo'
                            <li class="selected">
                        ';
                        }else{
                            echo'
                            <li>
                        ';
                        }
                        ?>
                        <a href="map.php">
											<span class="has-icon">
												<i class="icon-earth"></i>
											</span>
                            <span class="nav-title">Map</span>
                        </a>
                        </li>
                        <?php
                        if (basename($_SERVER['PHP_SELF'])=='donation.php'){
                            echo'
                            <li class="selected">
                        ';
                        }else{
                            echo'
                            <li>
                        ';
                        }
                        ?>
                        <a href="donation.php">
											<span class="has-icon">
												<i class="icon-coin-dollar"></i>
											</span>
                            <span class="nav-title">Donation</span>
                        </a>
                        </li>
                    </ul>
                    <!-- END: side-nav-content -->
                </nav>
            </div>
            <!-- END: .side-nav -->
        </div>
        <!-- END: .side-content -->
    </aside>


    <!-- END: .app-side -->

    <!-- BEGIN .app-main -->
    <div class="app-main">

        <!-- BEGIN .main-heading -->
        <header class="main-heading">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="page-icon">
                            <i class="icon-laptop_windows"></i>
                        </div>
                        <div class="page-title">
                            <?php
                            $title='';
                            switch (basename($_SERVER['PHP_SELF'])) {
                                case "index.php":
                                    $title='Dashboard';
                                    break;
                                case "market.php":
                                    $title='Market';
                                    break;
                                case "Map.php":
                                    $title='Map';
                                    break;
                                case "donation.php":
                                    $title='Donation';
                                    break;
                                case "profile.php":
                                    $title='Profile';
                                    break;
                                case "calendar.php":
                                    $title='Calendar';
                                    break;
                                case "map.php":
                                    $title='Map';
                                    break;
                                default:
                                    echo "!!!!!!!!!!!!!!!!!";
                            }
                            if ($title=="Market"){
                                if (isset($_GET['level'])){
                                    $level=$_GET['level'];
                                    $query="SELECT * FROM market where level = '$level'";
                                    //$query="SELECT * FROM web.tbl_users where pwd=$pwd";
                                    //echo '<h1>'.$query.'</h1>';
                                    $result = mysqli_query($conn,$query);
                                    if($row = mysqli_fetch_array($result))
                                    {
                                        $title=$title.' '.$row['name'];
                                    }
                                }
                            }
                            echo'<h5>'.$title.'</h5>';
                            ?>
                            <h6 class="sub-heading">Welcome to Data Once Again</h6>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <!-- Live updates start -->

                        <ul class="updates" id="updates">
                            <?php
                            if ($login==1){
                                echo '
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="icon-drafts"></i>
                                        <span>12 emails from Emily Russell. Reply now!</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="icon-shopping-basket text-info"></i>
                                        <span>15 new features updated successfully. Buy now!</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="icon-warning3 text-warning"></i>
                                        <span>The media folder is created successfully.</span>
                                    </a>
                                </li>
                                ';
                            }
                            echo'
                                <li>
                                    <a href="donation.php">
                                        <i class="icon-live_help"></i>
                                        <span>Dear readers, today we ask you to help us. To protect our independence,</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="donation.php">
                                        <i class="icon-heart"></i>
                                        <span>we\'ll never run ads. We\'re sustained by donations,</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="donation.php">
                                        <i class="icon-healing"></i>
                                        <span>The price of a cup of coffee is all we need. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="donation.php">
                                        <i class="icon-smile"></i>
                                        <span>The price of a cup of coffee is all we need. </span>
                                    </a>
                                </li>
                                ';
                            mysqli_close($conn);
                            ?>

                        </ul>
                        <!-- Live updates end -->
                    </div>
                </div>
            </div>
        </header>