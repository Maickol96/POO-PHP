<?php

class Coche
{
    //Atributos o propiedades (variables)

    //PUBLIC: -> Podemos acceder desde cualquier lugar, dentro de la clase actual dentro de clases que hereden esta clase
    //             o fuera de la clase.
    public $color;

    //PROTECTED: -> Podemos acceder desde la clase que los define y desde la clases que hereden esta clase
    protected $marca;

    //PRIVATE: -> Unicamente se puede acceder desde esta clase, es decir desde la clase que los define
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;


    //Creamos constructor
//    public function __construct()//es una mala practica setear directamente valores a los atributos, se hace por medio de los constructores al igual los metodos de consulta y seteo
//    {
//     $this->color = "Rojo";
//     $this->marca = "Ferrary";
//     $this->modelo = "Aventador";
//     $this->caballaje = 500;
//     $this->plazas = 2;
//
//    }


    //podemos pasar los valores de los atributos directamente desde el objeto que creamos, simplemente se instancian desde el constructor asi:
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;

    }



    //Metodos, son acciones que hacen los objetos (Antes eran funciones)
    public function getColor()
    {
        //$this -> Busca en esta clase la propiedad x
        return $this->color;
    }


    //Set -> pra neviar  un valor a la propiedad
    public function setColor($color)
    {
        $this->color = $color;
    }

    //Se crea este metodo tipo set para enviar el modelo a la clase desde el objeto
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }


    //get -> Para extraer o sacar un valor de esa propiedad
    public function acelerar()
    {
        $this->velocidad++;
    }


    public function frenar()
    {
        $this->velocidad--;
    }


    //devolver el valor que tiene velocidad
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    //metodo para poder modificar un atributo protected
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    //Metodo -> permita imprimir la informacion de un coche
    public function motrarInformacio(Coche $miObjeto)//indicamos el tipo de dato, o le ponemos como tipo de dato el objeto de tipo coche, si no me llega en ese formato me da error, si no le espesificamos me puede llegar cualquier cosa
    {
        if (is_object($miObjeto)){ //Validamos con un if que si es un objeto -> is_object() de tipo $miObjeto mostrar los datos
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion.= "Color: ".$miObjeto->color;
        $informacion.= "<br/> Modelo: ".$miObjeto->modelo;
        $informacion.= "<br/> Velocidad: ".$miObjeto->velocidad;
            }else{
            $informacion = "Tu dato es: $miObjeto";

        }
        return$informacion;
    }


}//Fin definicion de la clase

