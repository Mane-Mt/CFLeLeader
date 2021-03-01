<?php
ob_start();

//####################################################################

//verifier si la requete est un POST
//check if request method is POST
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
throw new Exception('Ceci nest pas une requete POST');
}

//verifier si la requete POST est au format JSON
//check if POST and JSON in header
$pgg_dataType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if(strcasecmp($pgg_dataType, 'application/json') != 0){
throw new Exception('Les donnees ne sont pas au format JSON');
}

//Recevoir les donnees si les verifications sont faites
//get data
$pgg_data = file_get_contents("php://input");

//Decoder les donnees recues
//decode data
$pgg_data_decoded = json_decode($pgg_data, true);
die(var_dump($pgg_data_decoded));
//Verifier si les donnees decodees sont au format JSON
//check if JSON
if(!is_array($pgg_data_decoded)){
throw new Exception('Les donnees recues ne sont pas du type JSON');
}

//####################################################################

//Recuperation des donnees dans des variables
//save data to variables
$pgg_tx_reference = $pgg_data_decoded["tx_reference"];
$pgg_payment_reference = $pgg_data_decoded["payment_reference"];
$pgg_amount = $pgg_data_decoded["amount"];
$pgg_datetime = $pgg_data_decoded["datetime"];
$pgg_identifier = $pgg_data_decoded["identifier"];
$pgg_phone_number = $pgg_data_decoded["phone_number"];
$pgg_payment_method = $pgg_data_decoded["payment_method"];

//####################################################################

// insert into database

include 'db.php';

 $req = $bdd->prepare("UPDATE payements SET tx_reference = :tx_reference,payment_reference = :payment_reference,
    amount = :amount,
  payment_method = :payment_method, status = 'approve'
 WHERE identifier = :identifier");

$req->execute(array(

'tx_reference' => $pgg_tx_reference,

'payment_reference'=>$pgg_payment_reference,

'amount'=>$pgg_amount,

'payment_method' => $pgg_payment_method,

'identifier' => $pgg_identifier

));



$id = $_SESSION['lastInsId'];
$req = $bdd->exec("UPDATE inscriptions SET valider = 1 WHERE id = $id");

header("Location: ".PAY_URL."/payementSuccess");
ob_end_flush();
?>
