<?php


require_once 'configuracion.php';

//Como son es una clase static y los metodos son static no es necesario crear un objeto para acceder a ellos lo puedo hacer mediante ::
Configuracion::setColor("blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter("true");

//Para poder mostrar el contenido de los metodos
echo Configuracion::$color. '<br/>';
echo Configuracion::$entorno. '<br/>';
echo Configuracion::$newsletter. '<br/>';

//opcion 2 creando el objeto
$configuracion = new Configuracion();
$configuracion::$color = "rojo";
echo $configuracion::$color;
var_dump($configuracion);
