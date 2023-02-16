<?php

include_once(__DIR__ . '/../models/Client.php');
$listClients = getListClients();
include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/exercice7.php');
