<?php
require_once '../bo/PlantaBO.class.php';
//require_once '../view/config.inc.php';

$bo = new PlantaBO();

$plantas = $bo->listAll();

