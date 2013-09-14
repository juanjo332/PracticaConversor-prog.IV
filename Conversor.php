<?php 
 
    $cantidad = 100; 
$paises = array ("Mexico","Estados Unidos"); 
$cambios = array (12.30); 

echo $cantidad." En Moneda Estadounidense convertidos en Peso Mexicano: 
<br />"; 
for ($i=0; $i<1; $i++) 
echo $paises[$i]." ".$cambios[$i]*$cantidad."<br />"; 




?>