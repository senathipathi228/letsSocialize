<html>

<head>
    <title>Login</title>
        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        
        body{
            
                        width: 100%;
        }
        .row{
            
            background-color: white;
            color: black;
            border-radius: 10px;            
            font-size:25px;
        }
        .row1{
            font-size: 40px;
        }
    
    </style>
    </head>
<body>
    
   <div class="main">
       
       <div class="one">
       
           <h1>Comments for <span style="color:black; background-color:white; border-radius:10px;"><?php echo $_GET['quest']?></span> by <span style="color:black; background-color:white; border-radius:10px;"><?php echo $_GET['user']; ?></span> </h1>
       
       </div>
       <?php 
define('HOST','localhost');
 define('USERNAME', 'id9177877_nithish');
 define('PASSWORD','vns_1998');
 define('DB','id9177877_socializer');

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

        
    $result = mysqli_query($con,"SELECT * FROM comments where questions  LIKE '{$_GET['quest']}' AND username LIKE '{$_GET['user']}' ");

        while($row = mysqli_fetch_array($result)) {
           
            echo "<table>";
                echo "<tr >";
                echo "<td class=\"row\">" .$row['cusername']. " said</td> <br>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class=\"row1\">" .$row['comment'].  "</td>";
                echo"</tr>";
            echo "</table>";
        }

        mysqli_close($con);
       
?>
       
       
       
       
    </div> 
    </body>



</html>








