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
        document.getElementById("temp").innerHTML = result.temperature;
        document.getElementById("alt").innerHTML = result.altitude;  
        document.getElementById("press").innerHTML = result.pressure; 

    }

</script>

</head>

<body>

<button type="button" onclick="myFunction()">Click to toggle</button>
Temperature: <p id="temp"> 0.00</p>
Altitude: <p id ="alt"> 0.00</p>
Pressure: <p id = "press"> 0.00</p> 

</body>
</html>