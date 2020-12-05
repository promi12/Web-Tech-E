<?php
include_once "config.php";

session_start( [
    'cookie_lifetime' => 150, //5 minutes
] );

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( ! $connection ) {
	throw new Exception( "Cannot connect to database" );
}
//Table 'login'
$query  = "SELECT * FROM labtask6_web.login;";

$result = mysqli_query( $connection, $query );


$error = false;

$ses = "";
$ses = $_SESSION['loggedin'];

if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
    while ( $data = mysqli_fetch_assoc( $result ) ) {
        if ( $data['username'] == $_POST['username'] && $data['password'] == $_POST['password'] ) {
          $ses= true;
        } else {
            $error = true;
            $ses = false;
        }
    }
}

if(isset($_POST['logout'])){
    $ses= false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication</title>
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div>
            <h2>Session Tracking Authentication</h2>
        </div>
    </div>
    <div class="row">
        <div>

            <?php
            if ( true == $ses ) {
                echo "<h3>Hello Admin, Welcome!</h3>";
            } else {
                echo "<h3>Public Profile</h3>";
            }
            ?>
        </div>
    </div>
    <div class="row" style="margin-top:100px;">
        <div>
            <?php
            if($error){
                echo "<blockquote>Username and Password didn't match</blockquote>";
            }
            if ( false == $ses ):
                ?>
                <form method="POST">
                    <label for=username>Username</label>
                    <input type="text" name='username' id="username"> <br>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" name="submit">Log In</button>
                </form>
            <?php
            else:
                ?>
                <form action="index.php" method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" name="submit">Log Out</button>
                </form>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>
