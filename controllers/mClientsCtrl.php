<?php

include_once(__DIR__ . '/../models/Client.php');
$mClients = getMClients();
include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/exercice5.php');
