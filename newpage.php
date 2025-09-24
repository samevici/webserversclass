<!DOCTYPE html>
<head>
    <title>Server PHP test page</title>
</head>

<body> 
    <h1> PHP dump! </h1>
    <p><?= $_SERVER['HTTP_USER_AGENT'];?></p>
    <p> Hello <?= htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']) ?></p>
    <p>You wanted to adopt a <?=htmlspecialchars($_POST['age']) ?> cat</p>
</body>