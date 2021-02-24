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
        $this->ancho=$ancho;
        $this->alto=$alto;
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
            /** al heredar de la clase rectangulo heredo todos los atributos y metodos
             * pero el contructor no se llama de forma automatica
             * por lo que crearemos su propio constructor quien iniciara 
             * su propio constructor
             *
            */
            /**
             * aqui colocamos el mismo valor a alto y ancho
             * porque el cuadrado tiene un solo lado
             */
            $this->alto=$lado;
            $this->ancho=$lado;
        }
    
}

/** 
 * se instancia ambas clases y se puede ver como la clase cuadrado hereda todos los atributos
 * el la clase pabre rectangulo sus propiedades cuando instanciemos usaremos los atributos
 * y metodos de la clase padre
*/
/**aqui instanciamos un objeto de la clase rectangulo dandole un 
 * ancho y  un alto 
*/
$obj1=new rectangulo(6,5);
/**aqui instanciomos un objeto para la clase cuadrado y como definimos
 * su propio constructor vamos solo asinamos el mismo lado a las propiedades
 * ancho y alto que fueron eredadas
 * 
 */
$obj2=new cuadrado(5);

echo $obj1->obtenerArea();
echo "</br>";
echo $obj2->obtenerArea();

?>

