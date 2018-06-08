

<section id="wrapper">

    <div class="container">

        <div id="content-wrapper">
            <section id="main">
               <a>
                   <header class="page-header">
                       <h1>Connectez-vous à votre compte</h1>
                   </header>
               </a>

                <section id="content" class="page-content card card-block">
                    <section class="login-form">
                        <?php if($page==5){?>
                        <p align="right"> <a href="index.php?page=6" align="right" >
                            Connection Commercial
                        </a>
                        </p>
                        <?php }?>
                        <form id="login-form" action="index.php" method="post">
                            <section>

                                <input type="hidden" name="back" value="my-account">
                                <div class="form-group row ">

                                    <!-ENTRER DE L EMAIL DANS umail-->
                                    <a>
                                        <label class="col-md-3 form-control-label required">
                                            Pseudo ou email
                                        </label>
                                    </a>
                                    <div class="col-md-6">
                                        <input class="form-control"  name="Username" type="text" value="" required="">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <!-ENTRER DU MOT DE PASS DANS upass-->
                                    <a>
                                        <label class="col-md-3 form-control-label required">
                                            Mot de passe
                                        </label>
                                    </a>
                                    <div class="col-md-6">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="Password" type="password" value="" pattern=".{5,}" required="">

                                        </div>

                                    </div>

                                </div>
                                <div class="forgot-password">
                                    <a href="#" rel="nofollow">
                                        Mot de passe oublié ?
                                    </a>
                                </div>
                            </section>

                            <footer class="form-footer text-sm-center clearfix">
                                <input type="hidden" name="submitLogin" value="1">

                                <button class="btn btn-primary" name="connexion" data-link-action="sign-in" type="submit">
                                    Connexion
                                </button>
                            </footer>
                        </form>
                    </section>
                    <hr>
                    <div >
                        <a href="inscription.php" data-link-action="display-register-form">
                            Pas de compte ? Créez-en un
                        </a>

                    </div>


                </section>

            </section>
        </div>
    </div>
</section>
