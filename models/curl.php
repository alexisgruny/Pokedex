<?php
class pokemonAPI
{
    private function fetchData(string $url)
    {
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_CAINFO         => 'ressource/pokebuildapi.fr.crt',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10
        ]);
        $data = curl_exec($curl);
        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            curl_close($curl);
            return NULL;
        }
        curl_close($curl);
        return json_decode($data, true);
    }

    public function getPokemonList()
    {
        $data = $this->fetchData('https://pokebuildapi.fr/api/v1/pokemon');
        if ($data === NULL) {
            return NULL;
        }
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
        $data = $this->fetchData('https://pokebuildapi.fr/api/v1/pokemon/' . $id);
        if ($data === NULL) {
            return NULL;
        }
        return $data;
    }

    public function getTypeList()
    {
        $data = $this->fetchData('https://pokebuildapi.fr/api/v1/types');
        if ($data === NULL) {
            return NULL;
        }
        return $data;
    }
}
?>