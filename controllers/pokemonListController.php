<?php
$curl = curl_init('https://pokebuildapi.fr/api/v1/pokemon');
curl_setopt_array($curl,[
    CURLOPT_CAINFO         => 'ressource/pokebuildapi.fr.crt',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 1]);
if($data === false){
    var_dump(curl_error($curl));
} else{

}
curl_close($curl);