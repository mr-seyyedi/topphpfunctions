<?php
// تغیر یک کلمه یا چند کلمه در یک رشته
var_dump(str_replace("amir","mr seyyedi","hello good morning amir , bye amir good day",$arr["count"]));
print ($arr["count"]);
echo "<hr>";
var_dump(str_replace([
    "amir","day","hello"
],[
    "mr seyyedi","night","hi"
],"hello good morning amir , bye amir good day"));