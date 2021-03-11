<?php


/**los atributos de clase estaticos son equivalentes, a
 * las variables de funcion estatica, las cuales recuerdan 
 * el valor guardado en cada llamada a la funcion,
 */
function funcionVariableStatica()
{
    static $numero = 0;
    $numero++;
    echo $numero;
}
funcionVariableStatica();
echo "</br>";
funcionVariableStatica();
echo "</br>";
funcionVariableStatica();
echo "</br>";
funcionVariableStatica();
echo "</br>";
/**
 * para los atributos estaticos de una clase el cocepto es
 * el mismo, excepto que una variable estatica de la clase se
 * recuerda en todas las instancias de esa clase(en todos los objetos)
 * para declarar un atributo estatico usamos el key word "static"
 */

class atribbStatico
{
    /**
     * definimos un atributo estatico 
     * donde primero se coloca el nivel de acceso y la palabra statc
     * public+_private+protected+static+$nombreVariable
     */
    public static $numero = 0;
    public $nombre = "osmar";

    function __construct()
    {
        /**no se puede, acceder a los atributos staticos atravez
         * del objeto mal($obj->VariableStatica o  $obj::VariableStatica)
         * para poder acceder a la variable/propiedad statica dentro
         * de la clase debes usar la "self::$variableStatica" con su 
         * signo de dolar, este script seria un contador de cuantos
         * objetos de esta clase existen, cada vez que se crea un 
         * nuevo objeto
         */
        echo self::$numero++;
    }
    public function mostrarVariableStatica()
    {

        echo self::$numero;
    }
    public function mostrarVariableNormalNombre()
    {
        echo $this->nombre;
    }
/**
 * los metodos estaticos se crean de la misma manera colocanco 
 * "static" 
 */


    public static function funcionStatica()
    {
        echo "funcion estatica";
    }
}

echo "<p>instancia:</p>";
$ejemplar1 = new atribbStatico();
echo "<p>llamando funcion mostrar Variable estatica</p>";
$ejemplar1->mostrarVariableStatica();
echo "</br>";
echo "<p>instancia:</p>";
$ejemplar2 = new atribbStatico();
echo "<p>llamando funcion mostrar Variable estatica</p>";
$ejemplar2->mostrarVariableStatica();
echo "</br>";
echo "<p>instancia:</p>";
$ejemplar3 = new atribbStatico();
echo "</br>";
echo "<p>llamando funcion mostrar Variable estatica</p>";
$ejemplar3->mostrarVariableStatica();
echo "</br>";
echo "<p>llamada a la funcion mostrar variable normal:</p>";
$ejemplar1->mostrarVariableNormalNombre();
/**las constantes son atributos estaticos porque son accesibles
 * para todas las instancias de la clase,o clases derivadas
 * pero el valor de una constante no puede cambiar, el valor no 
 * puede ser el resultado de una expresion, o el retorno de una, o resultado de 
 * otra variable, para definirla se utiliza la palabra
 *  "const" + el nombre de la variable(sin el signo de $)
 * por convencio se escribe en mayusculas las constantes, tampoco se puede 
 * acceder a la costantes atravez de los objetos al igual que el las variables
 * estaticas mal($obj->PI o $obj::PI) se puede usar el "self" para acceder dentro
 * de la clase y el nombre de la clase "claseName::PI, para acceder fuera de ella
 *
 */
class ejemploConstante
{
    const PI=3.14;

    public function llamarConstante()
    {
        echo self::PI;
    }

}

$obj =new ejemploConstante;
echo "</br>llamando a la constande desde un funcion/metodos:";
echo  "<p>{$obj->llamarConstante()}</p>";
echo "<p>Este valor es llamando fuera de la clase sin usar un objeto:</p>".ejemploConstante::PI;
/**el sisguiente es un ejemplo: */
class mascota
{
    /**defomos dos propiedas una estatica y una normal */
    protected $nombre;
    private static $_contador = 0;
/**el contructor llama al contador statico para que se incremente con cada instancia 
 * el constructor de la de la clase padre no se llama automaticamente en las clases 
 * deribadas, por eso se hace un nuevo constructor para la clase hija o se debe llamar
 * con la palabra clave "parent::__construct()
*/
    function __construct($nombre)
    {
        $this->nombre=$nombre;
        self::$_contador++;

    }
    /**Al llamar "unset($obj)" llama al destructor que decrementa en 1 */
    function __destruct()
    {
        self::$_contador--;

    }
    /**la funcion es estatica por esta razon se tiene que acceder fuera de
     * la clase con el nombreDeLaClase::NombreMetodoEstatico
     */
    public static function obtenerContador()
    {
        
        return self::$_contador;
    }
    
    
    


} 

    class gato extends mascota
    {
        
    }
    class perro extends mascota
    {
        
    }

/**se instancia dos objetos para el cotador se incremente */
$obj11=new gato();
$obj22=new perro();



 




