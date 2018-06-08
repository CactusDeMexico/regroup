



<section id="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="carousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1" class=""></li>
                        <li data-target="#carousel" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item"><img class="img-responsive" src="Content/images/1920x500.gif" alt="thumb">
                            <div class="carousel-caption"> Carousel caption 1. Here goes slide description. Lorem ipsum
                                dolor set amet.
                            </div>
                        </div>
                        <div class="item active"><img class="img-responsive" src="Content/images/1920x500.gif"
                                                      alt="thumb">
                            <div class="carousel-caption"> Carousel caption 2. Here goes slide description. Lorem ipsum
                                dolor set amet.
                            </div>
                        </div>
                        <div class="item"><img class="img-responsive" src="Content/images/1920x500.gif" alt="thumb">
                            <div class="carousel-caption"> Carousel caption 3. Here goes slide description. Lorem ipsum
                                dolor set amet.
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel" data-slide="prev"><span class="icon-prev"></span></a>
                    <a class="right carousel-control" href="#carousel" data-slide="next"><span
                                class="icon-next"></span></a></div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="row">

                </div>
            </div>
            <hr>
            <h2 class="text-center"><?php echo$unResultat['Nom']; ?></h2>
            <hr>
            <!--PRODUIT-->
            <div class="container">
                <div class="row text-center">

                    <?php
                    foreach ($resultats as $unResultat) {
                        $Lien=$unResultat['Lien'];
                        $type=$unResultat['Type'];

                        $d = strtotime($unResultat['DateDebut']);
                        $f = strtotime($unResultat['DateFin']);

                        // $x= date_diff($d, $f);


//$now   = time();

                        $diff  = abs($f - $d);


                        $diff = abs($f - $d); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
                        $retour = array();

                        $tmp = $diff;
                        $retour['second'] = $tmp % 60;

                        $tmp = floor( ($tmp - $retour['second']) /60 );
                        $retour['minute'] = $tmp % 60;

                        $tmp = floor( ($tmp - $retour['minute'])/60 );
                        $retour['hour'] = $tmp % 24;

                        $tmp = floor( ($tmp - $retour['hour'])  /24 );
                        $retour['day'] = $tmp;



                        $x=$tmp;



                        //echo "x : ".$i->days;


                        ?>
                        <!--
    PRODUITS INI
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                <div class="thumbnail">
                    <a href=index.php?page=12&lien="<?php echo $Lien;  ?>" >
                    <img src="Content/images/produit/<?php echo $Lien ; ?>" style= "max-height:200px ;max-width: 400px;"  class="img-responsive"/>
                    </a>
                    <div class="caption">
                        <ul class="product-flags">
                            <li class="product-flag new"><?php echo $x;?> jours restants</li>
                        </ul>
                        <h3><?php echo$unResultat['Nom']; ?></h3>
                        <p><?php echo$unResultat['Description']; ?></p>
                        <p>Quantitée <?php echo$unResultat['Quantite']; ?></p>
                        <h4><?php echo$unResultat['Prix'];?>€</h4>

                        <p><a href="index.php?page=12" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Ajouter</a></p>
                    </div>
                </div>
            </div>
-->


                    <h2 class="text-center"><?php echo$unResultat['Nom']; ?></h2>
                    <hr>
                    <!--PRODUIT-->
                    <div class="container">
                        <div class="row text-center">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                            <div class="thumbnail">


                                <form method="post" action="index.php?action=add&id=<?php echo $unResultat["IdProduit"]; ?>">
                                    <a href=index.php?page=12&lien="<?php echo $Lien;  ?>" >
                                        <img src="Content/images/produit/<?php echo $Lien ; ?>" style= "max-height:200px ;max-width: 400px;"  class="img-responsive"/>
                                    </a>
                                    <div class="caption">
                                        <ul class="product-flags">
                                            <li class="product-flag new"><?php echo $x;?> jours restants</li>
                                        </ul>
                                        <h3><?php echo$unResultat['Nom']; ?></h3>
                                        <p><?php echo $unResultat['Description']; ?></p>
                                        <p>Quantitée <?php echo$unResultat['Quantite']; ?></p>
                                        <input type="text" name="quantity" value= "1"class="form-control-min"  />
                                        <h4><?php echo$unResultat['Prix'];?>€</h4>

                                        <input type="hidden" name="hidden_name" value="<?php echo $unResultat["Nom"]; ?>" />

                                        <input type="hidden" name="hidden_price" value="<?php echo $unResultat["Prix"]; ?>" />

                                        <!--
                                        <p><a href="index.php?page=12" class="btn btn-primary" role="button" name="ajouter">
                                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Ajouter</a></p></span>

                                         -->
                                        <button OnClick="window.location.href='index.php'" type="submit" name="add_to_cart"  class="btn btn-primary glyphicon glyphicon-shopping-cart " value="Add to Cart">
                                            <b> Ajouter</b>
                                        </button>
                                        <!--
                                        <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                        -->
                                    </div>
                                </form>

                            </div>
                        </div>
                    <?php }

                    ?>

                    <nav class="text-center">
                <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
                <ul class="pagination">
                    <li><a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li class="disabled"><a href="#">5</a></li>
                    <li><a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a></li>
                </ul>
            </nav>
        </div>

        <hr>
        <h2 class="text-center">Dans le même catégorie</h2>
        <hr>
        <div class="container">
            <div class="row"> <?php
                $resultats=$unC->selectAllWhere($type);
                foreach ($resultats as $unResultat) {
                $Lien=$unResultat['Lien'];

                ?>
                <div class="row text-center">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                        <div class="thumbnail">


                            <form method="post" action="index.php?action=add&id=<?php echo $unResultat["IdProduit"]; ?>">
                                <a href=index.php?page=12&lien="<?php echo $Lien;  ?>" >
                                    <img src="Content/images/produit/<?php echo $Lien ; ?>" style= "max-height:200px ;max-width: 400px;"  class="img-responsive"/>
                                </a>
                                <div class="caption">
                                    <ul class="product-flags">
                                        <li class="product-flag new"><?php echo $x;?> jours restants</li>
                                    </ul>
                                    <h3><?php echo$unResultat['Nom']; ?></h3>
                                    <p><?php echo $unResultat['Description']; ?></p>
                                    <p>Quantitée <?php echo$unResultat['Quantite']; ?></p>
                                    <input type="text" name="quantity" value= "1"class="form-control-min"  />
                                    <h4><?php echo$unResultat['Prix'];?>€</h4>

                                    <input type="hidden" name="hidden_name" value="<?php echo $unResultat["Nom"]; ?>" />

                                    <input type="hidden" name="hidden_price" value="<?php echo $unResultat["Prix"]; ?>" />

                                    <!--
                                    <p><a href="index.php?page=12" class="btn btn-primary" role="button" name="ajouter">
                                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Ajouter</a></p></span>

                                     -->
                                    <button OnClick="window.location.href='index.php'" type="submit" name="add_to_cart"  class="btn btn-primary glyphicon glyphicon-shopping-cart " value="Add to Cart">
                                        <b> Ajouter</b>
                                    </button>
                                    <!--
                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                                    -->
                                </div>
                            </form>

                        </div>
                    </div>
                    <?php }

                    ?>











                    </div>
                </div>
            </div>
        </div>
</section>
