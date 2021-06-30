<?php 
/*	
		Funciones para Ordenar Arreglos

sort () - arreglos en orden ascendente
rsort () - arreglos en orden descendente

asort () - arreglos asociativas en orden ascendente, de acuerdo con el valor
ksort () arreglos asociativas en orden ascendente, de acuerdo con la clave
arsort () arreglos asociativas en orden descendente, de acuerdo con el valor
krsort () arreglos asociativas en orden descendente, de acuerdo con la clave 

*/

$a = array(8,5,9,4,7);
// rsort($a);
// print_r($a);


$b = array('a' => 5, 'c' => 4, 'd' => 1, 'b' => 10);
ksort($b);
print_r($b);

 ?>