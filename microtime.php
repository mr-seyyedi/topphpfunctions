<?php
$time_start=microtime(true);
$i=1;
while($i <100){
    echo "hi!!\n";
    $i++;
}
$time_end=microtime(true);
$time = $time_end - $time_start;
echo "<hr> time start:$time_start <hr>";
echo "time end:$time_end <hr>";
echo "time time:$time <hr>";

