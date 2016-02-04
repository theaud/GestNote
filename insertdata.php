<?php



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
function inser_data_contact($data_base,$id,$surname,$forename,$address,$postalcode,$city)
{
$SQL = "INSERT INTO `GestNotes`.`contact` (`id`, `surname`, `forename`, `address`, `postalcode`, `city`) 
VALUES ('".$id."', '".$surname."', '".$forename."', '".$address."', '".$postalcode."', '".$city."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}

//--------------------------------------------------------------------------------------------------------
////-----------------------------------   doctor       --------------------------------------------------
//--------------------------------------------------------------------------------------------------------
function inser_data_doctor($data_base,$id,$address,$postalcode,$city,$fixphone,$mobilephone,$vaccine,$allergic,$medical_notes)
{
$SQL = "INSERT INTO `GestNotes`.`doctor` 
    (`id`, `surname`, `forename`, `fixphone`, `mobilephone`, `vaccine`, `allergic`, `medical_notes`) 
VALUES ('".$id."', '".$address."', '".$postalcode."', '".$city."', '".$fixphone."',"
        . " '".$mobilephone."', '".$vaccine."', '".$allergic."', '".$medical_notes."')";
$result = $data_base->query ($SQL);

if (!$result) { die('Requête invalide : ' . mysql_error());}
}
