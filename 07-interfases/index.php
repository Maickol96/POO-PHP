<?php

interface Ordenador
{

    //definimos que acciones || metodos puede tomar
    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();

    public function detectarUSB();
}


//Creamos una clase
class iMac implements Ordenador//implementamos la interface
{
    //Creamos atributos
    public $modelo;


    //Creamo metodos
    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

//Debemos declarar cada uno de los metodos que tengamos en la interface de lo contrario nos dea error
    public function encender()
    {
        ;
    }

    public function apagar()
    {
        return "Lo que sea";
    }

    public function reiniciar()
    {
        return "Lo que sea";
    }

    public function desfragmentar()
    {
        return "Lo que sea";
    }

    public function detectarUSB()
    {
        return "Lo que sea";
    }


}

//creamos objetos
$maquintos = new iMac();
$maquintos->setModelo('Mac 2024');
echo $maquintos->getModelo();
