<?php 
require 'models/curl.php';
$id = $_GET['id'];
$pokemon = new pokemonAPI();
$pokemonDetail = $pokemon->getPokemonDetail($id);
