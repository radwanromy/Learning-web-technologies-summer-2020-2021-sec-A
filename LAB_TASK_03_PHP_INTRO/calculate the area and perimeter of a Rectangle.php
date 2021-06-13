<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body><?php
function area(int $length = 0, int $width = 0) {
  return $length*$width; }
       echo "Area: ";
echo area(4,5);
function perimeter (int $length = 0, int $width = 0) {
  return 2*$length*$width; }
    echo "<br>Perimeter: ";
echo perimeter(4,5);

?>
    
</body>
</html>
