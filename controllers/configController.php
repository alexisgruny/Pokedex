<?php
$curl = curl_init('https://pokebuildapi.fr/api/v1/pokemon');
$data = curl_exec($curl);
if($data === false){
    var_dump(curl_error($curl));
} else{

}
curl_close($curl);