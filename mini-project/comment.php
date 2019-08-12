<html>

<head>
    <title>Login</title>
        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <style>
    
       body{
           background-color: black;
           color: white;
           
       }
    
    </style> 
    </head>
<body>
    
   <div class="main">
       
       <div class="one">
       
           <h2 style="text-align: center;" >Negotiate / agree with <span style="color:black; background-color:white; border-radius:10px;"><?php echo $_GET['quest']; ?> </span> by <span style="color:black; background-color:white; border-radius:10px;"><?php echo $_GET['user']; ?></span> </h2>
       
       </div>
       <h3>
       Enter your registered username :
       </h3>
       <form  method="post">
       <input type="text" name="cname" id="cname" style="border-radius: 10px; width: 20%; font-size: 25px; outline: none;"><br>
           
           <h3>
       Comment :
       </h3>
    
       <input type="text" name="comment" id="comment" style="border-radius: 10px; width: 100%; font-size: 50px; outline: none;"><br/>

           <button id='insert' style="outline: none;"  >Submit</button>
           
       </form>
       
       <?php 
       
       
       if(isset($_POST['comment'])){
      // error_reporting(0);
define('HOST','localhost');
 define('USERNAME', 'root');
 define('PASSWORD','malavelappan');
 define('DB','socializer');


// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
$cname = $_POST['cname'];
$comment = $_POST['comment'];
$user = $_GET['user'];
$question= $_GET['quest'];

$sq = "insert into comments values ('$user','$question','$cname','$comment')";
mysqli_query($con, $sq);
       }
      
?>
       
       
       
       
    </div>
   <?php
    $ques=$_GET['quest'];
    $name=$_GET['user'];
    echo "<a href='show.php?user=$name&quest=$ques' style=\"text-align:center;color:white;\">Show all</a>";
    
    ?>
    
    
    </body>



</html>








