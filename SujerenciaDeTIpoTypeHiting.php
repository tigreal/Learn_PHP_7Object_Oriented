<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Sugerencia De tipo</h1>
    <?php

    //Es un indicador de que tipo de dato se espera 
    // este tipo de dato es de tipo objeto
    // si el tipo de dato no es de la clase que se esperaba o de una subclase 
    //mostrara un error
    //Typehiting  también se puede usar en funciones (es decir, en no métodos: funciones definidas fuera de cualquier clase).
    //tu puedes tambien Typehinton para interfaces, arrays, y functions (i.e., callables, as of PHP 5.4).
    class Departamento 
    {
        private $_nombre;
        private $_empleados;
        function __construct($nombre)
        {
            $this->_nombre=$nombre;
            $this->_empleados=array();

        }
        public function addEmpleado(Empleado $e)
        {
            $this->_empleados[]=$e;
            echo "<p>{$e->getName()} a sido anadido  {$this->_nombre} al departamento.</p>";



        }
    
    }
    class Empleado 
    {
        private $_nombre;
        function __construct($nombre)
        {
            $this->_nombre=$nombre;
        }
        public function getName()
        {
            return $this->_nombre;

        }

    }
    //CREAMOS  un departamento
    $hr =new Departamento('Human Resouces');
    //creamos empleados
    $e1 = new Empleado('jone doe');
    $e2 = new Empleado('Jane Doe');

    //anadimos los empleados
    $hr->addEmpleado($e1);
    // $e1->getName();
    // $e2->getName();
    $hr->addEmpleado($e2);
    //borrando objetos

    unset($hr,$e1,$e2);

    


    

    ?>
</body>
</html>