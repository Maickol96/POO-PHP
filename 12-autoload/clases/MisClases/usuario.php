<?php
//NAMESPACE: Paquetes y espacios de nombres, ayuda a organizar nuestro codigo agrupando en clases o paquetes
namespace MisClases;// asi se crea los NAMESPACES -> se crea un paquete que se llama MisClases

//creamos la clase Usuario
class Usuario
{
    //creamos los atributos de la clase Usuario
    public $nombre;
    public $email;

    //creamos los metodos de la clase usuario
    public function __construct()
    {
        $this->nombre = "Maickol Velasco";
        $this->email = "maickol@velasco.com";
    }
}
