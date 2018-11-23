<?php

$counter_file=("countila.txt");
$visits=file($counter_file);
$visits[0]++;
$fp=fopen($counter_file,"w");
fputs ($fp, "$visits[0]");
fclose($fp);
echo $visits[0];

?>