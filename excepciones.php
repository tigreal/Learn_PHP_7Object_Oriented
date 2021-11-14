

<?php
// esta clase hereda de la clase Exception
class DBException extends Exception{}
// creamos otra clase donde utilizaremos nuestro clase DBException
class principal{
    // bebe eres tu??si amor mi bebe te amo te llamo?dame 5 minutos y ami vida me llamas tu ntonces
    // colocamo es el try dentro del constructor para asi llamar
    // a la nuestra excepcion personalizada cuando intanciemos el objeto

    function __construct()
    {
        try{
            // colocamos la dos excepciones una espesifica y otra generica
            // tenemos que comentar una ellas para ver como se maneja de forma generica y espesifica
            // throw new Exception("no hay memoria suficiente");
            throw new DBException("fallo base de datos");
            // simpres se coloca la espesifica al principio 
            }catch(DBException $e){
                echo "la escepcion es de tipo espesifico: ". $e->getMessage();
                // la generica va despues
            }catch(Exception $e){
                echo "la escepcion es de tipo generico: ". $e->getMessage();
            }
            // lo que hace fanally es realizar una ultima tarea antes de salir del try catch
            finally{
                echo  "\ncerrando la base de datos";
            }

            
        
    }

}
$bebe= new principal();

?>