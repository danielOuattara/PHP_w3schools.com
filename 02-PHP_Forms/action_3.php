<?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";


  function test_input_2($data_Array)
  {
    foreach ($data_Array as $key => $value) {
      $value = trim($value);
      $value = stripslashes($value);
      $value = htmlspecialchars($value);
    }
    return $data_Array;
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
      return $nameErr;
    } elseif (empty($_POST["email"])) {
      $emailErr = "Email is required";
      return $emailErr;
    } elseif (empty($_POST["website"])) {
      $website = "";
    } elseif (empty($_POST["comment"])) {
      $comment = "";
    } elseif (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      test_input_2($_POST);
    }
  }
