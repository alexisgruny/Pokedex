<?php
require 'views/template/header.php';

if($_SERVER['REQUEST_URI'] === '/accueil'){
    require 'controllers/pokemonListController.php';
} else {
    require 'controllers/pokemonListController.php';
}
//test
require 'views/template/footer.php';
?>