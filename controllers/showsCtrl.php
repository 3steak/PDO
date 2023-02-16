<?php

include_once(__DIR__ . '/../models/Shows.php');
$shows = getShows();

// Formattage de ma date en format FR 
$dateformatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN,
    'dd/MM/yyyy'
);
define('DATE_FORMATTER', $dateformatter);


include_once(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/exercice6.php');
