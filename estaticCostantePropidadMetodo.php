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
echo "</br><p>Primera llamada a la funcion mostrar</p>";
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
