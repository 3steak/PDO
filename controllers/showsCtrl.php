<?php

include_once(__DIR__ . '/../models/Shows.php');
$shows = getShows();
include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/exercice6.php');
