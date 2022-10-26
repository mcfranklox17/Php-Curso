<?php 

    $url = "https://api.dailymotion.com/videos?channel=sport&limit=10";
    $opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false));

    $result = file_get_contents( $url, false, stream_context_create($opciones));

    $objResponse = json_decode($result);

    //print_r($objResponse);

    foreach( $objResponse -> list as $data ) {
        //print_r($data);
        echo "Title: ".$data->title." / Channel: ".$data->channel." / Owner: ".$data->owner."<br>";
    }

?>

<ul>
    <?php 
        foreach( $objResponse -> list as $data ) {       
    ?>
        <li><?php echo "Title: ".$data->title." / Channel: ".$data->channel." / Owner: ".$data->owner; ?></li>
    <?php } ?>
</ul>