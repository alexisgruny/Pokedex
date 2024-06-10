<?php
require 'views/template/header.php';
$uri = $_SERVER['PATH_INFO'];
if($uri === '/accueil'){
    require 'controllers/pokemonListController.php';
    require 'views/pokemon/list.php';
} else if($uri === '/detail') {
    require 'controllers/pokemonDetailController.php';
    require 'views/pokemon/detail.php';
} else {
    require 'controllers/pokemonListController.php';
    require 'views/pokemon/list.php';
}

require 'views/template/footer.php';
?>