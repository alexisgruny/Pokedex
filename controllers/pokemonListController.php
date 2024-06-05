<?php
$curl = curl_init('https://pokebuildapi.fr/api/v1/pokemon');
curl_setopt_array($curl, [
    CURLOPT_CAINFO         => 'ressource/pokebuildapi.fr.crt',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 10
]);
$data = curl_exec($curl);
if ($data === false) {
    var_dump(curl_error($curl));
} else {
   // if (curl_getinfo($curl, CURLINFO_HTTP_CODE === 200)) {
        $data  = json_decode($data, true);
        foreach ($data as $pokemon) {
            echo "name: " . $pokemon['name'] . "\n";
            echo "image: " . $pokemon['image'] . "\n";
        }
    //}
}
curl_close($curl);
