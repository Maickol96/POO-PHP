<?php
//TRAIT: Nos permite definir una serie de metodos para compartir entre diferentes clases

trait Utilidades{
public function mostrarNombre(){
    echo "<h1>El nombre es ".$this->nombre."</h1>";
}
}
class Coche
{
    //Atributos
    public $nombre;
    public $marca;

    use Utilidades; //De esta manera implementamos a llamamos el trait
}

class Persona
{
    //Atributos
    public $nombre;
    public $apellidos;


    use Utilidades; //De esta manera implementamos a llamamos el trait
}

class VideoJuego
{
    //Atributos
    public $nombre;
    public $anio;


    use Utilidades; //De esta manera implementamos a llamamos el trait

}

//creamos objeto || instancia

$coche = new Coche();
$coche->nombre="Toyota";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre="Alberto Perez";
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->nombre="Lol";
$videoJuego->mostrarNombre();



var_dump($coche);