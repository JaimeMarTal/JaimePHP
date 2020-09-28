<?php
namespace ev1;
$n = 0;
$p = 0;

echo 'Introduce n: ';
fscanf(STDIN, "%d\n", $n);
echo 'Introduce p: ';
fscanf(STDIN, "%d\n", $p);

for ($i=0;$i<$n;$i++){
    for ($j=0;$j<$p;$j++){
        echo $j;
    }
};
?>