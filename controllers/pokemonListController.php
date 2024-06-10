<?php 
require 'models/curl.php';
$pokemon = new pokemonAPI();
$pokemonList = $pokemon->getPokemonList();