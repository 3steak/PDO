<?php

function getShows()
{
    include_once(__DIR__ . '/../config/connect.php');

    $request = "SELECT `title`, `performer`, `date`, `startTime` FROM `shows` ORDER BY `title`";

    $sth = $db->prepare($request);
    $sth->execute();
    $shows = $sth->fetchAll(PDO::FETCH_OBJ);
    return $shows;
}
