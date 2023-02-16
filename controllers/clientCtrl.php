<?php

include_once(__DIR__ . '/../models/Client.php');
$clients = getClients();
include_once(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/exercice1.php');
