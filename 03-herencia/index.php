<?php
require 'clases.php';

//instancia de persona
//Creamos un objeto
$persona = new Persona();

//Seteamos los valores
//$persona->setNombre("Maickol");
var_dump($persona);

//Objeto informatico
$informatico = new Informatico();

//$informatico->setAltura(1.90);
//echo $informatico->sabeLenguajes("HTML, CSS, PHP");

var_dump($informatico);



//objeto para llamar la clase tecnico => validamos que hereda todos los atributos de las demas clases

$tecnico = new TecnicoRedes();
var_dump($tecnico);