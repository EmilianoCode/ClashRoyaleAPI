<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"-->
    <link href="css/styles.css" rel="stylesheet">
    <title>
    Clash Royale
    </title>
</head>
<body>
    <?php 
    header('Content-Type: text/html; charset=UTF-8');
    
    require_once("includes/Api.php");
    require_once("templates/blocks/user_data_block.php");

    use ClashRoyaleAPI\includes\Api;

    echo '<div class="container">TU VIEJA LOCO AAAAAAAAAA';
    // API
    $api = new Api("players","%238RYPQ9RQG");
    $player = $api->apiResult();

    echo general_player_data_block($player->getGeneralPlayerData());

    // LOCAL JSON
    /*$pathfile = 'json-models/userdata.json';
    $jsonString = file_get_contents($pathfile);
    $data = json_decode($jsonString, true);*/

    echo '</div>';
    ?>

    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script-->
    <script src="libs/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
