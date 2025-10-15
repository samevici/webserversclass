<!DOCTYPE html>
<html>
<head>
    <title>Server PHP test page</title>
       <?php

                $server = "localhost";
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
                $newid = uniqid();

                foreach ($_POST as $x=>$y) {
                    $keys[] = "{$x}";
                    };

                foreach ($_POST as $x =>$y) {
                    $resp[] = htmlspecialchars("{$y}");
                    };
            

                $sql = "INSERT INTO adoption_form (id," . implode("," , $keys) . ") VALUES ( '{$newid}' " . ", '". implode("','" , $resp) . "');";
                $result = mysqli_query($conn, $sql);
        ?>
</head>

    <body> 
        <h1> Application receipt </h1>
            <?php    
        
                $sql = "select * from adoption_form where id='{$newid}';";
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {

                    $name = "{$row['fname']} " . "{$row['lname']}";
                    $cat = "{$row['cat_name']}";
                }

                echo "<p>Hello {$name}</p> 
                <p> We received your application to adopt {$cat}</p>
                <p> We will contact you shortly about the next step in the adoption process</p>
                ";

                mysqli_close($conn);
            ?>
    </body>
</html>