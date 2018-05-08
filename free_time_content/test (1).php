<?php
	$number= $_GET['num'];
	$number1= $_GET['num2'];

	$str = '[{"num":'.$number1.'},{"num":'.$number.'}]';
	//$str = '[1,2,3,4,5]';

	echo $str;

?>
