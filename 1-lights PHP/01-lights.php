<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>1-lights</title>
    </head>
    <body>
    <?php
$lights;
for ($iter = 0; $iter < 100; $iter++)
{
    $lights[$iter]="On";
}
for($i=2;$i<=100;$i++){
$fois=1;
for($j = 0; $j<100; $j++){
    if($fois==$i){
        $fois=1;
        switch($lights[$j]){
            case "On":
            $lights[$j]="Off";
            break;
            case "Off":
            $lights[$j]="On";
            break;
        }
    }
    else{
        $fois++;
    }
}
}
$lightOn=0;
for($x =0;$x<100;$x++){
if($lights[$x]=="On"){$lightOn++; 
    echo "l'interrupteurs".($x+1)." est en position On <br>";
}}
echo "il y a".$lightOn." qui sont seront à l'état On";
?>
        

    </body>
</html>


