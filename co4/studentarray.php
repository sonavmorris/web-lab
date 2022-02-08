<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $name=array("mariya","ancy","tony","rajesh","vinod","rosemary","sona","agnes");
   echo"Array";
   print_r($name);
   echo"<br>"."Array in ascending order:";
   asort($name);
   print_r($name);
   echo"<br>"."Array in descending order:";
   arsort($name);
   print_r($name);
   ?>
</body>
</html>