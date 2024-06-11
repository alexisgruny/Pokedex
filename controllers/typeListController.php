<?php
require 'models/curl.php';
$pokemon = new pokemonAPI();
$typeList = $pokemon->getTypeList();
