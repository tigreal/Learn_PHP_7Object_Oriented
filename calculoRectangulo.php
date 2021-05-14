<?php
$ejemplar = new rectangulo(0,0);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['alto']) && isset($_POST['ancho']) && ctype_digit($_POST['ancho']) && ctype_digit($_POST['alto'])) {

        $ejemplar->getSize($_POST['alto'], $_POST['ancho']);
        
    } else {
        echo "introduce una alto y un ancho o no es un numero";
    }
}
class rectangulo
{
    public $ancho = 0;
    public $alto = 0;

    public function getSize(int $ancho, int $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
    public function getArea()
    {
        return $this->alto * $this->ancho;
    }
    public function getPerimetro()
    {
        return ($this->alto + $this->ancho) * 2;
    }
    public function esCuadrado()
    {
        if ($this->ancho == $this->alto) {
            echo "es un cuadrado";
        } else {
            echo "no es un cuadrado";
        }
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
    <h5>bLADIMIR</h5>
    <form action="calculoRectangulo.php" method="post">
        <label for="">ancho</label>
        <input type="text" name="ancho" id="">
        <label for="">alto</label>
        <input type="text" name="alto" id="">
        <input type="submit" value="Enviar">
    </form>
<?php
echo "<p>";
echo $ejemplar->getArea();
echo "</br>";
echo $ejemplar->getPerimetro();
echo "</br>";
echo $ejemplar->esCuadrado();

echo "</p>";
?>
</body>

</html>
