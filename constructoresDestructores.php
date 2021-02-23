<?php

class construcorDestructor
{
    public $val1;
    public $val2;
    /*el contrutor no puede tener un retorno Return 0
    este tipo de clases son especiales las de doble
    guion bajo */
    public function __construct($var, $var2){
        $this->val1=$var;
        $this->val2=$var2;

        

    
    }
    /* un destructor no puede llevar argumentos*/
    public function __destruct()
    {
        //se coloca el objto a destruir
    }
    
    
}

$obj = new construcorDestructor("hola","mundo");


?>