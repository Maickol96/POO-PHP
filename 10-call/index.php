<?php
class Persona{

    //Atributos de la clase
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;

    }
    //metodo maqico Call - > detecta cuando el metodo no existe y hace la accion que definamos, esto para que no nos de error
    public function __call($name, $arguments)
    {
        $prefix_metodo = substr($name, 0, 3); //me saca la 3 primeras letras del nombre

        if ($prefix_metodo == "get") {
            $nombre_metodo = substr(strtolower($name), 3);//Recorteme las 3 primeras letras de ese string y conviertalo en minuscula

            if (!isset($this->$nombre_metodo)){
                return "No existe el metodo";
            }
            return $this->$nombre_metodo;
        }else{
            return "No existe el metodo";
        }


    }


}
//Objetos
$persona = new Persona("MAICKOL", 44, "Bogota");// de esta manera podemos pasarle los datos al constructor tambien
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
echo $persona->getPiano();
//Debemos acceder a la propiedad desde metodos
