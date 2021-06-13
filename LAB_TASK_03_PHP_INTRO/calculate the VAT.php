<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body><?php
function vat(int $amount = 0) {
  return $amount*0.75; 
}
       echo "Vat: ";
echo vat(100);
    ?>
</body>
</html>
