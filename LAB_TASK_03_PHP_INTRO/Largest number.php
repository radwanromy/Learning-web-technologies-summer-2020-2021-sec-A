<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body><?php
$x = 50;
$y = 350;
$z = 250;
echo "x value is $x<br>";
echo "y value is $y<br>";
echo "z value is $z<br>";
if ($x > $y || $x >$z)
{
echo "Value x= $x is the largest number";
}

else if ($y > $x || $y >$z)
{
echo "Value y= $y is the largest number";
}

else if ($z > $x || $z < $y)
{
echo "Value z= $z is the largest number";
}
    ?>
</body>
</html>
