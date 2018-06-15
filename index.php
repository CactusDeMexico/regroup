<?php
session_start();
//$_SESSION['commercial']="LUCAS";
//$_SESSION['user']="leCli";

ini_set('display_errors',1);
    error_reporting('e_all');

    require('header.php');
//$unC = new Controleur("localhost", "regroup", "root", "", "vueProduit");
include("controleur/Tableau.php");
include("controleur/public_class_personne.php");
include("controleur/public_class_user.php");
include("controleur/public_class_entreprise.php");
include("controleur/public_class_commercial.php");
include("controleur/public_class_connexion.php");
include("controleur/public_class_type.php");

$page=(isset($_GET['page']))?$_GET['page']:0;
$unC = new Tableau("localhost", "regroup", "root", "", "vueProduit");
$resultats=$unC->selectAll();


?>
<?php

if(!$page) {
    $unC->setTable("vuecorpro");
    include("vue/VueAccueil.php");

}

switch($page) {

//acceuil index.php?page=1
    case 1:
        $unC->setTable("vuecorpro");
        $resultats = $unC->selectAll();
        include("vue/VueAccueil.php");

        break;

    //inscription user
    case 2:
        include("vue/InscriptionUser.php");


        if (isset($_POST['valider'])) //lancer fonction enregistrement user
        {

            $unePersonne = new Personne();
            $unePersonne->renseigner($_POST);
            $tab = $unePersonne->serialiser();
            $unC->setTable("personne");
            $unC->insert($tab);

            $Idpersonne = $unC->selectID($unePersonne->getNom(), $unePersonne->getPrenom());

            $unUser = new User();
            $tabUser["Adresse"] = $_POST['Adresse'];
            $tabUser["Email"] = $_POST['Email'];
            $tabUser["Telephone"] = $_POST['Telephone'];
            $tabUser["Username"] = $_POST['Username'];
            $tabUser["Password"] = $_POST['Password'];
            $tabUser["IdPerssone"] = $Idpersonne;

            $unUser->renseigner($tabUser);
            $unC->setTable("user");
            $tab = $unUser->serialiser();
            $unC->insert_2($tab);
            echo "Insertion 2/2";
        }
        break;


// INSCRIPTION COMMERCIAL
    case 3:
        include("vue/InscriptionCom.php");


        if (isset($_POST['valider'])) //lancer fonction enregistrement Com
        {

            $unePersonne = new Personne();
            $unePersonne->renseigner($_POST);
            $tab = $unePersonne->serialiser();
            $unC->setTable("personne");
            $unC->insert($tab);

            $Idpersonne = $unC->selectID($unePersonne->getNom(), $unePersonne->getPrenom());

            $uneEntre = new Entreprise();
            $tabEntre["Nom"] = $_POST['NomEntre'];
            $tabEntre["Type"] = $_POST['Type'];
            $tabEntre["Adresse"] = $_POST['Adresse'];
            $uneEntre->renseigner($tabEntre);
            $tabEntre = $uneEntre->serialiser();
            $unC->setTable("entreprise");
            $unC->insert($tabEntre);

            $IdEntreprise = $unC->selectIdEntreprise($uneEntre->getNom(), $uneEntre->getAdresse());
            var_dump($IdEntreprise);

            $unCom = new Commercial();
            $tabCom["DateInscription"] = $_POST['DateInscrip'];
            $tabCom["Specialite"] = $_POST['Specialite'];
            $tabCom["Telephone"] = $_POST['Telephone'];
            $tabCom["Email"] = $_POST['Email'];
            $tabCom["Password"] = $_POST['Password'];
            $tabCom["IdPerssone"] = $Idpersonne;
            $tabCom["IdEntreprise"] = $IdEntreprise;
            // INSERT INTO commercial VALUues ("03-06-18","cométique","0102030405","LM@gmail.com","123456","11","2");
            $unC->setTable("commercial");
            $unCom->renseigner($tabCom);
            $tabCom = $unCom->serialiser();
            var_dump($tabCom);
            $unC->insert_2($tabCom);

        }
        break;
// RECHERCHER A FINIR
    case 4:
        include("vue/recherche.php");
        if (isset($_POST['rechercher'])) {
            $tab = array("nom", "prenom");
            $resultats = $unC->rechercher($tab, $_POST["motcle"]);
            include("vue/vue.php");

        }
        break;

    // CONNECTION
    case 5: //connection user
        /* $unCon = new Tableau("localhost", "regroup", "root", "", "user");
         $rescon=$unCon->selectAll();*/
        include("vue/VueCon.php");
        if (isset($_POST['connexion'])) //lancer fonction enregistrement Com
        {
            $uneCo = new Connexion();

            $uneCo->renseigner($_POST);
            $tab = $uneCo->serialiser();

            $unC->setTable("user");

            $num = $unC->login($uneCo->getUsername(), $uneCo->getPassword());

            if ($num == 1) {

                $_SESSION['user'] = $uneCo->getUsername();


            } else {
                echo "Your Login Name or Password is invalid";
            }
        }
        break;
    case 6: //connection com
        include("vue/VueCon.php");
        if (isset($_POST['connexion'])) //lancer fonction enregistrement Com
        {
            $uneCo = new Connexion();

            $uneCo->renseigner($_POST);
            $tab = $uneCo->serialiser();

            $unC->setTable("commercial");

            $num = $unC->loginCom($uneCo->getUsername(), $uneCo->getPassword());

            if ($num == 1) {

                $_SESSION['commercial'] = $uneCo->getUsername();

            } else {
                echo "Your Login Name or Password is invalid";
            }
        }

        break;
    case 7: //vue speciale
        // SELECT * FROM VueProduit WHERE Type="informatique";
        $unC->setTable("VueProduit");

        $resultats = $unC->selectAllWhere("meuble");

        include("vue/VueAccueil.php");
        break;

    case 8: //vue speciale
        // SELECT * FROM VueProduit WHERE Type="informatique";
        $unC->setTable("vuecorpro");
        $type = "informatique";
        $resultats = $unC->selectAllWhere($type);

        include("vue/VueAccueil.php");
        break;
    case 9: //vue speciale
        // SELECT * FROM VueProduit WHERE Type="informatique";
        $unC->setTable("vuecorpro");
        $type = "accessoire";
        $resultats = $unC->selectAllWhere($type);

        include("vue/VueAccueil.php");
        break;
    case 10: //vue speciale
        // SELECT * FROM VueProduit WHERE Type="informatique";
        $unC->setTable("vuecorpro");
        $type = "accessoire";
        $resultats = $unC->selectAllWhere("$type");

        include("vue/VueAccueil.php");
        break;
    case 11: //vue speciale
        // SELECT * FROM VueProduit WHERE Type="informatique";
        $unC->setTable("vuecorpro");
        $type = "chaussure";
        $resultats = $unC->selectAllWhere("$type");
        include("vue/VueAccueil.php");

        break;
    case 12: //vue d'un seul produit


        $unC->setTable("vuecorpro");
        $lien = $_GET['lien'];


        $resultats = $unC->selectUn($lien);


        //$similaire=$unC->SelectAllWhere($type);

        include("vue/VueProduit2.php");


        break;

    // CONTACT ADMIN
    //
    //  //LISTER PRODUIT
    case 13:
        include("vue/VueListerProduit.php");

        break;

    case 14:
        $unC->setTable("vuecorpro");
        ?>
        <section id="wrapper">
            <div class="container">
                <div class="row">
                    <h3>Order Details</h3>
                    <div class="table-responsive">
                        <form method="POST" action="index.php?page=16&tabAchat=<?php echo $tabAchat; ?>">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="5%"></th>
                                    <th width="20%">Nom de l'objet</th>
                                    <th width="10%">Quantité</th>
                                    <th width="20%">Prix</th>
                                    <th width="15%">Total</th>
                                    <th width="5%">Action</th>
                                </tr>
                                <?php

                                if (!empty($_SESSION["shopping_cart"])) {
                                    $total = 0;
                                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {

                                        $resultats = $unC->selectUn($values["item_id"]);

                                        foreach ($resultats as $unResultat) {
                                            $Lien = $unResultat['Lien'];
                                        }
                                        //envoie du tableau en POST
                                        ?>

                                        <input type="hidden" name="$tab[id]" value="<?php echo $values["item_id"]; ?>"/>


                                        <tr>
                                            <td>
                                                <a href=index.php?page=12&lien=<?php echo $values["item_id"]; ?> >
                                                    <img src="Content/images/produit/<?php echo $Lien; ?>"
                                                         style="max-height:80px; max-width: 160px;"
                                                         class="img-responsive"/>
                                                </a>
                                            </td>
                                            <td><?php echo $values["item_name"]; ?></td>
                                            <td><?php echo $values["item_quantity"]; ?></td>
                                            <td>€ <?php echo $values["item_price"]; ?></td>
                                            <td>
                                                € <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                            <td>
                                                <a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                                        class="text-danger">Remove</span></a></td>
                                        </tr>
                                        <?php
                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                    }


                                    ?>


                                    <!--

                                     $tabEntre["Adresse"] = $_POST['Adresse'];
                        $uneEntre-> renseigner($tabEntre);
                        $tabEntre = $uneEntre->serialiser();
                        $unC->setTable("entreprise");
                        $unC->insert($tabEntre);

                                    $unUser-> renseigner($tabUser);
                        $unC->setTable("user");
                        $tab = $unUser->serialiser();
                        $unC->insert_2($tab);
                        echo "Insertion 2/2";
                                    -->

                                    <tr>
                                        <td colspan="3" align="right">Total</td>
                                        <td align="right">€ <?php echo number_format($total, 2); ?></td>
                                        <td>


                                            <button type="submit" name="Payer"
                                                    class="btn btn-primary glyphicon glyphicon-shopping-cart "
                                                    value="Payer">
                                                <b> Acheter</b>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php

        break;

    //contact admin
    case 15:
        break;
    //Nouveau PRODUIT
    //MES GROUPES

    //MON COMPPTE
    //  PAIMENT
    case 16:


        $unC->SetTable("user");
        $res = $unC->SelectIDUser($_SESSION['user']);

        foreach ($_SESSION["shopping_cart"] as $keys => $values) {

            $unC->setTable("Produit");

            $id_p = $values["item_id"];

            $resultats = $unC->selectUn($values["item_id"]);


            foreach ($resultats as $unResultat) {

                $tabInsert["Nom"] = $unResultat["Nom"];
                $tabInsert["Prix"] = $unResultat["Prix"];
                $tabInsert["Quantite"] = $unResultat["Quantite"];
                $tabInsert["IdProduit"] = $id_p;
                $tabInsert["IdUser"] = $res;


                $unC->setTable("achatseff");
                $unC->insert($tabInsert);


            }
            $unC->SetTable("produit");

            $IdTran = $unC->SelectIdTranche($id_p);


            $unC->setTable("tranche");

            $Palier = $unC->SelectTranche($IdTran);


            If ($palier > 0) {
                echo "Groupe Disponible Pour Rabais";
            } else {
                echo "Aucun rabais possible";
            }

        }
        break;
    case 17:

}
?>
<?php require('footer.php '); ?>