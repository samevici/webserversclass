<!DOCTYPE html>
<html>
<head>
<title>led toggle page</title>

<script>
    function myFunction() {
    <?php
      $output = shell_exec('gpio toggle 15');
     ?>
    }
    
</script>

</head>

<body>

<button type="button" onclick="myFunction()">Click to toggle</button> 

</body>
</html>