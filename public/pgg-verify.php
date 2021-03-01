<?php
session_start();
use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;

ob_start();
echo 'hello';
	$pgg_api_url = 'https://paygateglobal.com/api/v2/status';

	$pgg_curl_init = curl_init($pgg_api_url);

	$pgg_auth_token = "00e8e122-6e40-4d54-8e2a-36fd6412b6c7";
	//$pgg_identifier = 12993;
	$pgg_identifier = $_GET['identifier'];

	$pgg_jsonData = array(
		'auth_token' => $pgg_auth_token,
		'identifier' => $pgg_identifier);

	$pgg_jsonDataEncoded = json_encode($pgg_jsonData);

	curl_setopt($pgg_curl_init, CURLOPT_POST, 1);

	curl_setopt($pgg_curl_init, CURLOPT_SSL_VERIFYPEER, 0);

	curl_setopt($pgg_curl_init, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($pgg_curl_init, CURLOPT_POSTFIELDS, $pgg_jsonDataEncoded);

	curl_setopt($pgg_curl_init, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

	//Execute the request
	$pgg_result = curl_exec($pgg_curl_init);

	//close PayGateGlobal curl session
	curl_close($pgg_curl_init);

	//Decode the result JSON data
	$pgg_array = json_decode($pgg_result, true);
    include 'db.php';
	//getting data from result

	$pgg_tx_reference = $pgg_array["tx_reference"];
	$pgg_status = $pgg_array["status"];
    $pgg_payment_reference = $pgg_array["payment_reference"];
	$pgg_payment_method = $pgg_array["payment_method"];
	$status = '';


    switch($pgg_status)
            {
                case 0:
                    $status="approved";


                    break;

                case 2:
                    $status="en cours";
                    break;
                case 4:
                    $status="expired";
                case 6:
                    $status="annulé";
                    break;
                default:
                    $status = 'initialized';
        }

        $req = $bdd->prepare(" UPDATE payements SET tx_reference = :tx_reference, payment_reference = :payment_reference, payment_method = :payment_method, status = :status
                			WHERE identifier = $pgg_identifier");

    $req->execute(array(

               'tx_reference' => $pgg_tx_reference,

               'payment_method' => $pgg_payment_method,

               'payment_reference'=>$pgg_payment_reference,

               'status' => $status

        )) ;




	//checking pgg status code values
	switch($pgg_status)
	{
		case 0:
			if (strlen($pgg_tx_reference) > 5) {
				$id = $_SESSION['lastInsId'];
                $req = $bdd->exec("UPDATE inscriptions SET valider = 1 WHERE id = $id");

                header("Location: ".PAY_URL."/payementSuccess");
			}

			break;

		case 2:

            header("Location: ".PAY_URL."/payementStatus/".$pgg_status);
			break;

		case 4:
            header("Location: ".PAY_URL."/payementSuccess");
           // header("Location: ".PAY_URL."/payementStatus/".$pgg_status);
			break;

		case 6:
            header("Location: ".PAY_URL."/payementStatus/".$pgg_status);
			break;

		default:
            header("Location: ");
			echo "Code erreur TEMPORAIRE"."\n";
	}

ob_flush();
?>
