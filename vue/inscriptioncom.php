<div class="container">
    <div id="content-wrapper">
        <section id="main">
            <header class="page-header">
                <h1>
                    Créez votre compte
                </h1>
            </header>
            <section id="content" class="page-content card card-block">
                <section class="register-form">
                    <p align="right">Vous etes un client ? <a href="index.php?page=2">Par ici !</a></p>
                    <form action="index.php?page=6" id="customer-form" class="js-customer-form" method="post">
                        <section>

                            <!--__________________prenom  ___________________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    prenom
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Prenom" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>

                            <!--___________________nom__________________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    nom
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Nom" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                            <!--______________________date de naissance______________________________-->

                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label">
                                    Date de naissance
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name=" datenaissance" type="date" value="" required=""
                                           placeholder="DD-MM-YYYY">
                                    <span class="form-control-comment">
                                     (Ex. : 31/05/1970)
                                     </span>
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>

                            </div>


                                        <!--FIN DE LA TABLE PERSONNE -->
                            <!--___________________nom endtreprise__________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    Nom de l'entrprise
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="NomEntre" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                            <!--__________________Type___________________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    Type
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Type" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                            <!--__________________adresse___________________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    Adresse
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Adresse" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>




                            <!--______________________date d'inscription______________________________-->

                            <input type="hidden" name="DateInscrip" value="<?php echo  date("d.m.y");  ?>" />

                            <!--______________________Specialite_______________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    Specialité
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Specialite" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                            <!--__________________telephone___________________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    telephone
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Telephone" type="text" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                            <!--______________________email_______________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    E-mail
                                </label>
                                <div class="col-md-6">
                                    <input class="form-control" name="Email" type="email" value="" required="">
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>


                            <!--______________________MDP_______________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    Mot de passe
                                </label>
                                <div class="col-md-6">
                                    <div class="input-group js-parent-focus">
                                        <input class="form-control js-child-focus js-visible-password" name="Password"
                                               type="password" value="" pattern=".{5,}" required="">

                                    </div>
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                            <!--_________________CONFIRMATION MDP_______________________________-->
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label required">
                                    Mot de passe
                                </label>
                                <div class="col-md-6">
                                    <div class="input-group js-parent-focus">
                                        <input class="form-control js-child-focus js-visible-password"
                                               name="password_confirm" type="password" value="" pattern=".{5,}"
                                               required="">

                                    </div>
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>


                            <section class="register-form">
                                <p>Vous avez déjà un compte ? <a href="connection.php">Connectez-vous !</a></p>
                            </section>
                            <button class="btn btn-primary form-control-submit float-xs-right"
                                    name="valider" type="submit">
                                Enregistrer
                            </button>


                    </form>


                </section>
            </section>
        </section>
    </div>
</div>