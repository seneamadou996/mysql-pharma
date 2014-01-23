<?php
require "../connect.php";

$id_fournisseur = $_POST['id_fournisseur'];
$nom_fournisseur = $_POST['nom_fournisseur'];
$personne_contact = $_POST['personne_contact'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$email = $_POST['email'];




$sql = "INSERT INTO fournisseur VALUES ( :id_fournisseur , :nom_fournisseur, :personne_contact, :adresse, :ville, :code_postal, :tel, :email )";

if (!$stmt = $conn->prepare($sql)) {
	echo "Statement invalid.<br>";
}else{
	echo "Statement prepared.<br>";
	if ($stmt->execute(array(
		':id_fournisseur' => $_POST['id_fournisseur'],
		':nom_fournisseur' => $_POST['nom_fournisseur'],
		':personne_contact' => $_POST['personne_contact'],
		':adresse' => $_POST['adresse'],
		':ville' => $_POST['ville'],
		':code_postal' => $_POST['code_postal'],
		':tel' => $_POST['tel'],
		':email' => $_POST['email']
	))) { echo "Execution réussie"; } else { "Execution échouée"; }
}
?>