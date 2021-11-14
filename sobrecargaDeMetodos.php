<?php

class persona{
    private $name;
    private $familyname;
    private $phone;
    private $mobile;
    public function __construct($name,$lastname,$mobile,$phone)
    {
        $this->name=$name;
        $this->familyname=$lastname;
        $this->mobile=$mobile;
        $this->phone=$phone;


        
    }
    public function __toString()
    {
        $this->name;
    }
    public function __call($name, $arguments)
    {
        $no_method=true;
        $method_name=substr($name,0,3);
        
        if($method_name=='get'){
           $no_method=false;
           $real_name=substr($name,3); 
           return $this->$real_name."\n";
        }
        if($no_method){
            throw new Exception("en metodod {$name} no encontrado");
        }
    }

}

$persona= new persona("osmar","alvarez","55555555","44444");
echo $persona->getname();
echo $persona->getfamilyname();
echo $persona->getmobile();
echo $persona->getphone();
?>