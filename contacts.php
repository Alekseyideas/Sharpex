<?php include (dirname(__FILE__).'/parts/header.php'); ?>
<section class="crumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="flex-row flex-a-bottom flex-j-between">
                    <h1 class="position">Our Contacts</h1>
                    <div class="pull-right hidden-xs link-crumbs">
                        <a href="/">main</a>
                        <a href="#">Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-contacts indention">
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="cont-info">
                <div class="flex-row flex-a-center">
                    <img src="img/pin.svg" alt="pin"> <p>40035, Ukraine, Sumy, ul. D. Korotchenka, 10</p>
                </div>
                <br>
                <div class="flex-row flex-a-top">
                    <img src="img/phone.svg" alt="phone">
                    <div>
                        <a href="#">+38 050 102 8999</a><br>
                        <a href="#">+38 097 002 8999</a><br>
                        <a href="#">+38 063 602 8999</a>
                    </div>
                </div>
                <br>
                <div class="flex-row flex-a-center">
                    <img src="img/Email.svg" alt="Email">
                    <div>
                        <a href="#">info@hapstone.pro</a>
                    </div>
                </div>
                <p class="time-work">
                    рафик роботи колл-центру <br>
                    <span> з 8:00 до 21:00</span><br>
                    В суботу: з 9:00 до 20:00<br>
                    У неділю: з 9:00 до 19:00<br>
                </p>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2515.814792390302!2d34.81235831574797!3d50.908642979541206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4129021f1d518505%3A0x5797360755d400b4!2z0LLRg9C70LjRhtGPINCG0LLQsNC90LAg0KHRltGA0LrQsCwgMTAsINCh0YPQvNC4LCDQodGD0LzRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1501523361695" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>

        <div class="row indention">
            <div class="col-md-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores blanditiis commodi consequuntur dignissimos eligendi fugit labore maiores neque nisi, numquam optio quidem, sequi ullam voluptate!</p>
            </div>
        </div>
        <div class="row">
            <form action="" id="contact-form" data-toggle="validator" role="form">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="email" class="form-control" id="c-user-email" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="c-user-name" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <textarea name="" id="c-user-massage" cols="30" rows="10" placeholder="Massage" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-send-c-form">Send</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

</section>
    <div class="clearfix"></div>
<?php include (dirname(__FILE__).'/parts/footer.php'); ?>