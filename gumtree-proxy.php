<?php

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept-language: en\r\n" .
            "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:68.0) Gecko/20100101 Firefox/68.0\r\n"
    ]
];

$context = stream_context_create($opts);

$html = file_get_contents("https://www.gumtree.com/ham-amatuer-radios", false, $context);

echo $html;
?>