<!-- las interfaces no pueden tener ningun tipo de funcionalidad
para usar las interfaces en las clases se usa la palabra key Implements -->
<!-- tambien cabe mensionar si heredamos una clase donde ya esta implementada  -->
<!-- la interface ya no es nesesario implementar la interface ya que utilizaremos
la interface de la clase que heredamos y que tiene que estar definida pero podemos
definirla de nueva en la clase que esta heredando para darle otra funcionalidad -->

<?php
interface IDB{
    public function connect();
}
class  MySql  implements IDB
{
    public function connect()
    {
        echo 'conectando con mysql';
    }
}
class Orcle implements IDB{
    public  function connect()
    {
        # code...
        echo "conectando con oracle";
    }
}

?>