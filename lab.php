<?php
require_once('dog.php');

$lab = new dog('verno','azul99',33);
 $chou=new dog('verno','azul',33);

$chou->speak();
print $lab->get_properties();

// $update_color=$lab->set_dog_color("rojo");
// print $update_color==true? "se actualizo":"no se actualizo";
// $update_nombre=$lab->set_dog_mane("berno333");
// print $update_nombre==true? "se actualizo":"no se actualizo";
// $update_weight=$lab->set_dog_weight(25);
// print $update_weight==true? "se actualizo":"no se actualizo";

$todas_las_propiedades = $lab->get_properties();
list($dog_nombre,$dog_color,$dog_peso)=explode(',',$todas_las_propiedades);
print("</br>$dog_color</br>$dog_nombre</br>$dog_peso</br>");


?>