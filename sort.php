<?php
// مرتب سازی ایندکس ها با جابجایی کلید ها
$num=[];
for ($i=1;$i<=20;$i++){
    $num[]=rand(1,100);
}
print_r($num);
echo "<hr>";
sort($num);
print_r($num);