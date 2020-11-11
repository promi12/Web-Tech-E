<?php
include_once('Include.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Home</title>

</head>
<body>

    <header>
        <h1 style="display: inline;">xCompany</h1>

        <nav style="display:inline">
          <a href="/Lab Task 4/Homepage.php">Home</a> |
          <a href="/Lab Task 4/Login.php">Login</a> |
          <a href="/Lab Task 4/Ragistration.php">Registration</a> |
        </nav>
    </header>
    <br><br>

    <form  action="#" method="post">
      <div>
        <fieldset>
          <legend>Login:</legend>
          <span style="color:red"><?php echo $usernameErr; ?></span><br>
          <label for="username">Username: </label>
          <input type="text" name="username" id="username"><br>
          <label for="password">Password: </label>
          <input type="password" name="password" id="password"><br>
          <input type="checkbox" id="Remember" name="Remember" value="Remember">
          <label for="Remember">Remember Me</label><br>

            <input type="submit" name="submit" value="submit">
            <a href="/Lab Task 4/Forgot_pass.php">Forgot Password?</a>


      </div>

    </form>

    <?php if($submit == "submit" && isset($username) && $username == "admin") {
        header("Location: /Lab Task 4/Profile.php");
     } ?>



    <hr>
    <footer>
        <span>Copyright &#169 2017</span>
    </footer>
    <hr>

</body>
</html>

