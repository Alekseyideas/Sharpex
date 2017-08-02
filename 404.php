<?php include (dirname(__FILE__).'/parts/header.php'); ?>
<section class="crumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="flex-row flex-a-bottom flex-j-between">
                    <h1 class="position">404</h1>
                    <div class="pull-right hidden-xs link-crumbs">
                        <a href="/">main</a>
                        <a href="#">404</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-404 indention">
    <div class="text-center">
        <h1>
            404
        </h1>
        <h3>
            Something went wrong
        </h3>
        <p>Page does not exist</p>
    </div>

</section>



<section class="recommended-in-product indention">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="s-title pull-left">
                    RECOMMENDED GOODS
                </div>
            </div>
            <?php
            $i = 0;
            while ($i<4){$i++;?>
                <div class="col-md-3">
                    <div class="wr-product">
                        <div class="discount">Discount</div>
                        <a href="#" class="add-to-favorite"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <a href="#" class="link-info-product">
                            <div class="product-img">
                                <div class="hover-effect">
                                    <span>Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                                </div>
                                <img src="img/product-<?php echo $i?>.jpg" alt="product-1">
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
                                    <span class="val">3150</span>
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
    </div>

</section>


<section class="reviews indention">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="s-title pull-left">
                    Articles and reviews
                </div>
            </div>
        </div>

        <div class="row reviews-blocks">

            <?php
            $i = 0;
            while ($i<4){$i++;?>
                <div class="col-md-3 col-sm-6">
                    <div class="wr-reviews">
                        <div class="product-img">
                            <img src="img/news-<?php echo $i?>.jpg" alt="">
                        </div>
                        <div class="title">
                            <h3>Правильна заточка ножів (як точити ножі)</h3>
                        </div>
                        <div class="short-info">
                            <p>Будь-яка домогосподарка, а вже тим більше кухар знає, що без добре наточеного ножа приготування перетворюється в досить обтяжлива захід. </p>
                        </div>
                        <a href="" class="link-review">Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            <?php }?>


        </div>

    </div>

</section>


<?php include (dirname(__FILE__).'/parts/footer.php'); ?>
