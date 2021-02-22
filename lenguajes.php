<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idioma;
    if (isset($_POST['idioma'])) {

        $idioma = $_POST['idioma'];
        switch ($idioma) {
            case 'ingles':
                echo "Usted eligio el idioma: " . $idioma;
                break;
            case 'espanol':
                echo "Usted eligio el idioma: " . $idioma;
                break;
            case 'italiano':
                echo "Usted eligio el idioma: " . $idioma;
                break;

            default:
                # code...
                break;
        }
    }

    //echo "hola mundu";
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