<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $j1 = (isset($_POST["j1"]) && $_POST["j1"] != "")? $_POST["j1"] : false;
        $j2 = (isset($_POST["j2"]) && $_POST["j2"] != "")? $_POST["j2"] : false;

        if(!$j1 || !$j2){
            if(!$j1){
                echo "Jugador 1: No has introducido tu nombre <br>";
            }
            if(!$j2){
                echo "Jugador 2: No has introducido tu nombre<br>";
            }
        }
        else{
            echo "
                <h1> A jugar! </h1>
                <p> Turno de: </p>
                <div>
                    <p> $j1 </p>
                    <p> Materias obtenidas: </p>
                </div>
                    
                <div>
                    <p> $j2 </p>
                    <p> Materias obtenidas: </p>
                </div>

                <button> Pregunta </button>
            ";

        }
    ?>
</body>
</html>

