<?php
define('HOST','localhost');
 define('USERNAME', 'id10472497_sena');
 define('PASSWORD','senathipathi');
 define('DB','id10472497_socializer');

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

// Check connection
$first = $_POST['fn'];
$last = $_POST['ln'];
$user = $_POST['user'];
$pass = $_POST['pass'];

//$sql = "insert into details values ('$user','$pass')";
$sq = "insert into details values ('$first','$last','$user','$pass')";
$sql1 = "SELECT * from details WHERE usname LIKE '{$user}' AND pass LIKE '{$pass}' LIMIT 1";
$result = $con->query($sql1);
if ($result->num_rows == 1) 
    {
    
    header('Location: redindex.html');
    exit;
    } 
else
{if(mysqli_query($con, $sq)){// && mysqli_query($con,$sql)){
  header('Location: login.html');
    exit;
 }
}

?>
