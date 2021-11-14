<?php

class construcorDestructor
{
    public $val1;
    public $val2;
    /*el contrutor no puede tener un retorno Return 0
    este tipo de clases son especiales las de doble
    guion bajo */
    public function __construct($var, $var2){
        echo "\nse creo el objeto";
        $this->val1=$var;
        $this->val2=$var2;

        

    
    }
    /* un destructor no puede llevar argumentos*/
    public function __destruct()
    {
        //se coloca el objto a destruir
        echo "\n el destructor fue llamado porque no vio niguna otra instacian del objeto";
    }
    
    
}


$obj = new construcorDestructor("hola","mundo");
for($i=0;$i<50;$i++){
echo "\n".$i;
    if($i==34){
        unset($obj);
    }
    
    }
        
?>