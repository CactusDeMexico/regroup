
<?php
include("controleur/Tableau.php");
include("controleur/public_class_administrateur.php");

include("controleur/public_class_connexion.php");
$page=(isset($_GET['page']))?$_GET['page']:0;
$unC = new Tableau("localhost", "db736227029", "dbo736227029", "dfg5ZL241!", "Administrateur");
$uneCo = new Administrateur();

$uneCo->renseigner($_POST);
$tab = $uneCo->serialiser();

$unC->setTable("Administrateur");

$num = $unC->loginadmin($uneCo->getNom(), $uneCo->getPassword());

if ($num == 1) {

    $_SESSION['user'] =$uneCo->getPassword();
    echo "connexion effectué";


} else {
    echo "Your Login Name or Password is invalid";
}
switch ($page)
{//connexion admin
    case 18:



break;


}
?>