<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    <table border='1'><tr>
<td><?php

function sprint($sn)
{
    $sf=0;
    for ($si = 0; $si < $sn; $si++)
        {
        for($sj = 0; $sj <= $si; $sj++ )
            {
            
                echo "*";
            }
        echo "<br>";
       $sf=0;
       }
}
$sn =3;
sprint($sn);
    
    ?></td><td><?php

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
       $lf='A';
       }
}
$ln =3;
lprint($ln);
    
    ?></td>
    </tr>
    </table>
</body>
</html>
