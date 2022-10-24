<?php

function crange($size){

    for ($i = 0; $i <= $size;$i++){
        yield $i;
    }

}

$range = crange(1024000);

foreach ($range as $item) echo "$item ";
echo "<br> memory usade ".memory_get_usage()."<br>";