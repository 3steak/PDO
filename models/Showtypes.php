<?php

function getShowtypes()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT type FROM showtypes";

    $sth = $db->prepare($request);
    $sth->execute();
    $showtypes = $sth->fetchAll(PDO::FETCH_OBJ);
    return $showtypes;
}
