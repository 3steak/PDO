<?php

function getShowtypes()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT type FROM showtypes";

    $stmt = $db->query($request);
    $showtypes = $stmt->fetchAll();
    return $showtypes;
}
