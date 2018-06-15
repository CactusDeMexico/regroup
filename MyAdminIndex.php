
<?php
include("controleur/Tableau.php");
include("controleur/public_class_administrateur.php");

include("controleur/public_class_connexion.php");

$unC = new Tableau("localhost", "regroup", "root", "",  "Administrateur");





$unC->setTable("Administrateur");

$UnAdmin = new Administrateur();

$tabAdmin["Adresse"] = $_POST['Nom'];
$tabAdmin["Email"] = $_POST['Password'];
$UnAdminnAdmin-> renseigner($tabAdmin);

var_dump($Nom);


$num = $unC->loginadmin($UnAdmin->getNom(), $UnAdmin->getPassword());
var_dump("$num");
if ($num == 1) {

    $_SESSION['user'] =$uneCo->getPassword();
    echo "connexion effectué";


} else {
    echo "Your Login Name or Password is invalid";
}





?>