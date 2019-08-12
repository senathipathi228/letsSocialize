<html>

<head>
     <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    <link rel="stylesheet" type="text/css" href=".css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
    
    <style>
        body{
            background-color: black;
        }
        
        .row{
            
            background-color:black;
            color: white;
            width: 50%:
                height: 10%;
        }
        .butto{
            color: white;
        }
        .wid{
            width: 100%;
            background-color: white;
            color: black;
            height: auto;
            
        }
        td{
            color: white;
            border-radius: 10px;
            font-size: 20px;
            font-family: monospace;
            outline: none;
        }
      
    
    </style>
    
    </head>

<body>
    
    <h2 style="text-align: center; color:white;" >DISPUTES</h2>
    
    
    <?php 

define('HOST','localhost');
 define('USERNAME', 'id9177877_nithish');
 define('PASSWORD','vns_1998');
 define('DB','id9177877_socializer');


// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

   
  function runMyFunction() {

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

      
     $check=$_GET['quest'];
      $user=$_GET['user'];
      
    $s = "UPDATE questions SET votes = votes + 1 where question  LIKE '{$check}' AND username LIKE '{$user}' ";
  mysqli_query($con,$s);
       echo"<script>document.location='ques.php';</script>";
      
  }
    
    function runMyFunction1() {

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

      
     $check=$_GET['quest1'];
        $user=$_GET['user'];
    $s = "UPDATE questions SET votes = votes - 1 where question  LIKE '{$check}' AND username LIKE '{$user}'   ";
  mysqli_query($con,$s);
   echo"<script>document.location='ques.php';</script>";         
  }


  if (isset($_GET['quest'])) {
    runMyFunction();
  }
    if (isset($_GET['quest1'])) {
    runMyFunction1();
  }
  

    $result = mysqli_query($con,"SELECT * FROM questions ORDER BY votes DESC");

        while($row = mysqli_fetch_array($result)) {
           
            echo "<table>";
                echo "<tr >";
               echo "<img src=\"https://www.penndot.gov/Style%20Library/Images/Slider/realidicon.png\" height=\"45\" width=\"45\">";
                echo "<td class=\"row\">"  .$row['username']. " says / asks</td> <br>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class=\"wid\">" .$row['question'].  "</td>";
                    echo "<td class=\"wid\"> votes :" .$row['votes']. "</td>" ;
               echo "</tr>";
              echo "<tr>";
                    echo "<td class=\"butto\">";
                    echo "<form name=\"\">";
                    $ques=$row['question'];
                    $name=$row['username'];
            echo "<br>";
                    echo "<a href='ques.php?user=$name&quest=$ques'><img src=\"http://icons.iconarchive.com/icons/graphicloads/flat-finance/256/like-icon.png\" height=\"35\" width=\"35\"></a>";
            echo"  ";
                     echo "<a href='ques.php?user=$name&quest1=$ques'><img src=\"http://icons.iconarchive.com/icons/graphicloads/flat-finance/256/dislike-icon.png\" height=\"35\" width=\"35\"></a>";
            echo " ";
                     echo "<a href='comment.php?user=$name&quest=$ques'><img src=\"http://icons.iconarchive.com/icons/pelfusion/long-shadow-media/256/Message-Bubble-icon.png\" height=\"35\" width=\"35\"></a>";
            echo " ";
                    echo "<a href='show.php?user=$name&quest=$ques' style=\"text-decoration: none;  color: white; font-size:15px;\" >Show all comments</a>";
                    echo "</form>";
                    echo "</td>";
                echo"</tr>";
            echo "</table>";
            
            echo "<br>";
            echo "<br>";
            echo "<br>";
            
        }
        echo "</table>";
    
   
        mysqli_close($con);

    ?>
    
    
    </body>





</html>