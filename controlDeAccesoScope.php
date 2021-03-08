<?php
/**
 * control de acceso o visibilidad, esto define el alcance que 
 * que tienen un metodo o un atributo, hay tes niveles de 
 * visibilidad, public(publico), proteced(protegido), private(privado)
 * los metodos(funciones) que no tiene un tipo de visibilidad
 * declarada se toman como publicos, 
 * public: se accede desde cualquier clase y otro codigo de php,
 * desde otros archivos.
 * portected: solo es accesible desde dentro de la propia clase
 * y sus clases derivadas, pero no puedes llamarse directamente
 * desde un objeto instaciado de las clases.
 * private:solo dentro de la clase que la definio
 * la visibilidad detro de opp, lleva el concepto de encapsulamiento
 * que significa ocultar informacion, que no se necesiten que esten
 * fuera de la clase
 * 
 */
class visivilidadDeVariables 
{
    public $publico="public";
    protected $protegido="protected";
    private $_privado="privado";
/**estamos enviando en nombre de la variable, en este caso publico
 * aqui es donde $this->$variable hace referencia al nombre de
 * de la propiedad con el nombre publico, y por eso
 * muestro lo que esta guardado en la propiedad publico que es public
 * 
 */
        public function printVar($variable)
        {
            echo "<p>mostrando la variable desde la clase padre clase padre</p><h1> {$this->$variable}</h1>";
        }
}

class testVisilidadDeVariables extends visivilidadDeVariables
{
    public function printVar($variable)
    {
        echo "<p>La Variable publico desde la clase heredada es:</p> <h1> {$this->$variable}</h1>";
    }
    
    
}

$padre= new visivilidadDeVariables();
$hijo= new testVisilidadDeVariables();
echo "<p>mostrando la variable publico:</br></p>";
$padre->printVar('publico');
echo "</br>";
$hijo->printVar("publico");
echo "</br><h2>Cambiando el valor de la variable/propiedad publica a modificada</h2>";
/**modificamos el valor de la variable/propiedad $publica=public 
 * moficamos a modificada, la estamos modificando 
*/
$padre->publico='modificada';
echo "<p>mostrando la variable modificada publico :</br></p>";
$padre->printVar('publico');
echo "</br>";
$hijo->printVar("publico");
/**
 * se mostrara modificada la propiedad publica, con su nuevo
 * valor modificado solo en el objeto padre, pero mostrara el 
 * valor original public en la subclase que es la heredad, 
 * esto se debe porque la propiedad $publico, es representada
 * como una entidad seprarda in cada objeto 
 */
echo "</br><p>mostrando el valor de la propiedad/variable protegido</p>";
echo "<p>mostrando la variable protegido:</br></p>";
$padre->printVar('protegido');
echo "</br>";
$hijo->printVar("protegido");
echo "</br><h2>Cambiando el valor de la variable/propiedad protegido a modificada</h2>";
$padre->protegido='modificada';
echo "<p>mostrando la variable modificada protegido :</br></p>";
$padre->printVar('protegido');
echo "</br>";
$hijo->printVar("protegido");
echo "<p>mostrando la variable _privada:</br></p>";
$padre->printVar('_privado');
echo "</br>";
$hijo->printVar("_privado");
echo "</br><h2>Cambiando el valor de la variable/propiedad publica a modificada</h2>";
$padre->_privado='modificada';
echo "<p>mostrando la variable modificada p :</br></p>";
$padre->printVar('publico');
echo "</br>";
$hijo->printVar("publico");




