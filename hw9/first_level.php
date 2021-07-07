<?php

// функция для чтения

$way = '/home/unreal/www/example.com/newlife/php-homework/hw9/file.txt';

function read_file($way) {

    $file_array = file("$way");

    //print_r($file_array);

    return $file_array;

}
read_file($way);


// функция для записи и создания нового файла через строку из верхней функции

$way = '/home/unreal/www/example.com/newlife/php-homework/hw9/file.txt';

$path_to_writing = '/home/unreal/';

function write_file($way,$path_to_writing) {

    $readed_file_array = read_file($way);

    $count = 0;

    while($count < count($readed_file_array)){

        $write_file = fopen("$path_to_writing/half",'a+');

        if ($count % 2 == 0) {

            fwrite($write_file, $readed_file_array[$count]);
        }

        $count+=2;
    }

    fclose($write_file);
}

write_file($way,$path_to_writing);
