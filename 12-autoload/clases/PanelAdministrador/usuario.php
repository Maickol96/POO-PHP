<?php
//Creamos NAMESPACE
namespace PanelAdministrador;


//creamos una clase
class Usuario
{
    //Atributos
    public $nombre;
    public $email;


    //Metodos
    public function __construct()
    {
        $this->nombre = "Mario Parado";
        $this->email = "Mario@Parado.com";
    }

}