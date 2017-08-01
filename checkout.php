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

<section class="checkout step-2 indention">
    <div class="container indention">
        <div class="row">
            <form action="">
                <div class="col-md-6">
                    <div class="cart-registration">
                        <span>Already registered?</span> <a href="#">Click to login</a>

                    </div>

                        <div class="wr-c-contact-info wr-c-info">
                            <h2><span>Contact details</span></h2>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="First Name, Last Name" required>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" data-minlength="8" id="inputPhone" placeholder="Phone number" required>

                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="wr-c-delivery-info wr-c-info">
                            <h2><span>Delivery</span></h2>
                            <img src="img/n-p.png" alt="n-p">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputCity" placeholder="City" required>
                                <div class="help-block">For example, Kiev</div>
                            </div>




                            <div class="form-group">
                                <input type="text" class="form-control" id="inputDepartment" placeholder="Department" required>
                                <div class="help-block"><a href="#">View on map</a></div>
                            </div>

                            <div class="form-group indention-m">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="terms">
                                        Address courier delivery
                                    </label>
                                </div>
                            </div>

                            <div class="alert-massage">
                                <span>The cost is calculated by the courier service</span>
                            </div>

                        </div>

                        <div class="wr-c-payment-info wr-c-info">
                            <h2><span>Payment</span></h2>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="pay" required>
                                        Cash
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="pay" required>
                                        Privat24
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="pay" required>
                                        Terminal payment
                                    </label>
                                </div>

                            </div>
                        </div>



                        <div class="form-group call-back indention-m">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="manager-call">
                                    I do not need a manager call
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                           <div id="add-comment"> <a href="#">Add a comment</a></div>
                            <textarea name="" id="checkout-comment" cols="30" rows="10" placeholder="Your comment"></textarea>
                        </div>

                </div>
                <div class="col-md-6">
                    <div class="block-your-order">
                        <h4>Ordered goods:</h4>
                        <table class="full-width right-ordered" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td class="c-pr-order">1</td>
                                <td class="c-pr-img">
                                    <img src="img/product-1.jpg" alt="pr">
                                </td>
                                <td class="c-pr-name">
                                    <a href="#">Knife sharpener HAPSTONE V6</a>
                                </td>
                                <td class="c-pr-count">2x</td>
                                <td class="c-pr-total-price">4 142 UAH</td>
                            </tr>
                            <tr>
                                <td class="c-pr-order">2</td>
                                <td class="c-pr-img">
                                    <img src="img/product-1.jpg" alt="pr">
                                </td>
                                <td class="c-pr-name">
                                    <a href="#">Knife sharpener HAPSTONE V6</a>
                                </td>
                                <td class="c-pr-count">2x</td>
                                <td class="c-pr-total-price">4 142 UAH</td>
                            </tr>
                            <tr>
                                <td class="c-pr-order">3</td>
                                <td class="c-pr-img">
                                    <img src="img/product-1.jpg" alt="pr">
                                </td>
                                <td class="c-pr-name">
                                    <a href="#">Knife sharpener HAPSTONE V6</a>
                                </td>
                                <td class="c-pr-count">2x</td>
                                <td class="c-pr-total-price">4 142 UAH</td>
                            </tr>
                            <tr>
                                <td class="c-pr-order">4</td>
                                <td class="c-pr-img">
                                    <img src="img/product-1.jpg" alt="pr">
                                </td>
                                <td class="c-pr-name">
                                    <a href="#">Knife sharpener HAPSTONE V6</a>
                                </td>
                                <td class="c-pr-count">2x</td>
                                <td class="c-pr-total-price">4 142 UAH</td>
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

                    </div>
                    <div class="clearfix"></div>
                    <div class="btn-checkout pull-right">
                        <a href="" class="bnt btn-lg">checkout</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>

<?php include (dirname(__FILE__).'/parts/footer.php'); ?>