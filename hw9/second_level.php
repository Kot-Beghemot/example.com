$way = '/home/unreal/www/example.com/newlife/php-homework/hw9/file.txt';

$path_to_writing = '/home/unreal/';

function write_middle_str($way, $path_to_writing)
{

$readed_file_array = read_file($way);

$count = count($readed_file_array);  // кол-во строк в файле

$implode = implode('',$readed_file_array);  // сливаем массив в строку

$strlen = strlen($implode);  //длина всех строк в файле

$midLen = $strlen / $count;  // средняя длина строки в файле

foreach ($readed_file_array as $value) {

$amount_symbol = strlen($value);

$write_file = fopen("$path_to_writing/middle_str",'a+');

if ($amount_symbol > $midLen) {

fwrite($write_file, $value);

}
}
fclose($write_file);
}

write_middle_str($way, $path_to_writing);
