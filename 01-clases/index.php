<?php
//Programación orientada a objetos POO

//Definir una clase (molde para crear mas objetos de tipo coche con caracteristicas parecidas)
class Coche
{
    //Atributos o propiedades (variables)
    public $color = "Rojo";
    public $marca = "Ferrary";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;


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


}//Fin definicion de la clase


//Crear un objeto / Instanciar una clase
$coche = new Coche();


//Usar los metodos
echo $coche->getVelocidad();
echo '<br>';


//Cambiar color al coche
$coche->setColor("negro");
echo "El color del coche es: ".$coche->getColor().'<br/>';


//Acelerar el coche 4 veces y frenamos 1
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche: ".$coche->getVelocidad();


//Puedo crear varios objetos de la misma clase, la condicion es que se debe llamar diferente
$coche2 = new Coche();


//Provamos que no afecta al segundo objeto si cambiamos el color a uno de los objetos
$coche2->setColor("Verde");


//para poder cambiar el color del coche desde el objeto a la clase, se crea un metodo set para entrada
$coche2->setModelo("Gallardo");

var_dump($coche);
var_dump($coche2);


class Celular //definimos la clase Celular
{
    //Definimos sus atributos
    public $color = "gris";
    public $marca = "Iphone";
    public $modelo = 13;
    public $almacenamiento = "256 gb";


    //definir sus metodos
    public function getOdelo()//metodo para consultar el color
    {
        return $this->modelo;// entre a la clase Celular y muestreme el atributo model0
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

}

//creamos un objeto
$celular = new Celular();// creamos la variable $celular y le decimos que es igual o por dentro tiene a la clase Celular()

//para ver el contenido de la clase
var_dump($celular);

//Hacemos una consulta a la clase por medio del objeto para consultar el modelo por medio del metodo getModelo() que creamos
echo "El modelo es: ". $celular->getOdelo(); //echo e imprimimos el texto que queremos, concatenamos el objeto y con le flecha le indicamos que entre al metodo getModelo();

echo "<br/>";

$celular->setColor("Verde mate");//Por medio del objeto $celular consultamos el metodo setColor donde le indicamos el color que queremos modificar.
echo "El color es: ".$celular->getColor();//Imprimimos el texto y concatenamos el objeto $celular con el cual llamamos el metodo getColor() y nos muestra el color del atributo de la clase Celular.


echo "<br/>";


//Para ver el contenido de completo de la clase
var_dump($celular);