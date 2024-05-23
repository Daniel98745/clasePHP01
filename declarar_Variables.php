<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //funcion gettype/(var)
    $nombre="dani";
    echo "tipo de dato es :".gettype($nombre);
    $celular= 123456;
    echo "<br>tipo de dato es :".gettype($celular);

    ?>
    <h3>CONDICIONAL IF</h3>
    <?php
    $cant=3;
    if ($cant >3){
        echo "es mayor a 5";
    }else{
        echo "es menor a 5";
    }
    ?>

    <h3>CONDICIONAL FOR</h3>
    <?php
    for($i=2; $i<=10;$i++)
        echo $i;
    ?>

    <h3>WHILE</h3>
    <?php
    $i=5;
    while($i<=10){
        echo $i;
        $i++;
    }
    ?>
    //OPCION 2
    <h3>opcion 2</h3>
    <?php
    $i=3;
    while($i<=10):
        echo $i;
        $i++;
    endwhile;
    ?>
    <h3>valor logico</h3>
    <?php
    $cad="contenido";
    if($cad){
        echo "true cadena llena";
    }else{
        echo "false cadena vacia";
    }
    ?>
    <h3>constantes de sistema</h3>
    <?php
    echo "La ubuicacion del archivo actual es :".__FILE__;
    echo "<br>la linea actual es :".__LINE__;
    echo "<br>la version actual es :".phpversion();
    echo "<br>la informacion de php es :".phpinfo();
    ?>
</body>
</html>