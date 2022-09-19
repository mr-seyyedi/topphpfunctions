<?php
$arr="hello worldo o o o o  o";
$s=0;
while(true){
    $s=strpos($arr,"o",$s+1);
    if($s===false)  break;
    else{echo $s."\n";}
}