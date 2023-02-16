<?php


function getClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients`";

    $sth = $db->prepare($request);
    $sth->execute();
    $clients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $clients;
}


function getTwentyClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients` LIMIT 20";


    $sth = $db->prepare($request);
    $sth->execute();
    $twentyClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $twentyClients;
}


function getLoyaltyClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients` WHERE `card` = 1";


    $sth = $db->prepare($request);
    $sth->execute();
    $loyaltyClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $loyaltyClients;
}

function getMClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients` WHERE `lastName` LIKE 'm%' ORDER BY `lastName`";

    $sth = $db->prepare($request);
    $sth->execute();
    $mClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $mClients;
}

function getListClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName`, `birthDate`, `card`, `cardNumber` FROM `clients`";


    $sth = $db->prepare($request);
    $sth->execute();
    $listClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $listClients;
}
