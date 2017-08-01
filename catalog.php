<?php include (dirname(__FILE__).'/parts/header.php'); ?>
<section class="crumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="flex-row flex-a-bottom flex-j-between">
                    <h1 class="position">CATALOG</h1>
                    <div class="pull-right hidden-xs link-crumbs">
                        <a href="/">main</a>
                        <a href="#">SHARPENERS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cat-menu-products">
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="cat-menu-popular">
                <div class="most-popular">
                    <div class="title">
                        <h5>Most popular</h5>
                    </div>
                    <?php
                    $i = 0;
                    while ($i<4){$i++;?>
                    <a href="" class="wr-most-pop-product">
                        <div class="pr-image pull-left">
                            <img src="img/product-<?php echo $i?>.jpg" alt="pr">
                        </div>

                        <div class="pr-info pull-right">
                            <h5>Набір точильних каменів Boride</h5>
                            <div class="wr-price">
                                <span class="price">
                                    <span class="val">3850</span>
                                    <span class="currency">UAH</span>
                                </span>
                            </div>
                        </div>
                        <span class="clearfix"></span>
                    </a>
<?php }?>
                </div>
            </div>
            <div class="col-md-9">
            <div class="row">
                <div class="col-xs-12">
                    <div class="filter hidden-xs hidden-sm">
                        <div class="pull-left shown">
                            <p>SHOWN <span>1-12</span> of <span>24</span>  RESULTS</p>
                        </div>
                        <div class="pull-right sort">
                            <div class="inline">
                                Sorting:
                            </div>
                            <div class="inline">
                                <div class="block-select" data-sort="standard">
                                    <span class="text-select">standard</span>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>

                                </div>
                                <div class="wr-selects">
                                    <ul class="list-unstyled">
                                        <li data-sort="cheap"><span>From cheap to expensive</span></li>
                                        <li data-sort="expensive"><span>From expensive to cheap</span></li>
                                    </ul>
                                </div>
                                <input type="hidden" id="sort-val" value="standard">
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>



                <?php
                $i = 0;
                while ($i<12){$i++;?>
                    <div class="col-md-4 col-sm-6">
                        <div class="wr-product">
                            <!--<img src="img/shares.png" alt="shares" class="info-stock">-->
                            <a href="#" class="add-to-favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="#" class="link-info-product">
                                <div class="product-img">
                                    <div class="hover-effect">
                                        <span>Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                    </div>
                                    <img src="img/product-<?php echo rand(1, 4);?>.jpg" alt="product-1">
                                </div>
                                <div class="product-info">
                                    <p>
                                        Набор камней Arkansas + Масло Dan's Honing Oil 85 мл в подарок!
                                    </p>
                                </div>
                            </a>

                            <div class="wr-price-buy">
                                <div class="pull-left">
                                    <div class="wr-price">
                                            <span class="old-price">
                                                <span class="val">3850</span>
                                                <span class="currency">UAH</span>
                                            </span>
                                        <span class="price">
                                                <span class="val">3850</span>
                                                <span class="currency">UAH</span>
                                            </span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-lg btn-buy"> Add to card</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                <?php }?>
            </div>

             <div class="row">
                 <div class="wr-pagination indention">
                     <div class="pull-left">
                         <button class="load-more  btn btn-lg">Show more products <i class="fa fa-refresh" aria-hidden="true"></i></button>
                     </div>

                     <div class="pull-right hidden-xs hidden-sm">
                         <ul class="list-unstyled pagination">
                             <li>
                                 <a href="#" aria-label="Previous">
                                     <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                                 </a>
                             </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                             <li>
                                 <a href="#" aria-label="Next">
                                     <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                 </a>
                             </li>
                         </ul>
                     </div>

                 </div>
             </div>
            </div>
        </div>
    </div>
</section>

<?php include (dirname(__FILE__).'/parts/footer.php'); ?>
