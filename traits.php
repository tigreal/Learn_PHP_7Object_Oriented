<!-- es la solucion para la herencia multiple, como no se tienen ererncia
multiple directa en php esto nos ayuda para a tener hererncia multiple la palabra
clave es USE
con el trait tenemos acceso a los demas atributos de la clase -->
<!-- con el trait se puede usar la funcionalidad en diferentes clases
aunq no tengan relacion, tambien se puede utilizar atributos que no estan 
definidos en el trair  -->

<?php

trait myUtilities{

    function sayMyName(){
        echo "mi nombre es". $this->nombre."</br>";
    }
}
class  ImplentandoElTrait
{
    use myUtilities;
    public $nombre='clase1';

    
}
class OtraClaseQueUsaTraits{
    use myUtilities;
    public $nombre='clase2';

}

$inst =new ImplentandoElTrait();
$inst2 = new OtraClaseQueUsaTraits();
echo $inst->sayMyName();
echo $inst2->sayMyName();



?>