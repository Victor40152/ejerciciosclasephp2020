<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>
           Edades
        </title>
    </head>
    <body>
        <h1>Edad </h1>
        <form name="form2" method="POST" action="index.php">
            <br>
        <input type="submit" name="calcular" value="calcular">

            Numero 1: <input type="text" name="txtnumero1">
            <br>
        </form>

        <?php 
        
        if(isset($_POST["calcular"])){

            $valor1 = $_POST["txtnumero1"];

            if ($valor1>=11 && $valor1<14){
                echo "<br> Eres Pre-Adolescente";
            }else{
                if($valor1<18){
                    echo "<br> Eres Adolescente";
                }else{
                    if ($valor1<25){
                        echo "<br> Eres joven";
                    }else{
                        if ($valor1<65){
                            echo "<br> Eres Adulto";
                        }else{
                            if($valor1>=65){
                                echo "<br> Eres Anciano";
                            }
                        }
                    }
                }
            }
        
        
        
        
        
        
        
        }
        
        
        ?>
    </body>
</html>