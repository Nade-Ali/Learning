<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <form  method="POST" action="<?php echo trim(htmlspecialchars($_SERVER["PHP_SELF"]));?>">Name: <input type="text" name="name"> <br><br>
    Email: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5"cols="40"></textarea>
    <br><br>
    <input type="submit" >
</form>
    
</body>
</html>