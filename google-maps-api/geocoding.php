<?php
    $address = "Mountain View";
    $address = urlencode($address);
    $url = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?place_id=ChIJeRpOeF67j4AR9ydy_PIzPuM&key=AIzaSyAtMGnaWjHgywpksP9Mgvp0UGBSr6ESQdg');
    // print_r($position);
    $positionArray = json_decode($url,true);
    // if ($positionArray['status'] == 'OK') {
    //     //Get the important data
    //     $lati = $positionArray['results'][0]['geometry']['location']['lat'];
    //     echo $lati;
    // }
    foreach($positionArray['results'][0]['address_components'] as $keys => $values){
        if ($values['types'][0] == 'country'){
            echo $values['long_name'];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>