<!------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
03 06 2020
PHP Tutorial: https://www.w3schools.com/php/
--------------------------------------------->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Handling</title>
</head>

<body>
  <h1>PHP Form Handling</h1>

  <pre>

The PHP superglobals '$_GET' and '$_POST' are used to collect form-data.



PHP - A Simple HTML Form
=========================

The example below displays a simple HTML form with two input fields and a
submit button:
      </pre>

  <form action="action_1_post.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="email" name="email"><br>
    <input type="submit" value="Submit Your Information">
  </form>

  <pre>

When the user fills out the form above and clicks the 'submit' button,
the form data is sent for processing to a PHP file named "action_1_post.php".
The form data is sent with the 'HTTP POST' method.

To display the submitted data you could simply echo all the variables.

The "action_1_post.php" looks like this:
      </pre>
  <!--
      <html>
      <body>
          Welcome <?php echo $_POST["name"]; ?><br>
          Your email address is: <?php echo $_POST["email"]; ?>
      </body>
      </html>
  -->
  &lt;html&gt;<br />
  &lt;body&gt;<br /><br />
  Welcome &lt;?php echo $_POST["name"]; ?><br />
  Your email address is: &lt;?php echo $_POST["email"]; ?><br /><br />
  &lt;/body&gt;<br />
  &lt;/html&gt;<br />
  <pre>

The output could be something like this:
________________________________________________
    Welcome John
    Your email address is john.doe@example.com
________________________________________________


The same result could also be achieved using the 'HTTP GET' method.

      <form action="action_1_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        <input type="submit" value="Submit Your Data">
      </form>

and "action_1_get.php" looks like this:

<!--
      <html>
      <body>
          Welcome <?php echo $_GET["name"]; ?><br>
          Your email address is: <?php echo $_GET["email"]; ?>
      </body>
      </html>
-->

      &lt;html&gt;<br/>
      &lt;body&gt;<br/><br/>
          Welcome &lt;?php echo $_GET["name"]; ?><br/>
          Your email address is: &lt;?php echo $_GET["email"]; ?><br/><br/>
      &lt;/body&gt;<br/>
      &lt;/html&gt;<br/>


The code above is quite simple. However, the most important thing is missing.
You need to validate form data to protect your script from malicious code.



Think SECURITY when processing PHP forms!
=========================================

This page does not contain any 'form validation', it just shows how you
can send and retrieve form data.

However, the next pages will show how to process PHP forms with security in
mind! Proper validation of form data is important to protect your form from
hackers and spammers!



GET vs. POST send methods
==========================

 > Both 'GET' and 'POST' create an array
   This array holds key/value pairs, where keys are the names of the form
   controls and values are the input data from the user.
   (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)).

 > Both 'GET' and 'POST' are treated as '$_GET' and '$_POST'.
   These are 'superglobals', which means that they are always accessible,
   regardless of scope - and you can access them from any 'function', 'class'
   or file without having to do anything special.

 > '$_GET' is an array of variables passed to the current script via
    the URL parameters.

 > '$_POST' is an array of variables passed to the current script via
    the 'HTTP POST' method.



When to use GET ?
==================

- Information sent from a form with the 'GET' method is visible to everyone
  (all variable names and values are displayed in the URL).
- 'GET' also has limits on the amount of information to send. The limitation is
  about 2000 characters.
- However, because the variables are displayed in the URL, it is possible to
  bookmark the page. This can be useful in some cases.

 'GET' may be used for sending non-sensitive data.

Note: GET should NEVER be used for sending passwords or other sensitive
----  information!


When to use POST ?
==================

- Information sent from a form with the 'POST' method is invisible to others
  (all names/values are embedded within the body of the HTTP request) and has
   no limits on the amount of information to send.

- Moreover 'POST' supports advanced functionality such as support for
  multi-part binary input while uploading files to server.

- However, because the variables are not displayed in the URL, it is not
  possible to bookmark the page.

  Developers prefer 'POST' for sending form data.

Next, lets see how we can process PHP forms the secure way!
      </pre>

</body>

</html>