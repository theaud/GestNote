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
$SQL = "INSERT INTO `GestNotes`.`identity` (`id`, `birth`, `sex`, `registerdate`, `prev_school`, `marks`) 
VALUES ('".$id."', '".$birth."', '".$sex."', '".$registerdate."', '".$prev_school."', '".$marks."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}


//--------------------------------------------------------------------------------------------------------
////-----------------------------------   coordonate       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_coordonate($data_base,$id,$address,$postalcode,$city,$fixphone,$mobilephone)
{
$SQL = "INSERT INTO `GestNotes`.`coordonate` (`id`, `address`, `postalcode`, `city`, `fixphone`, `mobilephone`) 
VALUES ('".$id."', '".$address."', '".$postalcode."', '".$city."', '".$fixphone."', '".$mobilephone."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}


//--------------------------------------------------------------------------------------------------------
////-----------------------------------   contact       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_contact($data_base,$id,$address,$postalcode,$city,$fixphone,$mobilephone)
{
$SQL = "INSERT INTO `GestNotes`.`contact` (`id`, `birth`, `sex`, `registerdate`, `prev_school`, `photo`) 
VALUES ('".$id."', '".$surname."', '".$forename."', '".$address."', '".$postalcode."', '".$city."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}
/*
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `fixphone` varchar(20) NOT NULL,
  `mobilephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    */
    
//--------------------------------------------------------------------------------------------------------
////-----------------------------------   doctor       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_doctor($data_base,$id,$address,$postalcode,$city,$fixphone,$mobilephone)
{
$SQL = "INSERT INTO `GestNotes`.`doctor` (`id`, `birth`, `sex`, `registerdate`, `prev_school`, `photo`) 
VALUES ('".$id."', '".$address."', '".$postalcode."', '".$city."', '".$fixphone."', '".$mobilephone."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}



/*

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `fixphone` varchar(20) NOT NULL,
  `mobilephone` varchar(20) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `allergic` varchar(255) NOT NULL,
  `medical_notes` varchar(255) NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 * 
 *  */
 