<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <title>HTML 内の PHP</title>
  </head>


  <body>

    <h1><?php echo "Hello World"; ?></h1>

    <h3><?php
    $str_hello = "Hello";
    echo $str_hello . " PHP"; ?></h3>

    <?php
    $str_hello = "<h3>Hello";
    echo $str_hello . " PHP</h3>"; ?>

    <i><?php
    $str_hello = "Hello";
    echo $str_hello . " PHP"; ?></i>

    <br>

    <?php
    $str_hello = "  <i>Hello";
    echo $str_hello . " PHP</i>"; ?>

  </body>
</html>
