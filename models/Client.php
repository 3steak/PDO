<?php


/** Fonction qui me permet de récupérer la liste des clients
 * getClients
 *
 * @return array
 */
function getClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients`";

    $sth = $db->prepare($request);
    $sth->execute();
    $clients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $clients;
}


/** Fonction qui me permet de recupérer la liste des 20 premiers clients
 * getTwentyClients
 *
 * @return array
 */
function getTwentyClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients` LIMIT 20";


    $sth = $db->prepare($request);
    $sth->execute();
    $twentyClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $twentyClients;
}


/** Permet de retourner les clients loyales 
 * getLoyaltyClients
 *
 * @return array
 */
function getLoyaltyClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients` WHERE `card` = 1";


    $sth = $db->prepare($request);
    $sth->execute();
    $loyaltyClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $loyaltyClients;
}

/** Fonction qui permet de retourner par ordre alphabétique les clients dont le nom commence par la lettre M 
 * getMClients
 *
 * @return array
 */
function getMClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName` FROM `clients` WHERE `lastName` LIKE 'm%' ORDER BY `lastName`";

    $sth = $db->prepare($request);
    $sth->execute();
    $mClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $mClients;
}

/** Fonction ermet de retourner la liste des clients avec date de naissance et numéro de carte de fidélité
 * getListClients
 *
 * @return array
 */
function getListClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `firstName`, `lastName`, `birthDate`, `card`, `cardNumber` FROM `clients`";


    $sth = $db->prepare($request);
    $sth->execute();
    $listClients = $sth->fetchAll(PDO::FETCH_OBJ);
    return $listClients;
}
