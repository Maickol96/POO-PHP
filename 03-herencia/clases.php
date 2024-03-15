<?php
//HERENCIA: La posibilidad de compartir atrubutos y metodos entre clases

class Persona
{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;


    //Se crean los metodos de get y set de cada uno de los atributos de la clase, o tambien se puede generar como Getters y Setters
    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }

    public function caminar()
    {
        return "Estoy caminando";
    }

}

class Informatico extends Persona //extends Persona  -> Para heredar de otra clase (clase padre)
{
    public $lenguajes;
    public $experienciaProgramando;

    //Creamos constructor
    public function __construct()
    {
        $this->lenguajes = "HTML, CSS, PHP, PYTHON, JAVA, C#";
        $this->experienciaProgramando = 10;
    }


    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;
    }

    public function programar()
    {
        return "Soy programador";
    }

    public  function repararOrdenador()
    {
        return "Reparar ordenadores";
    }

    public function hacerOfimatica()
    {
        return "Estoy escribiendo en word";
    }
}

//Creamos una clase que herede de informatico
class  TecnicoRedes extends Informatico//Clase hija
{

    public $auditarRedes;
    public $experienciaRedes;

    //creamos constructor
    public function __construct()
    {
        parent::__construct();// con esto heredamos de la clase padre los constructores que tenga definidos en esa clase


        $this->auditarRedes = 'experto';
        $this->experienciaRedes = 5;
    }

    public function auditoria()
    {
        return"Estoy editando una red";
    }
}