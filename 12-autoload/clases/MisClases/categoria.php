<?php

//Creamos la clase Categoria
namespace MisClases;
class Categoria
{
    //Creamos los atributos de la clase Categoria
    public $nombre;
    public $descripcion;


    //Creamos los metodos de la clase categoria
    public function __construct()
    {
        $this->nombre = "Accion";
        $this->descripcion = "Categoria enfocada a las review de los videojuegos de accion";
    }
}