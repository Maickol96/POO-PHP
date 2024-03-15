<?php

//Creamos la funcion para cargar los archivos, le pasamos por parametros un $class
function app_autoloader($class)
{
    require_once 'clases/' . $class . '.php'; //Le indico la carpeta o directorio, concateno el nombre del fichero y por ultimo la extencion
}

//este metodo lo que hace es utilizar esta funcion para buscar todas la clase que hay dentro de el directorio que yo le indique y no tener que usar el require once directamente
spl_autoload_register('app_autoloader');