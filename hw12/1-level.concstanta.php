<?php

define("num", 5);

echo "Numbers divisible by 5 : "."\n";

for ($i = 1; $i <= 100; $i++) {
    if ($i % num == 0) {
        echo $i."\n";
    }
}
