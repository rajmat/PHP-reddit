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
  //  Create a function that takes a list of numbers as parameter
  //  Returns a list where the elements are sorted in ascending numerical order
  //  Make a second boolean parameter, if it's `true` sort that list descending

  function advancedBubble($arr2, $isDescending = false) {
  if (!$isDescending) {
    sort($arr2);
  } else {
    rsort($arr2);
  }
  return $arr2;
;}

  var_dump(advancedBubble([43, 12, 24, 9, 5]));

  ?>
</body>

</html>