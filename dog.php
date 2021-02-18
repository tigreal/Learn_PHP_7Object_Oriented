<?php

//definamos una clase 
class dog
{
    //definamos sus propiedades
    private $dog_color = "no color";
    private $dog_name = "no name";
    private $dog_weight = 0;
    private $message_error="??";


    function __construct($name,$color,$peso)
    {
        
        $error_nombre=$this->set_dog_mane($name)==true?'true':'false';
        $error_color=$this->set_dog_color($color)==true?'true':'false';
        $error_peso=$this->set_dog_weight($peso)==true?'true':'fase';
        $message_error="$error_nombre.$error_color.$error_peso";


    }
    function __toString()
    {
        return $this->message_error;
    }

    function speak()
    {
        print("\nbark!!");
    }
    //este metodo devuelve todos las propiedades en un string
    function get_properties()
    {

        return "$this->dog_name,$this->dog_weight,$this->dog_color";
    }
    //declaracion de un tipo escalar solo hay int, string, boolean , float 
    //declare(strict_types=1);
    /* function get_properties01() : string
  {
       return "$this->dog_weight,$this->dog_breed,$this->dog_color."; 
    }*/
//se tienen un set por cada valor que se esta introducionedo en cada propiedada
//esto es mucho codigo, esto se puede optimizar con uso de los contructores ya que se puede pasar
// todos los valores iniciales desde la intanciacion del objeto con el uso de un costructor
// vamos hacer esa impelemntacion muy pronto
    function set_dog_mane($name)
    {
        $error_mensaje=true;
        (ctype_alpha($name) && strlen($name)<21)? $this->dog_name=$name:$error_mensaje=false;

        

        return $error_mensaje;
    }
    function set_dog_color($color)
    {
        $error_message=true;

        (ctype_alpha($color)&& strlen($color)<21)?$this->dog_color = $color:$error_message=false;

        return $error_message;
    }
    function set_dog_weight($weight)
    {

        $this->dog_weight = $weight;

        return true;
    }
}
