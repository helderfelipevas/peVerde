<?php
require_once '../bo/PlantaBO.class.php';

$bo = new PlantaBO();

$plantas = $bo->listAll();

