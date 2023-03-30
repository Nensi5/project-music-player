<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOBRODOŠLI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<header>
        <div id="brand"><a href="index.html">SAKI</a></div>
        <nav>
            <ul>
            <li id="login"><a href="login.php">Login</a></li>
        
        </ul>
        </nav>
    </header>
    <h1 class="my-5">DOBRODOŠLI, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. you are so hot .</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Promeni šifu</a>
        <a href="logout.php" class="btn btn-danger ml-3">Odjavi se sa naloga</a>
        <a href="index.php" class="btn btn-outline-secondary">Nazad na aplikaciju</a>
    </p>
</body>
</html>
