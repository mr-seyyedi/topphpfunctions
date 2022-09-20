<?php
// آرایه را با یک یا چند آرایه دیگر مقایسه می کند و مقادیر موجود در آرایه را که در هیچ یک از آرایه های دیگر وجود ندارد، برمی گرداند.
$arr1 = array(
     "green",
     "red",
     "blue",
     "red"
);
$arr2 = array( 
     "green", 
     "yellow", 
     "red" 
);
$array = array_diff($arr1, $arr2);

print_r($array);