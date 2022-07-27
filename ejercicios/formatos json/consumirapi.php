<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

$respuesta = file_get_contents($url, false, stream_context_create($opciones));
$objRespuesta = json_decode($respuesta);
// print_r($objRespuesta);


?>

<ul>
    <?php foreach ($objRespuesta->list as $key) { ?>
        <li>
            <a href="<?php echo $key->url; ?>">
                <?php echo $key->title; ?>
            </a>
        </li>
    <?php } ?>
</ul>