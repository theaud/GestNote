<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function inser_data_vehicle($data_base,$Make,$Model,$Year,$CC,$Colour,$Picture)
{
$SQL = "INSERT INTO `b026198f`.`car` (`Make`, `Model`, `Year`, `CC`, `Colour`, `Picture`) 
VALUES ('".$Make."', '".$Model."', '".$Year."', '".$CC."', '".$Colour."', '".$Picture."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}

