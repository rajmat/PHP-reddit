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

  $a = 26;
  $out = 0;
  // if a is even increment out by one
  if ($a % 2 === 0) {
    $out++;
  };
  
  echo "out: " . $out . "<br>";
  
  
  $b = 22;
  $out2 = '';
  // if b is between 10 and 20 set out2 to 'Sweet!'
  // if less than 10 set out2 to 'Less!',
  // if more than 20 set out2 to 'More!'
  
  if (10 < $b && $b < 20 ) {
    $out2 = "Sweet";
  } else if ($b < 10) {
    $out2 = "Less!";
  } else if ($b > 20) {
    $out2 = "More";
  };

  echo $out2 . "<br>";
  
  
  $c = 123;
  $credits = 44;
  $isBonus = false;
  // if credits are at least 50,
  // and isBonus is false decrement c by 2
  // if credits are smaller than 50,
  // and isBonus is false decrement c by 1
  // if isBonus is true c should remain the same
  
  if ($credits >= 50 && $isBonus === false) {
    $c += 2;
  } else if ($credits < 50 && $isBonus === false) {
    $c -= 1;
  } else {
    $c;
  };

  echo $c . "<br>";
  
  
  
  
  $d = 8;
  $time = 20;
  $out3 = '';
  // if d is dividable by 4
  // and time is not more than 200
  // set out3 to 'check'
  // if time is more than 200
  // set out3 to 'Time out'
  // otherwise set out3 to 'Run Forest Run!'
  
  if ($d % 4 === 0 && $time <= 200) {
    $out3 = "Check";
  } else if ($time > 200) {
    $out3 = "Time out";
  } else {
    $out3 = "Run Forest Run!";
  }
  
  echo $out3;
  ?>
</body>
</html>