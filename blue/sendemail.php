<script>
function post(path, params, method) {
method = method || "post"; // Set method to post by default if not specified.

// The rest of this code assumes you are not using a library.
// It can be made less wordy if you use one.
var form = document.createElement("form");
form.setAttribute("method", method);
form.setAttribute("action", path);

for(var key in params) {
if(params.hasOwnProperty(key)) {
var hiddenField = document.createElement("input");
hiddenField.setAttribute("type", "hidden");
hiddenField.setAttribute("name", key);
hiddenField.setAttribute("value", params[key]);

form.appendChild(hiddenField);
}
}

document.body.appendChild(form);
form.submit();
}
</script>
<?php
include_once ('./config.php');
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}
$email= $_POST['email'];
//echo 'find '.$email;

//$UID=$_COOKIE['UID'];
$query="SELECT * FROM user where email = '$email'";
//$query="SELECT * FROM web.tbl_users where pwd=$pwd";
//echo '<h1>'.$query.'</h1>';
$result = mysqli_query($conn,$query);
if($row = mysqli_fetch_array($result)) {
    echo 'send';

    $to = "duanyuc@live.cn";
    $subject = "Forgot Password";
    $txt = "Hi, your password is".$row['pwd'];
    $headers = "From: dataonceagain@gmail.com" . "\r\n";

    mail($email, $subject, $txt, $headers);
    mysqli_close($conn);
    echo"
    
        <script>
        post('forgot-pwd.php',{'text':'Email send, check junk email'},'post');
        </script>";
}else{
    mysqli_close($conn);
    echo 'not send';

    echo"
    
        <script>
        post('forgot-pwd.php',{'text':'Email not Exist'},'post');
        </script>";
}
?>


