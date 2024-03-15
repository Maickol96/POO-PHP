<?php

class Usuario
{
    //creamos atributos
    public $nombre;
    public $email;

    //creamos los metodos
    public function __construct()
    {
        $this->nombre = "Maickol Jose";//damos un valor al nombre
        $this->email = "maickol@jose.com";//damos un valor al nombre
        echo "Creando el objeto <br/>";
    }
    public function __toString()
    {
        return "Hola {$this->nombre}, esta registrado con {$this->email} <br/>"; //Con {} -> interpolamos variables
    }

    public function __destruct() //Para destruir -> cuando ya no existan mas referencias al objeto dezstruirlo
    {
        echo "<br/> Destruyendo el objeto";
    }

}
//creamos objeto
$usuario = new Usuario();
echo $usuario;
echo $usuario->email;

//bucle for para mostrar numero del 1 al 200

for ($i = 0; $i <= 200; $i++){
    echo $i."<br/>";
}

