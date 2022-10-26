<?php 
if($_POST) {
    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $division = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;

    echo "Suma = ".$suma."<br>";
    echo "Resta = ".$resta."<br>";
    echo "Division = ".$division."<br>";
    echo "Multiplicacion = ".$multiplicacion."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" name="ValorA" id="">
        <br>

        Valor B:
        <input type="text" name="ValorB" id="">
        <br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>