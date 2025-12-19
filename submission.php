
       <?php

                $server = "localhost";
                $username = "php";
                $password = "victorphpass";
                $database = "hacker";
                $conn = mysqli_connect($server, $username, $password, $database);
            
                // Check for successful connection
                if (!$conn) {
                    die("Connection failed: {mysqli_connect_error()}");
                }
                $newid = uniqid();
                $ipaddr = $_SERVER["REMOTE_ADDR"];
                $search = $_GET["q"];

                $sql = "INSERT INTO hack_info(id,ip_addr,search) VALUES ( '{$newid}','{$ipaddr}','{$search}');";
                $result = mysqli_query($conn, $sql);
                header("Location: https://google.com/search?q="."{$search}");
        ?>
