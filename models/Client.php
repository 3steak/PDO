<?php


function getClients()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT firstName, lastName FROM clients";

    $stmt = $db->query($request);
    $clients = $stmt->fetchAll();
    return $clients;
}
