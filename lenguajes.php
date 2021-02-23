<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['idioma'])) {
        //$idioma = $_POST['idioma'];
        $saludo=new saludo();
        $saludo->saludoEnDiferentesIdiomas($_POST['idioma']);
        
        unset($saludo);
    }
}
class saludo
{
    private $idioma;
    public function saludoEnDiferentesIdiomas($var)
    {
        
        echo "<p>";
        switch ($var) {
            case 'ingles':
                echo "Usted eligio el idioma: " . $var;
                break;
            case 'espanol':
                echo "Usted eligio el idioma: " . $var;
                break;
            case 'italiano':
                echo "Usted eligio el idioma: " . $var;
                break;

            default:
                # code...
                break;
        }
        echo "</p>";


        //echo "hola mundu";

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="lenguajes.php" method="POST">
        <p>Seleccione un lenguaje</p>
        <select name="idioma">
            <option value="ingles">Ingles</option>
            <option value="espanol">Espanol</option>
            <option value="italiano">Italiano</option>
        </select>
        <input type="submit" value="MANDAR">
    </form>

</body>

</html>