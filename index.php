<!DOCTYPE HTML>
<html>
<head>
<?php //$miVariable = getenv('MI_LOQUITA');
header('Content-Type: text/html; charset=UTF-8');
$token = getenv("CRA-TOKEN");

$url = "https://api.clashroyale.com/v1/players/%238RYPQ9RQG";

$ch = curl_init($url);

$headr = array();
$headr[] = "Accept: application/json";
$headr[] = "Authorization: Bearer ".$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($ch);
//$tojson = json_encode($res);
$data = json_decode($res,1);
curl_close($ch);

echo "<h3>".$data["reason"]."</h3>";
/*function test_input($form_var) {
$data = trim($form_var);
$data = stripslashes($form_var);
$data = htmlspecialchars($form_var);
return $form_var;
}
if (isset($data["reason"])) {
echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
exit;
}*/

//echo "<p>";
//echo var_dump($data);
//echo $res;
//echo $data["name"];
echo '<div style="width:90%; background:lightblue; display:flex; flex-direction:column; margin:auto; padding:30px; box-sizing:border-box; border-radius: 20px;">';
echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Jugador: '.$data["name"].'</h3>';
echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Experiencia: '.$data["expLevel"].'</h3>';
echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Trofeos: '.$data["trophies"].'</h3>';
echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Partidas ganadas: '.$data["wins"].'</h3>';
echo '<h3 style="font-family:Open Sans; font-size: 23px;"> Donaciones: '.$data["totalDonations"].'</h3>';
echo '<h3 style="font-family:Open Sans; font-size: 25px;"> MEJORES INSIGNIAS: </h3>';
echo '</div>';
echo '<div style="width:90%; background:lightgreen; display:flex; flex-wrap:wrap; margin:auto; justify-content:center; border-radius: 20px; margin-top:10px;">';
foreach($data["badges"] as $item){
    //echo $item["name"];
    //echo "<br/>";
    //echo $item["iconUrls"]["large"];
    if($item["level"] > 6){
        echo '<img src="'.$item["iconUrls"]["large"].'" style="width: 200px; height: 200px;"/>';
        echo "<br/>";
    }
}
echo "</div>";
//echo "</p>";
?>
<title>
Clash Royale
</title>
</head>
<body>
<pre>
<?php //var_dump($data); ?>
</pre>
</body>
</html>
