
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
// An average Green Fox attendee codes 6 hours daily
// The semester is 17 weeks long
//
// Print how many hours is spent with coding in a semester by an attendee,
// if the attendee only codes on workdays.
//
// Print the percentage of the coding hours in the semester if the average
// work hours weekly is 52

  $hours = 6;
  $weeks = 17;
  $weekdays = 5;
  $workHoursPerWeek = 52;

  echo "All working hours is: " . ($weeks * $weekdays * $hours) . "<br>";
  echo "The average working hours is: " . (($weeks * $workHoursPerWeek) / ($weeks * $weekdays * $hours));
  ?>
</body>
</html>