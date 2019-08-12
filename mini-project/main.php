<html>

<head>
    <title>Login</title>
        
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    </head>
<body>
    
   <div class="main">
       
       <div class="one">
       
           <h1 >Hello Socializer <?php echo $_GET['user']; ?> </h1>
       
       </div>
       <h2 >
       Enter your dispute :
       </h2>
       <form  method="post">
       <input type="text" name="question" id="question" style="border-radius: 10px; font-size:40px ; width: 100%; outline: none;">

           <button id='insert' style="outline: none;"  onclick="func()" >Submit!</button>
           
       </form>
       
       <?php
       
       if(isset($_POST['question']))
       {
      // error_reporting(0);
define('HOST','localhost');
 define('USERNAME', 'id9177877_nithish');
 define('PASSWORD','vns_1998');
 define('DB','id9177877_socializer');


// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
$user = $_GET['user'];
$ques = $_POST['question'];

$vote = 0;
$sq = "insert into questions values ('$user','$ques','$vote')";
mysqli_query($con, $sq);

       }
?>
       
       
       
       
    </div>
    <a href="ques.php" id="insert" style="text-decoration: none;">Show all</a>
    
    <script>
    function func()
        {
            var ques = document.getElementById("question");
            if(ques==""){
                alert("enter something");
        }
        }
    
    
    </script>
    
    </body>



</html>








