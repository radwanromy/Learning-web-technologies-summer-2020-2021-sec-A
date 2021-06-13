<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>    <table><tr>
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
    $lf='A';
       $f=0;
        if($i==3)
        {
            
            echo $lf."<br>";
        }
        elseif($i==2){  $lf++;
            echo $lf;
             $lf++;
            echo $lf."<br>";
        }
        elseif($i==1){  $lf++;
                        $lf++;
                       $lf++;
            echo $lf;
             $lf++;
            echo $lf;
             $lf++;
            echo $lf."<br>";
        }
           
       }
}
$n =3;
nprint($n);
    
    ?></td>
    </tr>
    </table>
</body>
</html>
