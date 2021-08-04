<?php
include 'conexao.php';
include 'model.php';

	// ------------- Recebendo valores ------------------------------

	$a =filter_input(INPUT_POST, 'txta', FILTER_SANITIZE_NUMBER_INT);
	$b =filter_input(INPUT_POST, 'txtb', FILTER_SANITIZE_NUMBER_INT);
	$c =filter_input(INPUT_POST, 'txtc', FILTER_SANITIZE_NUMBER_INT);

//	if(is_numeric($a) == FALSE) exit('A não é um numero');
//	if(is_numeric($b) == FALSE) exit('B não é um numero');
//	if(is_numeric($c) == FALSE) exit('C não é um numero');

	$delta= Delta($a, $b, $c);
	
	$x1 = x1($b, $delta, $a);
	
	$x2 = x2($b, $delta, $a);

	insert_db($a, $b, $c, $delta, $x1, $x2);

//	var_dump($a);
//	var_dump($x1);
//	var_dump($x2);

	$result = 'Delta: '.$delta.'<br> x1: '.$x1.'<br> x2: '.$x2;
?>