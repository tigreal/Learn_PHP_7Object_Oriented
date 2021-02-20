<?php
require_once('dog.php');

$lab = new dog('verno','azul',33);
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
list($dog_nombre,$dog_peso,$dog_color)=explode(',',$todas_las_propiedades);
// list($dog_nombre,$dog_color,$dog_peso)=explode(',',$lab->__toString());
print("</br>$dog_color</br>$dog_nombre</br>$dog_peso</br>");
list($dog_nombre1,$dog_color1,$dog_peso1)=explode(',',$lab);
print $lab;
print $dog_nombre1=="true"? "</br>El nombre se actualizo con exito":"</br>El nombre no fue actualizo";
print $dog_color1=="true"? "</br>El color se actualizo con exito":"</br>El color no fue actualizo";
print $dog_peso1=="true"? "</br>El peso se actualizo con exito":"</br>El peso no fue actualizo";




?>