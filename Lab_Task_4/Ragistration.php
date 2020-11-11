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

<?php
$name =  "";
$submit = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submit = test_input($_POST["submit"]);
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}

$email = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }

}

$gender = $genderErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <fieldset>
    <legend>Registration:</legend>

    <div>
    <?php
      if($submit == "submit" ){

        if(str_word_count($name) <= 1){ ?>

    <span>atleast two words</span> <br>
    <?php
        }
        if(empty($name)){ ?>
          <span>can't be null</span> <br>

          <?php
        }

        if(preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST["name"]) === 0){ ?>

        <span>must start with Upper case letter</span><br>

<?php
        }

       } ?>
       <label for="name">Name: </label>

<input type="text" name="name" id="name" value=<?php $name ?>>

    </div>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" value=<?php $email ?>>
<?php if($submit == "submit"){ ?>
<span>*<?php echo $emailErr;?></span> <?php } ?>
<div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
</div>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
</div>


<span style="color:red"><?php echo $genderErr;?></span>
    <div>
<fieldset>
    <legend>
        Gender:
    </legend>
<input type="radio" name="gender" id="male" value="male" <?php if(isset($gender) && $gender == "male") echo "checked"; ?>>
<label for="male">Male</label>
<input type="radio" name="gender" id="female" value="female"  <?php if(isset($gender) && $gender == "female") echo "checked"; ?>>
<label for="female">Female</label>
<input type="radio" name="gender" id="others" value="others"  <?php if(isset($gender) && $gender == "others") echo "checked"; ?>>
<label for="others">Others</label>

</fieldset>


    </div>
    <hr>
    <input type="submit" name="submit" value="submit"> <br>


  </fieldset>

</form>



    <hr>
    <footer>
        <span>Copyright &#169 2017</span>
    </footer>
    <hr>

</body>
</html>

