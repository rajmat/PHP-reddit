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
    $telephoneBook = (object)["William A. Lathan" => "405-709-1865", "John K. Miller" => "402-247-8568", "Hortensia E. Foster" => "606-481-6467", "Amanda D. Newland" => "319-243-5613", "Brooke P. Askew" => "307-687-2982"];

    var_dump($telephoneBook);
    echo "<br>";

    foreach($telephoneBook as $key => $value) {
      if ($key === "Amanda D. Newland") {
        echo $value . "<br>";
      }
    };

    foreach($telephoneBook as $key => $value) {
      if ($value === "307-687-2982") {
        echo $key . "<br>";
      };
    };

  ?>
</body>
</html>