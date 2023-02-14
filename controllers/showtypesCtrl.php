<?php

include_once(__DIR__ . '/../models/Showtypes.php');
$showtypes = getShowtypes();
include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/exercice2.php');
