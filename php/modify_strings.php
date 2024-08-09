<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    # upper case
   # $x = "hello World ! .. <br><br>";
   # echo strtoupper($x);
     # lowercase
    $x = "hello World! . <br>";
    echo strtolower($x);
   # echo str_replace("World","Dolly",$x);
   # echo strtolower($x);
  # echo trim($x);
    $y = explode(" ", $x);
    print_r($y);


    ?>
</body>
</html>