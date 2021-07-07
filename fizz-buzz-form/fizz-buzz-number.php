<?php



$fizz = intval($_POST['fizz']);
$buzz = intval($_POST['buzz']);
$num = intval($_POST['number']);

$i = 1;

while ($i <= $num) {
	if ($i % $fizz == 0 && $i % $buzz == 0) {
			echo "FB\n";
		} elseif ($i % $buzz == 0) { 
	          echo "B\n";
		  } elseif ($i % $fizz == 0) {
			    echo "F\n";	
			} else {
			     echo "$i\n";
			  }
			    $i++;
}
