<?php
$time_start=microtime(true);
$i=1;
while($i <100){
    echo "hi!!\n";
    $i++;
}
$time_end=microtime(true);
$time = $time_end - $time_start;
echo $time;


// test_me(function(){
//     $i=1;
//     while($i <= 100000){
//         $i++;
//     }
// });
// test_me(function(){
//     print "hey";
// });
