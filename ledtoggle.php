<!DOCTYPE html>
<html>
<head>
<title>led toggle page</title>

<script>
    async function myFunction() {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", 'ledexec.php', true); // false for synchronous request
        xmlHttp.send( null );
    }

</script>

</head>

<body>

<button type="button" onclick="myFunction()">Click to toggle</button> 

</body>
</html>