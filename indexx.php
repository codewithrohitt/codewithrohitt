<?php
	session_start();
	include('conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>With Cookies</title>
  </head>
  <body>
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
	<h2>Login Form</h2>
	<form method="POST" action="loginn.php">
	<label>Username:</label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username"  placeholder="rohitsingh">
	<label>Password:</label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
	<input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me <br><br>
	<input type="submit" value="Login" name="login">
	</form>
 
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>