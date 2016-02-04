<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//--------------------------------------------------------------------------------------------------------
////-----------------------------------   Student       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_student($data_base,$id,$surname,$forename,$contact,$doctor,$marks)
{
$SQL = "INSERT INTO `GestNotes`.`student` (`id`, `surname`, `forename`, `contact`, `doctor`, `marks`) 
VALUES ('".$id."', '".$surname."', '".$forename."', '".$contact."', '".$doctor."', '".$marks."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}

function inser_data_student_raw($data_base,$id,$contact,$doctor)
{
$SQL = "INSERT INTO `GestNotes`.`student` (`id`, `surname`, `forename`, `contact`, `doctor`, `marks`) 
VALUES ('".$id."', 'Surname', 'Forename.', '".$contact."', '".$doctor."', 'Marks')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}

//--------------------------------------------------------------------------------------------------------
////-----------------------------------   identity       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_identity($data_base,$id,$birth,$sex,$registerdate,$prev_school,$marks)
{
$SQL = "INSERT INTO `GestNotes`.`student` (`id`, `birth`, `sex`, `registerdate`, `prev_school`, `photo`) 
VALUES ('".$id."', '".$birth."', '".$sex."', '".$registerdate."', '".$prev_school."', '".$marks."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}


//--------------------------------------------------------------------------------------------------------
////-----------------------------------   coordonate       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_coordonate($data_base,$id,$address,$postalcode,$city,$fixphone,$mobilephone)
{
$SQL = "INSERT INTO `GestNotes`.`student` (`id`, `birth`, `sex`, `registerdate`, `prev_school`, `photo`) 
VALUES ('".$id."', '".$address."', '".$postalcode."', '".$city."', '".$fixphone."', '".$mobilephone."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}
