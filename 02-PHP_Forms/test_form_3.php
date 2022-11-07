<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <style>
    .error {
      color: #FF0000;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test-form 3</title>
</head>

<body>
  <h1>PHP form</h1>

  <?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";
  $formIsOk = "";


  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
      $formIsOk = TRUE;
    }
  }
  ?>
  <p><span class="error">* required field</span></p>

  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" style="border:1px solid black; padding:20px; width:60%;">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <span class="error">* <?php echo $nameErr; ?></span><br><br>

    <label for="email">e-mail:</label>
    <input type="email" name="email">
    <span class="error">* <?php echo $emailErr; ?></span><br><br>

    <label for="website">Website:</label>
    <input type="text" name="website"><br /><br />

    <label for="message">Comment:</label>
    <textarea name="message" rows="8" cols="40"></textarea><br />

    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>

    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <span class="error">* <?php echo $genderErr; ?></span><br><br>

    <input type="submit" value="Submit Information"><br /><br />
  </form><br />
  <?php
  if ($formIsOk) {
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo $gender;
  }
  ?>

</body>

</html>