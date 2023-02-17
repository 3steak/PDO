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
function getTwentyClients(): array
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = 'SELECT `firstName`, `lastName` FROM `clients` LIMIT 20';


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

    $request = "SELECT lastName, firstName
    FROM `clients` 
    JOIN `cards`
    ON `cards`.`cardNumber`= `clients`.`cardNumber`
    WHERE `cardTypesId`=1;";


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
function getMClients(): array
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
// function getListClients()
// {
//     include_once(__DIR__ . '/../config/connect.php');

//     $request = "SELECT `firstName`, `lastName`, `birthDate`, `card`, `cards`.`cardtypesId`,`cards`.`cardNumber` FROM `clients` LEFT JOIN  `cards` ON `cards`.`cardNumber`= `clients`.`cardNumber`;";


//     $sth = $db->prepare($request);
//     $sth->execute();
//     $listClients = $sth->fetchAll(PDO::FETCH_OBJ);
//     return $listClients;
// }

require_once(__DIR__ . '/../helpers/db.php');

$db = new Database();
// var_dump($db);
$request = "SELECT `firstName`, `lastName`, `birthDate`, `card`, `cards`.`cardtypesId`,`cards`.`cardNumber` 
FROM `clients` LEFT JOIN  `cards` ON `cards`.`cardNumber`= `clients`.`cardNumber`;";
$listClients = $db->executeRequest($request);


//  REQUETE DE LA CORRECTION 

// 'SELECT 
//             `clients`.`lastName`,
//             `clients`.`firstName`,
//             DATE_FORMAT(`clients`.`birthDate`, "%d %b %Y") AS `birthDate`,
//             IF( `cards`.`cardTypesId`= 1 ,\'oui\',\'non\') AS `fidelity`,
//             IF(`cards`.`cardTypesId`= 1,`clients`.`cardNumber`,\'\') AS `cardFidelity`
//             FROM `clients`
//             LEFT JOIN `cards` ON `cards`.`cardNumber` = `clients`.`cardNumber`;
//             '