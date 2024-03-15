<?php
class Usuario{

    const URL_COMPLETADO = "http://localhost:8080/";//A si se define un atributo de tipo constante, por lo general se escribe en mayusculas
    public $email;
    public $password;


    //Generamos loa metodos getters y setters

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }

}

//creamos el objeto de la clase Usuario
$usuario = new Usuario();
//para acceder al atributo constante
echo $usuario::URL_COMPLETADO;//Con la flecha no se puede acceder a la un atributo constante se debe con los ::
var_dump($usuario);