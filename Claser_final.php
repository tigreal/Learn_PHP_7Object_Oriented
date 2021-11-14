<?php
// las clases finales evitan la sobre herencia
// la forma de mejorar la sobre herencia es tener una mejor abstraccion


// crearemos tres clases
class abuelo{
    
}
// la clase padre hereda de abulo
class padre extends abuelo{

}
// la clase hijo hereda de padre
// pero la clase hijo sera final quiere decir que no se podra heredar
// la clase hijo
final class hijo extends padre{

}
// esto nos arojara un error ya que hijo no puede ser heredado
// ya que es final
class nieto extends hijo{

}

?>