<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body><?php
    $amount = 0;
function vat($amount = 0) {
  return $amount*0.75; 
}
       echo "Vat: ";
echo vat(100);
    ?>
</body>
</html>
