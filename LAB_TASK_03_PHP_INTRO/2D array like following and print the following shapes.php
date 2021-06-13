<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    <table border='1'><tr>
    <td colspan="2">Shapes to print </td>
</tr><tr>
<td><?php

function nprint($n)
{
    $f=0;
    for ($i = $n; $i >0; $i--)
        {
        for($j = $i; $j >0; $j-- )
            {
            
            $f++;
       // $l=$f++;
                echo $f;
            }
        echo "<br>";
       $f=0;
       }
}
$n =3;
nprint($n);
    
    ?></td>
    <td><?php
function lprint($ln)
{
    
    $lf='A';
    for ($li = 0; $li <$ln; $li++)
        {
        for($lj =0 ; $lj<=$li; $lj++ )
            {
        
           
                echo $lf; $lf++;
            }
        echo "<br>";

       }
}
$ln =3;
lprint($ln);
    
    ?></td>
    </tr>
    </table>
</body>
</html>
