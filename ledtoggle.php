<!DOCTYPE html>
<html>
<head>
<title>led toggle page</title>
 <?php

                $server = "localhost";
                $username = "www-data";
                $conn = mysqli_connect($server, $username, $password, $database);
            
                // Check for successful connection
                if (!$conn) {
                    die("Connection failed: {mysqli_connect_error()}");
                }
                
        ?>
<script>
    function myFunction() {
    <?php
      $sql = "shell_exec('gpio toggle 15');";
      $result = mysqli_query($conn, $sql);
     ?>
    }
</script>

</head>

<body>

 <button onclick="myFunction()">Click to toggle</button> 

</body>
</html>