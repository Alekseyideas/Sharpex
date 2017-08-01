<?php include (dirname(__FILE__).'/parts/header.php'); ?>
    <section class="crumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="flex-row flex-a-bottom flex-j-between">
                        <h1 class="position">Checkout</h1>
                        <div class="pull-right hidden-xs link-crumbs">
                            <a href="/">main</a>
                            <a href="#">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="checkout indention">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table-product" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="t-image">Product Image</td>
                                <td class="t-name">Product Name</td>
                                <td class="t-price">Price</td>
                                <td class="t-count">Quantity</td>
                                <td class="t-total">Total price</td>
                                <td class="t-delete"></td>
                            </tr>
                            <tr>
                                <td class="t-image">
                                    <img src="img/product-1.jpg" alt="product">
                                </td>
                                <td class="t-name">
                                    Knife sharpener HAPSTONE V6
                                </td>
                                <td class="t-price">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-count">
                                    <div class="input-val">
                                        <input type="number" value="1">


                                            <button class="btn-plus-min plus"><i class="fa fa-caret-up" aria-hidden="true"></i></button>
                                            <button class="btn-plus-min min"><i class="fa fa-caret-down" aria-hidden="true"></i></button>


                                    </div>

                                </td>
                                <td class="t-total">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-delete">
                                    <button class="btn"> <i class="fa fa-times" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="t-image">
                                    <img src="img/product-1.jpg" alt="product">
                                </td>
                                <td class="t-name">
                                    Knife sharpener HAPSTONE V6
                                </td>
                                <td class="t-price">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-count">
                                    <div class="input-val">
                                        <input type="number" value="1">


                                        <button class="btn-plus-min plus"><i class="fa fa-caret-up" aria-hidden="true"></i></button>
                                        <button class="btn-plus-min min"><i class="fa fa-caret-down" aria-hidden="true"></i></button>


                                    </div>

                                </td>
                                <td class="t-total">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-delete">
                                    <button class="btn"> <i class="fa fa-times" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="t-image">
                                    <img src="img/product-1.jpg" alt="product">
                                </td>
                                <td class="t-name">
                                    Knife sharpener HAPSTONE V6
                                </td>
                                <td class="t-price">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-count">
                                    <div class="input-val">
                                        <input type="number" value="1">


                                        <button class="btn-plus-min plus"><i class="fa fa-caret-up" aria-hidden="true"></i></button>
                                        <button class="btn-plus-min min"><i class="fa fa-caret-down" aria-hidden="true"></i></button>


                                    </div>

                                </td>
                                <td class="t-total">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-delete">
                                    <button class="btn"> <i class="fa fa-times" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="t-image">
                                    <img src="img/product-1.jpg" alt="product">
                                </td>
                                <td class="t-name">
                                    Knife sharpener HAPSTONE V6
                                </td>
                                <td class="t-price">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-count">
                                    <div class="input-val">
                                        <input type="number" value="1">


                                        <button class="btn-plus-min plus"><i class="fa fa-caret-up" aria-hidden="true"></i></button>
                                        <button class="btn-plus-min min"><i class="fa fa-caret-down" aria-hidden="true"></i></button>


                                    </div>

                                </td>
                                <td class="t-total">
                                    3 489 <span> UAH</span>
                                </td>
                                <td class="t-delete">
                                    <button class="btn"> <i class="fa fa-times" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="c-total-price pull-right">
                        <div class="wr-price">
                            <span class="price">
                              <span class="total-text">To pay: </span>
                                <span class="val"> 13 850</span>
                                <span class="currency"> UAH</span>
                            </span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="btn-checkout pull-right">
                        <a href="" class="bnt btn-lg">checkout</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
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


<?php include (dirname(__FILE__).'/parts/footer.php'); ?>