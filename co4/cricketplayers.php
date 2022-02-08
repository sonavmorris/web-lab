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
    $players=array("Rohit Sharma","Virat Kholi","KL Rahul","Rishabh Pant","Mohammed Shami","Jasprit Bumrah","Ravindra Jadeja");
    echo"<table border='3'><tr><th>SL.NO</th><th>PLAYERS</th></tr>";
    foreach($players as $key=>$value)
    {
        echo"<tr><td>".$key."</td><th>$value</th></tr>";

    }
    echo"</table>";
    ?>
</body>
</html>