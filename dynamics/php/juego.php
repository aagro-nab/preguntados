<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../statics/styles/preguntados.css">
</head>
<body>
    <?php
        $j1 = (isset($_POST["j1"]) && $_POST["j1"] != "")? $_POST["j1"] : false;
        $j2 = (isset($_POST["j2"]) && $_POST["j2"] != "")? $_POST["j2"] : false;

        if(!$j1 || !$j2){
            if(!$j1){
                echo "Jugador 1 : No has introducido tu nombre <br>";
            }
            if(!$j2){
                echo "Jugador 2 : No has introducido tu nombre<br>";
            }
        }
        else{
            echo "
                <header class='titulo'> A jugar! </header>
                <section class='cuerpo'>
                    <p> Turno de: </p>
                    <div class='divJugadores'>
                        <div class='jugador'>
                            <p class='name'> <b>$j1 </b></p>
                            <p> Materias obtenidas: </p>
                        </div>
                        <div class='jugador'>
                            <p class='name'><b> $j2 </b></p>
                            <p> Materias obtenidas: </p>
                        </div>  
                    </div>
                    <button id='generaPregunta'> Pregunta </button>
                </section>
            ";

        }
    ?>
</body>
</html>

