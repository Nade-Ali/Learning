<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// it opens a file and read its content!
//echo readfile("webdictionary.txt");

        // file-open!!!

// $myfile = fopen("webdictionary.txt", "r") or die("unable to open the file");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile)
        //file close

        // use to close an open file
        // $myfile= fopen("webdictionary.txt","r");
        // fclose($myfile);

        //fgets()
        // this function is use to read a single line from a file 

        // $myfile = fopen("webdictionary.txt", "r") or die("unable to open file!");
        // echo fgets($myfile);
        // fclose($myfile);

        //fgetc 
        // used to read a single charac from a file
        $myfile = fopen("webdictionary.txt","r") or die("unable to open file!");
        while (!feof($myfile)) {
            echo getc($myfile);
        }
        fclose($myfile);
?>
</body>
</html>
