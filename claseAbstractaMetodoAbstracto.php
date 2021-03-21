<?php
/**no se deberia ser necesario crear  una instancia de una clase base, 
 * para esto podriamos crear una clase abstracta que es una plantilla
 * de una clase base que define las interfaces: como utilizaran las  
 * derivadas de este tipo de clase base que es en si una plantilla,
 * entonces las clases deribadas son las que definiran la implementacion
 * de esas interfaces, una diferencia entre las clases abstractas
 * y las normales es que no se puede crear un objeto de una clse
 * abstracta donde el resultado es un fatal error, el objetivo de una 
 * clase abstracta es ser extendida, y crear una instancia de esa
 * clase extendida
 */
abstract class ClassName 
{
    
}
 /**tambien se pueden definir metodos abstractos donde los metodos
  * seran implementados en la clase extendida, los metodos pueden 
  * pueden tener una visibilidad puede ser igual o menos, a la de la
  * clase abstracta, pero un metodo albracto no puede ser privado
  * porq no seria accesible por la clase deribada, tambien deben tener 
  * la misma firma la misma cantidad de argumentos como regla una
  * clase que tiene un metodo abstracto, ya se define o se vuelve
  * una clase abstracta, pero una clase abstracta no puede tener
  * propiedades y metodos no abstractos.
  */

  abstract class figura 
  {
     abstract protected function obtenerArea();
     abstract protected function obtenerPerimetro();
     
  }
  class rectangulo extends figura
  {
      protected $ancho;
      protected $alto;
      function __construct()
      {
          
      }
      protected function colocarTamano()
      {
          # code...
      }
      protected function obtenerArea()
      {
          # code...
      }
      protected function obtenerPerimetro()
      {
          # code...
      }
      protected function esCuadrado()
      {
          # code...
      }

  }
  class circulo extends figura
  {
      protected $radio;
      function __construct()
      {
          
      }
      protected function obtenerArea()
      {
          # code...
      }
      protected function obtenerPerimetro()
      {
          # code...
      }
  }
  class triangulo extends figura
  {
      protected $lados;
      protected $perimetro;
      function __construct()
      {
          
      }
      protected function obtenerArea()
      {
          # code...
      }
      protected function obtenerPerimetro()
      {
          # code...
      }
  }
  
  
  
  

?>