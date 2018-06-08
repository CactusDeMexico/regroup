<?php


if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
        echo '<script>window.location="index.php?page=1"</script>';
    }
    else
    {
        $item_array = array(
            'item_id'			=>	$_GET["id"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }
}

?>







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
                        <div class="item"><img class="img-responsive" src="Content/images/Banniere.jpg" alt="thumb">
                            <div class="carousel-caption"> Nouveau Produit. Mobilier.Informatique Parfums Sac Bijoux
                            </div>
                        </div>
                        <div class="item active"><img class="img-responsive" src="Content/images/Banniere2.jpg"
                                                      alt="thumb">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item"><img class="img-responsive" src="Content/images/Banniere3.jpg" alt="thumb">
                            <div class="carousel-caption">
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
    <h2 class="text-center">RECOMMENDED PRODUCTS</h2>
    <hr>
    <!--PRODUIT-->
    <div class="container">
        <div class="row text-center">


<?php
foreach ($resultats as $unResultat) {
    $Lien=$unResultat['Lien'];


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



    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail">


            <form method="post" action="index.php?action=add&id=<?php echo $unResultat["IdProduit"]; ?>">

                <a href=index.php?page=12&lien=<?php echo $unResultat["IdProduit"]; ?> >

                    <img src="Content/images/produit/<?php echo $Lien ; ?>" style= "max-height:200px ;max-width: 400px;"  class="img-responsive"/>

                </a>
                <div class="caption">
                    <ul class="product-flags">
                        <li class="product-flag new"><?php echo $x;?> jours restants</li>
                    </ul>
                    <h3><?php echo$unResultat['Nom']; ?></h3>
                    <p><?php echo$unResultat['Description']; ?></p>
                    <p>Quantitée <?php echo$unResultat['Quantite']; ?></p>
                    <input type="text" name="quantity" value= "1"class="form-control-min"  />
                    <h4><?php echo$unResultat['Prix'];?>€</h4>

                    <input type="hidden" name="hidden_name" value="<?php echo $unResultat["Nom"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $unResultat["Prix"]; ?>" />

                    <!--
                    <p><a href="index.php?page=12" class="btn btn-primary" role="button" name="ajouter">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">Ajouter</a></p></span>

                     -->
                    <button  type="submit" name="add_to_cart"  class="btn btn-primary glyphicon glyphicon-shopping-cart " value="Add to Cart">
                       <b> Ajouter</b>
                    </button>
                    <!--
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                    -->
                </div>
            </form>

        </div>
    </div>
<?php }?>






            <!-- __________________EXEMPLE PRODUIT_______________________________
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
        <div class="thumbnail"> <img src="Content/images/400X200.gif" alt="Thumbnail Image 1"
                                                            class="img-responsive">
            <div class="caption">
                <ul class="product-flags">
                    <li class="product-flag new">Nouveau</li>
                </ul>
                <h3>Product</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <h4>prix</h4>

                <p><a href="#" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a></p>
            </div>
        </div>
    </div>
    -->


<!--
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
                <div class="thumbnail"><img src="Content/images/400X200.gif" alt="Thumbnail Image 1"
                                            class="img-responsive">
                    <div class="caption">
                        <h3>Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <p><a href="#" class="btn btn-primary" role="button"><span
                                        class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
                <div class="thumbnail"><img src="Content/images/400X200.gif" alt="Thumbnail Image 1"
                                            class="img-responsive">
                    <div class="caption">
                        <h3>Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <p><a href="#" class="btn btn-primary" role="button"><span
                                        class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center hidden-xs">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail"><img src="Content/images/400X200.gif" alt="Thumbnail Image 1"
                                            class="img-responsive">
                    <div class="caption">
                        <h3>Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <p><a href="#" class="btn btn-primary" role="button"><span
                                        class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail"><img src="Content/images/400X200.gif" alt="Thumbnail Image 1"
                                            class="img-responsive">
                    <div class="caption">
                        <h3>Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <p><a href="#" class="btn btn-primary" role="button"><span
                                        class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="thumbnail"><img src="Content/images/400X200.gif" alt="Thumbnail Image 1"
                                            class="img-responsive">
                    <div class="caption">
                        <h3>Product</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <p><a href="#" class="btn btn-primary" role="button"><span
                                        class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
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

            <div style="clear:both"></div>
            <br />
            <h3>Order Details</h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th width="40%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                        {
                            ?>
                            <tr>
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>€ <?php echo $values["item_price"]; ?></td>
                                <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                                <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                            </tr>
                            <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <td align="right">€ <?php echo number_format($total, 2); ?></td>
                            <td></td>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>


    </div>

        </div>
    </div>
</section>
