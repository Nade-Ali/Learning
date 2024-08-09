<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webt</title>
</head>
<body>
      // global scope
      $x=5; 
      function myTest() {
        echo "<p>variable x inside function is : $x</p>";
      }
      myTest();

      echo "<p>variable x outside function is : $x</p>";
    
</body>
</html>