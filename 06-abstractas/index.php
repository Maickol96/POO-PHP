<?php

//Clase Abstracta -> Una clase que no se puede instanciar no podemos crear objetos con ella, pero s la podemos usar para heredar

abstract class Ordenador// De esta manera definimos una clase abstracta
{
    //Atributos || Propiedad
    public $encendido;


    //Metodos
    //Cuando defino un metodo abstracto no puede indicarle que funcionalida va tener dentro, simplemente la defino, indico que va a existir
    abstract public function encender();//En esta clase padre la podemos crear como metodo sin funcionalidad, es decir no sabremos que funcionalidad va a tener el clase hija, pero en la clase hija podremos definir la funcionalidad que queramos


    public function apagar()
    {
        $this->encendido = false;
    }

}

class PcAsus extends Ordenador
{
    //Atributos
    public $software;


    //Metodos
    public function arrancarSoftware()
    {
        $this->software = true;
    }

    //para poder heredar la clase abstracta debo cumplir con un contrato y que esta tenga la misma estructura, es decir que exista los metodos que ella tiene

    public function encender()//aca ya le puedo dar una funcionalidad a la ese metodo abstracto sin ningun problema
    {
        $this->encendido = true;
    }
}

//creamos objeto
$ordenador = new PcAsus();
//Ejecutamos los metodos
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);