<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <pre>
  <?php
  // - Create (dynamically*) a two dimensional list
  //   with the following matrix**. Use a loop!
  //
  //   0 0 0 1
  //   0 0 1 0
  //   0 1 0 0
  //   1 0 0 0
  //
  // - Print this two dimensional list to the console
  //
  // * size should depend on a variable
  // ** Relax, a matrix is just like an array


  $size = 10;

  /* <?php for ($i = 0; $i < $size; $i++): ?>
  <?php echo $i; ?>
  <br>
  <?php endfor; ?> */

  for ($i = 0; $i < $size; $i++) {
    $arr[$i] = [];
    echo "<br>";
    for ($j = 0; $j < $size; $j++) {
      if ($j === $size - $i - 1) {
        array_push($arr[$i], 0);
        echo $arr[$i][$j];
      } else {
        array_push($arr[$i], 1);
        echo $arr[$i][$j];
      };
    };
  };
  echo "<br>";
/*   var_dump($arr); */
  ?>
</pre>
</body>

</html>