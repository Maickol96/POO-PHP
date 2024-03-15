<?php
//Llamamos la clase de coche
require_once 'coche.php';

//creamos un objeto

$coche3 = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);//Pasar valores directamente desde el objeto sin tener crear metodo => le pasamos parametros al constructor
$coche4 = new Coche("Verde", "Ford", "f150", 150, 200, 5);//Pasar valores directamente desde el objeto sin tener crear metodo => le pasamos parametros al constructor
$coche5 = new Coche("Rojo", "Mazda", "Cx5", 150, 200, 5);//Pasar valores directamente desde el objeto sin tener crear metodo => le pasamos parametros al constructor
$coche6 = new Coche("Azul", "Toyota", "Hilux", 150, 200, 5);//Pasar valores directamente desde el objeto sin tener crear metodo => le pasamos parametros al constructor

//$coche3->color = "Lila";//De esta manera tambien puedo modificar el valor del atributo si es publico -> no es recomendable por malas practicas usar esta manera siempre se debe pasar por un metodo
//var_dump($coche3);
//var_dump($coche4);
//var_dump($coche5);
//var_dump($coche6);
echo "<br/>";

//LLAMAR CLASE PUBLICA
$coche3->color="Rosa"; //Tratamos de modificar el objeto coche el atributo color que es publico => funciona correctamente


//LLAMAR CLASE PROTECTED
//$coche3->marca="Ferrary";//Tratamos de cambiar el objeto coche el atributo marca que es protected  => Me da error por que no tengo acceso a este atributo, para poderlo modificar debo crear un metodo y implementarlo desde aca
$coche3->setMarca("Samuary"); //Manera correcta de modificar o consultar un atributo que este en visibilidad protected => es decir se debe llamar a un metodo espesifico para esa funcion
//var_dump($coche3);

//LLAMAR CLASE PRIVATE
//Al igual que el Protected se debe crear un metodo para poder acceder a este atributo de lo contrario no podremos.\
//$coche3->getModelo();
//var_dump($coche3);


//echo $coche3->motrarInformacio("Probar si el mentodo esta bien o la vlaidacion esta mal");// llamamos al metodo de mostrar informacion
echo $coche3->motrarInformacio($coche5);// llamamos al metodo de mostrar informacion
