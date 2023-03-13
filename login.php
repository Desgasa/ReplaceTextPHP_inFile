<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			
                header("Location: login.php?error=Incorrect Email or Password");
                exit();
            
        } else {
            header("Location: login.php?error=Incorrect Email or Password");
            exit();
        }
	}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style_login.css" >
    <title>Login System</title>
</head>
<body>
     <form action="" method="post">
        <h2>Login</h2>
        <?php if(isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'] ;?></p>
        <?php } ?>
        <label>Email</label><br>
        <input type="email" name="email" placeholder="Enter your email"><br>

        <label>Password</label><br>
        <input type="password" name="password" placeholder="Enter your password"><br>

        <button type="submit" name="sumbit">Login</button>
    </form>
</body>
</html>