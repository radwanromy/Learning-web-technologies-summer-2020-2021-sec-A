<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body><?php
	
$Array = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread", "RedSauce"];
  $search="Beans";
        for ($i = 0; $i < count($Array); $i++)  {
        if($Array[$i]==$search)
            {
            echo "Found : ".$Array[$i] ."<br>";
            }
            else
            {
               //echo "Not Found";
            }
        }  
?>
</body>
</html>
</body>
</html>