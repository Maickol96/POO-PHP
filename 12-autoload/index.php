<?php
/*LLamamos los files donde tenemos las clases definidas(creadas) par poderlas usar aca en el index.php
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';*/

//con el autoload.php podemos evitar hacer un require_once por cada uno de los archivos y y solo llamar un archivo ya que hay tendremos todas la conexiones con esta clase
require_once 'autoload.php';

/*
//Para no tener que cargar todos los archivos uno por uno con un require, creamos un archivo autoload.php

//Creamos los objetos para llamar nuestras clases
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;

*/

//NAMESPACES -> Espacio de nombre y paquetes

//Cargar un espacio de nombre
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

//LLamar otra clase o file con el mismo nombre Usuario

class Principal
{//creamos una clase

    //creamos los atributos de la clase Principal
    public $usuario;
    public $categoria;
    public $entradas;

    //creamos los metodos ->"constructor"
    public function __construct()
    {
        //LINEA 24
        // new MisClases\Usuario(); se pone el paquete o nombre de la carpeta y seguido el nombre de la clase
        //$this->usuario = new MisClases\Usuario();//al hacerlo de esta manera ->$this->usuario = new Usuario();<- le estoy dando el valor de mi objeto nombre al atributo usuario de mi metodo o constructor de la clase Principal
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entradas = new Entrada();
    }


    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }


    public function getEntradas()
    {
        return $this->entradas;
    }


    public function setEntradas($entradas)
    {
        $this->entradas = $entradas;
    }

    //creamos metodo Informacion
    function Informacion()
    {
        echo __CLASS__, "<br/>"; //Nos imprime la clase
        echo __METHOD__,"<br/>"; //Nos imprime la metodo
        echo __FILE__, "<br/>";//Nos indicara la ruta
        echo __NAMESPACE__, "<br/>";
    }


}

//OBJETOS
//Objeto principal
$principal = new Principal();

//creamos objeto de metodoInformacion
$principal->informacion();

var_dump($principal->usuario);


//PERMITE VERIFICAR SI EXISTE UN OBJETO -> get_class_methods($principal);
$metodos = get_class_methods($principal);
$busqueda = array_search('setEntradas', $metodos);//me busca el metodo si existe y me da el numero de metodos que existen
var_dump($busqueda);


//Objeto otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);


//COMPROBAR SI UNA CLASE EXISTE O NO=> Le podemos poner un @ para que nos quite los errores naranja @class_exists('MisClases\Usuario');
$clase = class_exists('MisClases\Usuario');

//con if hacemos la validacion
if ($clase) {
    echo "<h1>La clase SI existe</h1>";
} else {
    echo "<h1>La clase  NO existe</h1>";
}