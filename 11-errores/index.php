<?php

//Excepcion un error que presenta nuestro codigo , o que genera nuestro codigo para avisarnos que ha ocurrido un fallo


//Para capturar errores o excepciones

try {//pruebe
    throw new Exception('Errores de validacion');
}catch (Exception $e){//capture
        echo "Ha habido un error ".$e->getMessage();
} finally {//sirve para indicar cuando se a terminado ya esa estructura
echo "Todo correcto";
}

//ejemplo 2

try {
    //recibir por la URl un parametro get y comprobar si existe
    if (isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']}.</h1>";
    }else{
        throw new Exception('<br/>Faltan parametros por la url');
    }
}catch (Exception $e){//Captura error
    echo "Ha habido un error ".$e->getMessage();
}