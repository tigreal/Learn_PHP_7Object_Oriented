<?php
/**
 * operador de alcance son dos puentos seguidos (::), se utiliza para acceder a los mienbros 
 * atravez de la clase, no objetos
 */

class pollo
{
    public $presa= "pechuga";
    function __construct()
    {
        /**aunq se puede llamar de esta forma al metodo
         * no es la forma correcta ya que self se usa para 
         * metodos estaticos, pero no da un warning el editor
         * tampoco se puede llamar en clase directamente
         * siempre tienen que estar dentro de algun metodo
         */
        self::comer("pollo");
    }
    
    public  function comer($presa)
    {
        //echo "usted esta comiendo una: $presa";
    }
    
}

 
/**hay dos lugares donde se utiliza este operador
 * 
 * dentro de la clase para evitar confusiones cuando las clases
 * heredadas tienen los mismo atributos y metodos
 * pero dentro de la clase tiene que utilizar la palabra clave "self"
 */
class AlgunaClase
{
    function __construct(){
        self::hacerAlgo();

    }
    protected function haceAlgo()
    {
        echo "OK";
    }

}

 /*
 * fuera de las clases para acceder a los miembros
 * sin crear primero objetos
 * 
 * fuera de la clase debera espesificar el nombre de la clase
 */
classNombre::nombreMetodo();
classNombre::nombrePropiedad();
/**
 * tambien podemos llamar al metodo desde otra clase heredada
 * con el uso de la clase padre al principio los dos puntos y el nombre del metodo o propiedad
 * el objetivo de esto seria ver que clases estan en el padre y que se puedan acceder
 * deacuerdo a su visibilidad, es mejor usar el key "parent", 
 * poque se minimiza las fallas que puedan aver en el cambio 
 * de nombre de la clase base
 */

class algunClase extends clasePadre
{
    function __construct(){
        parent::algunMetodo();
    }
}


?>