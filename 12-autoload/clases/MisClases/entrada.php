<?php

//Creamos la clase Entrada
namespace MisClases;
class Entrada
{
    //Creamos los atributos de la clase Entrada
    public $titulo;
    public $fecha;


    //Creamos los metodos de la clase Entrada
    public function __construct()
    {
        $this->titulo = "Review del GTA 5";
        $this->fecha = "3 de Marzo de 2024";
    }
}