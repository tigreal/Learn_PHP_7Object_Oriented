<?php
/**
 * las clases pueden ser herdadas, de una super clase o clase base, con la palabra extend
 */
class rectangulo
{
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho;
        $this->alto;
    }
    

    public function obtenerArea()
    {
        return $this->ancho * $this->alto;
    
    }

    
}


/**
 * heredaremos la clase rectangulo, junto con todas sus propiedades y sus metodos,
 * sin embargo la instancia la clase hija no llama al contructor de la clase padre,
 * por lo que en este ejemplo definiremos su propio contructor,
 */
class cuadrado extends rectangulo
{
        function __construct($lado)
        {
            /** al heredar la clase heredo todos los atributos y metods*/
        }
    
}

/** 
 * se instancia ambas clases y se puede ver como la clase cuadrado hereda todos los atributos
 * el la clase pabre rectangulo sus propiedades cuando instanciemos usaremos los atributos
 * y metodos de la clase padre
*/
/**aqui instanciamos un objeto de la clase rectangulo dandole un */
$obj1=new rectangulo(44,55);


?>