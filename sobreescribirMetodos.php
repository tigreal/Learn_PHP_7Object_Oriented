<?php
/**
 * para sobreescribir un metodo,los metodos tienen
 * que tener el mismo nuemro de argumentos
 */
class mascota
{
    protected $nombre;
    function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function correr(){
        echo "<p>{$this->nombre}.esta corrioendo</p>";

    }
    public function dormir()
    {
        echo "<p>{$this->nombre}.esta Durmiendo</p>";
    }
    /**est sera el metodo que vasmos a sobre escribir en las
     * clases heredadas donde se definira un metodo a la medida
     */
    public function play()
    {
        echo "<p>{$this->nombre}. haciendo algo</p>";
    }


    
}
class perro extends mascota
{
    public function play()
    {
        echo "{$this->nombre}. esta descansando";
    }
}
class gato extends mascota
{
    public function play()
    {
        echo "{$this->nombre}. esta trepando";
    }
}

$objperro= new perro("berno");
$objgato= new gato("niki");
$objmascota= new mascota("mascotaGenerica");
/**corrn */
echo "corren";
$objperro->correr();
$objgato->correr();

/**duermen */
echo "duerman";
$objperro->dormir();
$objgato->dormir();
/**hacen */
echo "hacen";
$objperro->play();
$objgato->play();
$objmascota->play();
/**la palabra clave final, en una funcion
 * significa que no puede ser alterada por ninguna sub
 * clase, al igual tambien puede ser final una clase esto
 * significa que no puede ser extendida o heredada
 */

 /**
  * la combinacion del nombre de una funcion y sus armgumentos 
  *se conoce como firma, a excepcion de los constructore culquir
  *clase derivada debe usar la misma firma al anular un metodo(funcion)
   */

/**
* sobreescribir un metodo que requira un numero diferente 
*de argumentos que del original se llama "sobre carga de metodo/overloading"
*esto se puede lograr pero no es tan facil como hacer un sobreescribir   
*/



?>
