<?php include (dirname(__FILE__).'/parts/header.php'); ?>
<section class="crumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="flex-row flex-a-bottom flex-j-between">
                    <h1 class="position">News</h1>
                    <div class="pull-right hidden-xs link-crumbs">
                        <a href="/">main</a>
                        <a href="#">News</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="wr-news indention">
    <div class="container">
        <div class="row">
            <?php
            $i = 0;
            while ($i<12){$i++;?>
                <div class="col-md-4 col-sm-6 cont-news">
                    <a href="#" class="link-news">
                        <div class="news-image">
                            <div class="hover-effect">
                                <span>Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                            </div>
                            <img src="img/news-<?php echo rand(1,6)?>.jpg" alt="news">
                        </div>

                        <div class="title">
                            <span>News name</span>
                        </div>

                        <div class="published">
                            <span>published: </span>
                            26.04.2016
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>
        <div class="row text-center">
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
</section>


<?php include (dirname(__FILE__).'/parts/footer.php'); ?>