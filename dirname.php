<?php
// نمایش مسر یک فایل
var_dump(dirname("D:/lord/images/duke.jpg"));
var_dump("../str_replace");
// نمایش فایل ها با پسوند مورد نظر
echo "<hr>";
$glob=glob("D:/lord/images/*.jpg");
var_dump($glob);