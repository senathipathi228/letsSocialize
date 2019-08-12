<?php
define('HOST','localhost');
 define('USERNAME', 'id9177877_nithish');
 define('PASSWORD','vns_1998');
 define('DB','id9177877_socializer');

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

   # check connection
if ($con->connect_errno)
{
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
}

$user = $_POST['user'];
$pass = $_POST['pass'];

//$sql = "SELECT * from details WHERE username = '$username' AND password = '$password' ";
//$result = $con->query($sql);



$sql1 = "SELECT * from details WHERE usname LIKE '{$user}' AND pass LIKE '{$pass}' LIMIT 1";
$result = $con->query($sql1);
if ($result->num_rows != 1) 


{


//$data = mysqli_query($con, $sql);

    //    if (mysqli_num_rows($data) == 0) {

//if (!($result->num_rows == 1)) 
  //  {
     header('Location: redsignup.html');
    exit;
    } 
else {
        header( "Location: main.php?user=$user" );
    exit;
     }
?>