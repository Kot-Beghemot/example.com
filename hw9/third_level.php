<?php

$way = '/home/unreal/www/example.com/newlife/php-homework/hw9/file.txt';  //  путь к файлу, в нём лежат 3 числа через пробел, например : 2 5 18 , 2 это твой fizz, 5 это buzz, 18 это num.

function read_file($way) {

    $file_array = file("$way"); // потом разбиваем файл в массив с помощью функции file, получится массив с ключом 0 и значениеми 2 5 18, вот как он выглядит : [0] => 2 5 18

    return $file_array;  // return возвращает этот массив, т.е.: [0] => 2 5 18

}
read_file($way); // вызов функции, т.е. массива который возвращает return






$way = '/home/unreal/www/example.com/newlife/php-homework/hw9/file.txt';

$path_to_writing = '/home/unreal/'; // путь, куда будет создавться новый файл и записываться результаты выполнения задачи

function write_fizz_buzz($way, $path_to_writing) // создаем функцию для записи в новый файл
{

    $num_array = read_file($way); // это массив с ключом 0 и значениеми 2 5 18, то что я выше писал, вот как он выглядит : [0] => 2 5 18

    foreach ($num_array as $value){ // перебираем циклом элементы (2 5 18), массива.

        $input = explode(' ', $value); // разбиваем элементы массива в еще один массив с ключами : [0] => 2, [1] => 5, [2] => 18 , и присваиваем к переменным

        $fizz = $input[0]; // здесь лежит число 2

        $buzz = $input[1]; // здесь лежит число 5

        $num = $input[2]; // здесь лежит число 18

        $i = 1;

        $write_file = fopen("$path_to_writing/fizz_buzz_result",'a+'); // $path_to_writing/fizz_buzz_result, путь где будет создан новый файл/как будет называться новый файл

        while ($i <= $num) {
            if ($i % $fizz == 0 && $i % $buzz == 0) {
                fwrite($write_file, "FB");  // теперь в новый файл будут записываться результаты прохождения цикла с помощью функции fwrite
            } elseif ($i % $buzz == 0) {
                fwrite($write_file, "B");
            } elseif ($i % $fizz == 0) {
                fwrite($write_file, "F");
            } else {
                fwrite($write_file, "$i");
            }
            $i++;
        }
        fwrite($write_file, "\n");
    }
    fclose($write_file);
}
write_fizz_buzz($way, $path_to_writing);
