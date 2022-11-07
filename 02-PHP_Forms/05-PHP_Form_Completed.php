<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- PHP Complete Form Example
===================================

This chapter shows how to keep the values in the input 
fields when the user hits the submit button.


PHP - Keep The Values in The Form
===================================

To show the values in the input fields after the user 
hits the submit button, we add a little PHP script inside 
the value attribute of the following input fields: 
name, email, and website. 

In the comment textarea field, we put the script between 
the <textarea> and </textarea> tags. 

The little script outputs the value of the $name, $email, 
$website, and $comment variables. 

Then, we also need to show which radio button was 
checked. For this, we must manipulate the checked attribute;
 There is not the value attribute for radio buttons: -->

    Name: <input type="text" name="name" value="<?php echo $name; ?>">

    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">

    Website: <input type="text" name="website" value="<?php echo $website; ?>">

    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>

    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other


    <!-- PHP - Complete Form Example
    =================================

    Here is the complete code for the PHP Form Validation Example:

    -->

</body>

</html>