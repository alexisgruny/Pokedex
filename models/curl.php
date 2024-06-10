<?php
class pokemonAPI
{
    public function getPokemonList()
    {
        $curl = curl_init('https://pokebuildapi.fr/api/v1/pokemon');
        curl_setopt_array($curl, [
            CURLOPT_CAINFO         => 'ressource/pokebuildapi.fr.crt',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10
        ]);
        $data = curl_exec($curl);
        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            return NULL;
        }
        curl_close($curl);
        $data = json_decode($data, true);
        $pokemonList = [];
        foreach ($data as $pokemon) {
            $pokemonList[] = [
                'id'    => $pokemon['id'],
                'name'  => $pokemon['name'],
                'image' => $pokemon['image']
            ];
        }
        return $pokemonList;
    }

    public function getPokemonDetail(int $id)
    {
        $curl = curl_init('https://pokebuildapi.fr/api/v1/pokemon/' . $id);
        curl_setopt_array($curl, [
            CURLOPT_CAINFO         => 'ressource/pokebuildapi.fr.crt',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10
        ]);
        $data = curl_exec($curl);
        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            return NULL;
        }
        curl_close($curl);
        $data = json_decode($data, true);
        $pokemonDetail = [];
        $pokemonDetail = $data;
        return $pokemonDetail;
    }
}
