<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  'use strict';

  // Write a program that stores 3 sides of a cuboid as variables (floats)
  // The program should write the surface area and volume of the cuboid like:
  //
  // Surface Area: 600
  // Volume: 1000

  function cuboid($a, $b, $c) {
    $A = 2 * ($a*$b+$b*$c+$a*$c);
    $V = $a*$b*$c;

    return "Surface Area: " . $A . "<br>" . "Volume: " . $V;
  };

  echo cuboid(5,6,7);
  ?>
</body>
</html>