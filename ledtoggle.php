<!DOCTYPE html>
<html>
<head>
<title>led toggle page</title>

<script>
    async function myFunction() {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", 'ledexec.php', true); 
        xmlHttp.send( null );
        const result = JSON.parse(xmlHttp.responseText);
        document.getElementById("temp").innerHTML = obj.temperature;
        document.getElementById("alt").innerHTML = obj.altitude;  
        document.getElementById("press").innerHTML = obj.pressure; 

    }

</script>

</head>

<body>

<button type="button" onclick="myFunction()">Click to toggle</button>
<p id="temp"> 0.00</p>
<p id ="alt"> 0.00</p>
<p id = "press"> 0.00</p> 

</body>
</html>