<?php
namespace ev1;

$ldt= 'txt';
$n = 0;

echo 'L�nea de txt: ';
fscanf(STDIN, "%s\n", $ldt);

echo 'numero: ';
fscanf(STDIN, "%s\n", $n);

for ($i=1;$i<=$n;$i++){
     echo "<h$i>$ldt</h$i>\n";
}

for ($j=$n-1;$j>=1;$j--){
    echo "<h$j>$ldt</h$j>\n";
}
?>

