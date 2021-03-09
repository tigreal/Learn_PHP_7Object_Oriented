<?php
class mascota
{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
        self::dormir();

    }
    public function dormir()
    {
        echo "\n<p>esta durmiendo</>";
    }
    function hacer() 
    {
        echo "<p>{$this->nombre}. esta haciendo algo</p>";
    }
    

    
}
class perro extends mascota
{
    public function hacer()
    {
        parent::hacer();
        echo "\n {$this->nombre}. esta descanzando";
    }

}
echo "<p style='color:red'>instanciando mascota y perro</p>";
$objMascota=new mascota("animal-generico1");
$objPerro=new perro("beno");
echo "<p style='color:red'>llamando al metodo hacer en mascota y perro</p>";
$objMascota->hacer();
$objPerro->hacer();

?>