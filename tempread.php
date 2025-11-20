<!DOCTYPE html>
<html>
<head>
<title>led toggle page</title>

<script>
    async function myFunction() {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", 'tempexec.php', true); 
        xmlHttp.send( null );
        var result = JSON.parse(xmlHttp.responseText);
        document.getElementById("temp").innerHTML = result.temperature;
        document.getElementById("alt").innerHTML = result.altitude;  
        document.getElementById("press").innerHTML = result.pressure; 

    }

</script>

</head>

<body>

<button type="button" onclick="myFunction()">Click to read</button>
<b>Temperature:</b> <p id="temp"> 0.00</p>
<b>Altitude:</b> <p id ="alt"> 0.00</p>
<b>Pressure:</b> <p id = "press"> 0.00</p> 

</body>
</html>