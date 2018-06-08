<?php

session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regroup</title>
    <link rel="shortcut icon" type="image/x-icon" href="Content/images/iconerg.ico" />
    <!-- Bootstrap -->
    <script src="./Content/js/jquery-1.11.3..min.js"></script>
    <script src="./Content/js/bootstrap.js"></script>
    <link rel="stylesheet" href="Content\css\bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<section>
    <nav>
        <div class="containertop">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php?page=1"><img src="Content/images/logo.png" width="90" height="72" alt=""/></a> </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php?page=7">Meuble <span class="sr-only">(current)</span></a> </li>
                    <li><a href="index.php?page=8">Informatique</a> </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Mode <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=9">Accesoire</a> </li>
                            <li><a href="index.php?page=10">Vetement</a> </li>
                            <li><a href="index.php?page=11">Chaussure</a> </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a> </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a> </li>
                        </ul>
                    </li>
                    <li><a href="#">Divers</a> </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
            <!-- _______________CONNEXION COM_____________________________________________-->
            <?php if(isset( $_SESSION['commercial']))
            {
            $Connecte=true;
                ?>
                    <div class="navbar-form navbar-right">
                        <p>Bonjour <?php echo$_SESSION['commercial'] ?></p>
                        <img src="Content/images/membre.png" style= "max-height:48px ;max-width: 48px;">
                    </div>
                    <ul class="nav navbar-nav navbar-right hidden-sm">

                        <li><a href="" onclick="return logout_click();">Se déconnecter</a> </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                Mes produits
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=x">Nouveau Produit</a> </li>
                                <li><a href="index.php?page=x">Lister produit</a> </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Contacter Administrateur</a> </li>
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right " role="search"  >

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Search" >
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>


            <?php }?>
            <!-- _____________connection USER___________________________________________-->
            <?php
                    if(isset($_SESSION['user']))
                    {
                        $Connecte=true;

                        ?>
                    <div class="navbar-form navbar-right">
                        <p>Bonjour <?php echo$_SESSION['user'] ?></p>
                        <img src="Content/images/membre.png" style= "max-height:48px ;max-width: 48px;">
                    </div>

                    <ul class="nav navbar-nav navbar-right hidden-sm">

                        <li><a href="" onclick="return logout_click();">Se déconnecter</a> </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                Mes groupes
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?page=">Mon compte</a> </li>
                                <li><a href="index.php?page=">Aide</a> </li>
                                <li><a href="index.php?page=14">Historique</a> </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Contacter administrateur</a> </li>
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right " role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">
                            Submit
                        </button>
                    </form>
            <?php }
           // var_dump($Connecte);
           if( $Connecte==false){

            ?>

            <ul class="nav navbar-nav navbar-right hidden-sm">
                <li><a href="index.php?page=5">Se connecter</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        S'inscrire
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?page=2">Client</a> </li>
                        <li><a href="index.php?page=3">Commercial</a> </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Requète Spécial</a> </li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right " role="search"  >
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="Search" >
                    <button type="submit" class="btn btn-default"><i class="fa fa-search">  </i></button>
                </div>

            </form>
            <?php
            }?>
            <!--<script type="text/javascript">
                function button_remove_click(e){
                    if(confirm("Se Déconnecter ?")){
                        return true;
                    }else{
                        e.preventDefault();
                        return false;
                    }
                }-->
        </div>



        <!-- /.container-fluid -->
    </nav>
    <script type="text/javascript">
        function logout_click(e)
        {
             if(confirm("Se Déconnecter ?"))
             {
                    <?php/*
                        $_SESSION = array();
                        session_destroy();
                        session_start();
                        $Connecte=false;*/
                     ?>
                    return true;
            }
            else{
                e.preventDefault();
                return false;
                 }
        }
    </script>

