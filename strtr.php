<?php
// strtr
$str = "Hello World!";
echo strlen($str) . "\n";
$dict = [
    "hello" => "سلام",
    "bye" => "خداحافظ",
    "how are you" => "چطوری؟",
    "hey" => "هوی!"
];
echo strtr("hello bye how are you hey", $dict);
// سلام خداحافظ چطوری؟ هوی!