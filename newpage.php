<!DOCTYPE html>
<head>
    <title>Server PHP test page</title>
</head>

<body> 
    <h1> PHP dump! </h1>
    <p><?= $_SERVER['HTTP_USER_AGENT'];?></p>
    <p>GET: <?= var_dump($_GET) ?></p>
    <p>POST: <?= var_dump($_POST) ?></p>
</body>