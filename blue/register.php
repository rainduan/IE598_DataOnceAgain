
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

</script>
<?php
include("./config.php");

session_start();

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$myusername="'";
$myusername .= $_POST['emailsignup'];
$myusername.="'";
$mypassword="'";
$mypassword .= $_POST['passwordsignup'];
$mypassword.="'";


$fname = $_POST['fnamesignup'];
$lname = $_POST['lnamesignup'];
$email = $_POST['emailsignup'];
$pwd   = $_POST['passwordsignup'];
if(isset($_POST['img'])){
    $img   = $_POST['img'];
}else{
    $img   = "img/user-img/guest.png";
}



//echo "<p> find ".$update."</p>";


    $query="INSERT INTO user (FirstName,LastName,email,pwd,img)
        VALUES ('$fname', '$lname', '$email', '$pwd','$img')";
//    echo "<p> ". $query."</p>";
    if ($conn->query($query) === TRUE) {
//        echo "New record created successfully";
        echo "
            <script>
                setCookie('email'," .$myusername. ",0.1);
                setCookie('pwd'," . $mypassword . ",0.1);
                self.location = \"./index.php\";
            </script>";
                echo '
            <script>
               //window.history.go(-2);
            </script>
        ';
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
        echo "<p> find ".$_COOKIE['email']."</p>";

    }




mysqli_close($conn);
?>