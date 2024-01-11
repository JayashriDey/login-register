<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM users WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $users = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <style>
		body{
			background-image: url('https://i.pinimg.com/originals/51/85/21/5185214688a555cbc11560923c4b3097.png');
		}
		.home {
            width: 300px;
            margin: 200px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

       
	</style>
</head>

<body>
    <div class="home">
		<h1>Welcome user</h1>
			<p><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>
	</div>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    