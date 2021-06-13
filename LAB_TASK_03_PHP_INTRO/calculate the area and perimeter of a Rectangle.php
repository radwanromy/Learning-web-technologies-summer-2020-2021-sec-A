<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body><?php
    $length = 0;$width = 0;
function area($length = 0,$width = 0) {
  return $length*$width; }
       echo "Area: ";
echo area(4,5);
function perimeter ($length = 0,$width = 0) {
  return 2*$length*$width; }
    echo "<br>Perimeter: ";
echo perimeter(4,5);
?>
    
</body>
</html>
