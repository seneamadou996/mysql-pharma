<?php
require "../connect.php";
error_reporting(E_ERROR | E_WARNING | E_PARSE);


$no_client = $_POST['no_client'];
$civilite = $_POST['civilite'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$date_naissance = $_POST['date_naissance'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$no_insee = $_POST['no_insee'];
$caisse = $_POST['caisse'];
$mutuelle = $_POST['mutuelle'];


$sql = "INSERT INTO clients VALUES ( :no_client , :civilite, :prenom, :nom, :date_naissance, :adresse, :code_postal, :ville, :tel, :email, :no_insee, :caisse, :mutuelle )";

if (!$stmt = $conn->prepare($sql)) {
	echo "Statement invalid.<br>";
}else{
	echo "Statement prepared.<br>";
	if ($stmt->execute(array(
		':no_client' => $_POST['no_client'],
		':civilite' => $_POST['civilite'],
		':prenom' => $_POST['prenom'],
		':nom' => $_POST['nom'],
		':date_naissance' => $_POST['date_naissance'],
		':adresse' => $_POST['adresse'],
		':code_postal' => $_POST['code_postal'],
		':ville' => $_POST['ville'],
		':tel' => $_POST['tel'],
		':email' => $_POST['email'],
		':no_insee' => $_POST['no_insee'],
		':caisse' => $_POST['caisse'],
		':mutuelle' => $_POST['mutuelle']
	))) { echo "Execution réussie"; } else { "Execution échouée"; }
}
?>