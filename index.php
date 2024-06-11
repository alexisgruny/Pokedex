<?php
require 'views/template/header.php';
$uri = $_SERVER['PATH_INFO'];
if($uri === '/type'){
    require 'controllers/TypeListController.php';
    require 'views/type/list.php';
} else if($uri === '/pokemon') {
    require 'controllers/pokemonListController.php';
    require 'views/pokemon/List.php';
} else if($uri === '/detail') {
    require 'controllers/pokemonDetailController.php';
    require 'views/pokemon/detail.php';
} else if($uri === '/accueil') {
    require 'views/template/accueil.php';
} else if($uri === '/config') {
    require 'views/user/config.php';
} else {
    require '404.php';
}

require 'views/template/footer.php';
?>