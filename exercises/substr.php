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
  //  Create a function that takes two strings as a parameter
  //  Returns the starting index where the second one is starting in the first one
  //  Returns `-1` if the second string is not in the first one

  function gatyaF($str, $keyword)
  {
    $result = "";
    if (strpos($keyword, $str)) {
      for ($i = 0; $i < strlen($keyword); $i++) {
        if ($keyword[$i] === $str[0]) {
          $result = $i;
        };
      }
    } else {
      $result = -1;
    }
    return $result;
  };

  echo gatyaF("gatya", "markológatyamarika");

  ?>
</body>

</html>