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
    
    use ClashRoyaleAPI\includes\Api;

    // API
    $api = new Api("players","%238RYPQ9RQG");
    $data = $api->apiResult();

    // LOCAL JSON
    /*$pathfile = 'json-models/userdata.json';
    $jsonString = file_get_contents($pathfile);
    $data = json_decode($jsonString, true);*/

    echo '<div style="width:90%; background:lightblue; display:flex; flex-direction:column; margin:auto; padding:30px; box-sizing:border-box; border-radius: 20px;">';
    echo '<h1>VAMOS A PONERNOS SERIOS</h1>';
    echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Jugador: '.$data->getName().'</h3>';
    echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Experiencia: '.$data->getExpLevel().'</h3>';
    echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Trofeos: '.$data->getTrophies().'</h3>';

    echo '<h3 style="font-family:Open Sans; font-size: 25px;"> MEJORES INSIGNIAS: </h3>';
    echo '</div>';
    //echo '<div style="width:90%; background:lightgreen; display:flex; flex-wrap:wrap; margin:auto; justify-content:center; border-radius: 20px; margin-top:10px;">';
    echo '<div class="container text-center">';
    echo '<div class="accordion" id="accordionPanelsStayOpenExample">';
    echo '  <div class="accordion-item">';
    echo '    <h2 class="accordion-header">';
    echo '      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">';
    echo '        Your best insignes';
    echo '      </button>';
    echo '    </h2>';
    echo '    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">';
    echo '      <div class="accordion-body">';
    echo '          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">';
    /*foreach($data->getBadges() as $item){
        //echo $item["name"];
        //echo "<br/>";
        //echo $item["iconUrls"]["large"];
        if($item->getLevel() > 6){
            //echo '<img src="'.$item["iconUrls"]["large"].'" style="width: 200px; height: 200px;"/>';
            //echo "<br/>";
            echo '<div class="col">
                    <div class="card h-100">
                      <img src="'.$item->getIconUrl().'" class="card-img-top" alt="'.$item->getName().'">
                      <div class="card-body">
                        <h5 class="card-title">'.$item->getName().'</h5>
                        <p class="card-text">This is a short card.</p>
                      </div>
                    </div>
                  </div>';
          
        }
    }*/
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    //echo "</p>";
    ?>
    <pre>
    <?php //var_dump($data); ?>
    </pre>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script-->
    <script src="libs/bootstrap-5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
