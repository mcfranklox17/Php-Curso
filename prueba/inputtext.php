<?php 

    $txtNombre = "";
    $rdgLenguaje = "";
    $chkPhp = "";
    $chkHtml = "";
    $chkCss = "";
    $lsCars = "";
    $txtDuda = "";

    if ($_POST) {
        $txtNombre = ( isset($_POST['txtNombre'])) ? $_POST['txtNombre']: "";
        $rdgLenguaje = ( isset($_POST['lenguaje'])) ? $_POST['lenguaje']: "";
        $chkPhp = ( isset($_POST['chkphp']) == "si") ? "checked": "";
        $chkHtml = ( isset($_POST['chkhtml']) == "si") ? "checked": "";
        $chkCss = ( isset($_POST['chkcss']) == "si") ? "checked": "";
        $lsCars = ( isset($_POST['lsCars']) ) ? $_POST['lsCars'] : "" ;
        $txtDuda = ( isset($_POST['txtDuda'])) ? $_POST['txtDuda']: "";
        //print_r($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php 
        if ($_POST) {    
    ?>
        <strong> Hola </strong>  <?php echo $txtNombre; ?>
        <br>
        <strong> Te gusta: </strong>  <?php echo $rdgLenguaje; ?>
        <br>
        <strong> Estás aprendiendo: </strong>  <br>
        - <?php echo ($chkPhp == "checked") ? "PHP" : "";  ?> <br>
        - <?php echo ($chkHtml == "checked") ? "HTML" : ""; ?> <br>
        - <?php echo ($chkCss == "checked") ? "CSS" : ""; ?> <br>
        <br>
        <strong> Carro favorito: </strong>  <?php echo $lsCars; ?>
        <br>
        <strong> Comentario: </strong>  <?php echo $txtDuda; ?>
        <br>
    <?php } ?>

    <form action="inputtext.php" method="post">
        
        Nombre:
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        
        <br> <br> 
        
        ¿Te gusta?: <br>
        <br>php : <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : ""; ?> name="lenguaje" value="php" id="">
        <br>html : <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : ""; ?> name="lenguaje" value="html" id="">
        <br>css : <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : ""; ?> name="lenguaje" value="css" id="">
        
        <br> <br> 

        Estás aprendiendo... 
        <br>php : <input type="checkbox" <?php echo $chkPhp ?> name="chkphp" value="si" id="">
        <br>html : <input type="checkbox" <?php echo $chkHtml ?> name="chkhtml" value="si" id="">
        <br>css : <input type="checkbox" <?php echo $chkCss ?> name="chkcss" value="si" id="">
       
        <br> <br>  

        ¿Qué carro te gusta?...
        <select name="lsCars" id="">
            <option value="">[Ninguno]</option>
            <option value="gtr" <?php echo ($lsCars == "gtr") ? "selected" : "";?>>Nissan GTR</option>
            <option value="supra" <?php echo ($lsCars == "supra") ? "selected" : "";?>>Toyota Supra</option>
            <option value="nsx" <?php echo ($lsCars == "nsx") ? "selected" : "";?>>Acura NSX</option>
            <option value="vantage" <?php echo ($lsCars == "vantage") ? "selected" : "";?>>Aston Martin Vantage</option>
        </select>

        <br> <br>

        Tienes alguna duda... <br>
        <textarea name="txtDuda" id="" cols="30" rows="10">  </textarea>
        <br> <br>
        <input type="submit" value="Enviar Información">

    </form>
</body>
</html>