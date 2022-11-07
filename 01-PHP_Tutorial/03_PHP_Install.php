<!-----------------------------------------------
Daniel OUATTARA- daniel.ouattara_AT_gmx.com
Avril-Mai 2020
PHP Tutorial: https://www.w3schools.com/php/
------------------------------------------------>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Installation</title>
</head>

<body>

  <h1>PHP Installation</h1>

  <pre>

What Do I Need ?
=================

To start using PHP, you can:

    > Find a web host with PHP and MySQL support
    > Install a web server on your own PC, and then install PHP and MySQL


Use a Web Host With PHP Support
================================

If your server has activated support for PHP you do not need to do anything.

Just create some '.php' files, place them in your web directory, and the server
will automatically parse them for you.

You do not need to compile anything or install any extra tools.

Because PHP is free, most web hosts offer PHP support.


Set Up PHP on Your Own PC
===========================

However, if your server does not support PHP, you must:

    > install a web server
    > install PHP
    > install a database, such as MySQL

The official PHP website (PHP.net) has installation instructions for PHP:
http://php.net/manual/en/install.php

    </pre>

  <?php
  $text = "PHP";
  echo "I love $text ! <br/>";
  echo "I love " . $text . " ! <br/>";
  echo 'I love ' . $text . ' ! <br/>';
  ?>

</body>

</html>