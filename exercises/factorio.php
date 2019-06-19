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
  // - Create a function called `factorio`
  //   that returns it's input's factorial

  function factorio($num)
  {
    $arr4 = [];
    for ($i = 1; $i <= $num; $i++) {
      array_push($arr4, $i);
      echo $i . "<br>";
    };

    $result = array_reduce($arr4, function ($a, $b) {
      $a *= $b;
      return $a;
    }, 1);
    return "result: " . $result . "<br>";
  };

  echo factorio(10);
  ?>
</body>

</html>