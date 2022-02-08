<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <table>
        <tr>
           <td>Enter the meter number:
               <input type="number" name="num1" value=""  placeholder="enter meter number">
           </td>
        </tr>
        <tr>
            <td> Enter the number of units:
                <input type="number" name="unit" value="" placeholder="enter units">
            </td>
        </tr>
        <tr>
            <td>Enter the category:
                <select name="tariff">
                    <option>select</option>
                    <option>Rural</option>
                    <option>Residential</option>
                    <option>Commercial</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="submit">
            </td>
        </tr>
    </table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num1=$_POST['num1'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
    {
        if($unit>0&&$unit<=100)
        {
            $e=20;
            $price=(($unit*.25)+$e);
            echo"$price";
        }
        elseif($unit>100&&$unit<=200)
        {
            $e=20;
            $price=(($unit*.55)+$e);
            echo"$price";
        }
        elseif($unit>200&&$unit<=300)
        {
            $e=25;
            $price=(($unit*.75)+$e);
            echo"$price";
        }
        elseif($unit>300&&$unit<=400)
        {
            $e=25;
            $price=(($unit*1)+$e);
            echo"$price";
        }
        elseif($unit>400)
        {
            $e=30;
            $price=(($unit*1.50)+$e);
            echo"$price";
        }
        echo"Your Meter number is:".$num1;
        echo"<br>";
        echo"Units are:".$unit;
        echo"<br>";
        echo"Extra charges are:".$e;
        echo"<br>";
        echo"Total $unit units of charges:".$price;
        echo"<br>";
    }
    if($tariff=="Residential")
    {
        if($unit>0&&$unit<=100)
        {
            $e=25;
            $price=(($unit*1.25)+$e);
            echo"$price";
        }
        elseif($unit>100&&$unit<=200)
        {
            $e=25;
            $price=(($unit*1.55)+$e);
            echo"$price";
        }
        elseif($unit>200&&$unit<=300)
        {
            $e=30;
            $price=(($unit*1.75)+$e);
            echo"$price";
        }
        elseif($unit>300&&$unit<=400)
        {
            $e=30;
            $price=(($unit*2)+$e);
            echo"$price";
        }
        elseif($unit>400)
        {
            $e=35;
            $price=(($unit*2.50)+$e);
            echo"$price";
        }
        echo"Your Meter number is:".$num1;
        echo"<br>";
        echo"Units are:".$unit;
        echo"<br>";
        echo"Extra charges are:".$e;
        echo"<br>";
        echo"Total $unit units of charges:".$price;
        echo"<br>";
    }
    if($tariff=="Commercial")
    {
        if($unit>0&&$unit<=100)
        {
            $e=30;
            $price=(($unit*2.25)+$e);
            echo"$price";
        }
        elseif($unit>100&&$unit<=200)
        {
            $e=30;
            $price=(($unit*2.55)+$e);
            echo"$price";
        }
        elseif($unit>200&&$unit<=300)
        {
            $e=35;
            $price=(($unit*2.75)+$e);
            echo"$price";
        }
        elseif($unit>300&&$unit<=400)
        {
            $e=35;
            $price=(($unit*3)+$e);
            echo"$price";
        }
        elseif($unit>400)
        {
            $e=40;
            $price=(($unit*3.50)+$e);
            echo"$price";
        }
        echo"Your Meter number is:".$num1;
        echo"<br>";
        echo"Units are:".$unit;
        echo"<br>";
        echo"Extra charges are:".$e;
        echo"<br>";
        echo"Total $unit units of charges:".$price;
        echo"<br>";
    }
}
?>
