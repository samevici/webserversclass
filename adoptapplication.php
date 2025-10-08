<!DOCTYPE html>
<head>
    <title>Server PHP test page</title>
       <?php

                $server = "http://raspivictor.local:8080";
                $username = "php";
                $password = "victorphpass";
                $database = "cat_adoptions";
                $conn = mysqli_connect($server, $username, $password, $database);
            
                // Check for successful connection
                if (!$conn) {
                    die("Connection failed: {mysqli_connect_error()}");
                }

                $keys = [];
                $resp = [];

                foreach ($_POST as $x=>$y) {
                    $keys[] = "{$x}";
                    };

                foreach ($_POST as $x =>$y) {
                    $resp[] = htmlspecialchars("{$y}");
                    };
            

                $sql = "INSERT INTO adoption_form (" .implode("," , $keys) . ") VALUES ('" . implode("','" , $resp) . "');";
                $result = mysqli_query($conn, $sql);
        ?>
</head>

<body> 
    <h1> Application receipt </h1>
        <?php    
            $sql = "select * from adoption_form;";
            $num = mysqli_num_rows($conn, $sql);
            $sql = "select * from adoption_form where id=$num;";
            $result = mysqli_query($conn, $sql);

            echo "<p>Hello {$result['fname']} {$result['lname']}</p> 
            <p> We received your application to adopt {$result['cat_name']}</p>
            <p> We will contact you shortly about the next step in the adoption process</p>
            ";
        mysqli_close($conn);
?>

     

</body>