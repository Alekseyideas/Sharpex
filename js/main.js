'use strict';

$('.page-catalog').find('#slider').remove();
var cat_menu = $('.page-catalog #wrapper-categories').html();
$('.page-category #wrapper-categories').remove();

$('#cat-menu-popular .most-popular').before('' + cat_menu);

$('.categories').find('li').each(function () {
    $(this).find('ul').length ? $(this).addClass('has-submenu') : false;
});
$('#top-slides').owlCarousel({
    items: 1
});

var slideIds = '#all-carousel,' + '#sharpeners-carousel,' + '#sharpening-carousel,' + '#polishing-carousel,' + '#accessories-carousel';

$('#image-carousel').owlCarousel({
    loop: true,

    margin: 25,
    items: 4,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive: {
        992: {
            nav: true
        }
    }
});

$(slideIds).owlCarousel({
    loop: true,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 1
        },
        600: {
            items: 2
        },
        992: {
            items: 3
        },
        1070: {
            nav: false
        },
        1200: {
            items: 4,
            nav: true,
            margin: 20
        }
    }
});
var tab = $('.tab');

var active_tab = $('.tab.active').data('tab');

$('#' + active_tab).show();

tab.bind('click', function () {
    var this_tab = $(this).data('tab');
    tab.removeClass('active');
    $('.tab-content').hide();
    $(this).addClass('active');
    $('#' + this_tab).show();
});

$('.wr-product .link-info-product').mouseover(function () {
    $(this).parent('.wr-product').find('.add-to-favorite').css('color', 'white');
});
$('.wr-product .link-info-product').mouseout(function () {
    $('.add-to-favorite').css('color', '#9d9d9d');
});

$('#form-subscription,#contact-form').validator();

$('.not-main .bottom-head').find('.col-xs-12').removeClass('col-xs-12').addClass('col-xs-3 col-md-9 pull-right');

var cat = $('.not-main #wrapper-categories');

cat.addClass('col-xs-9');
$('.not-main #slider').remove();

cat.find('.cat-head').bind('click', function () {
    $('.categories').show();
});

function centerImage() {
    var prImage = $('#image-carousel').find('img').width();
    var pop_prImage = $('.wr-most-pop-product .pr-image').find('img').width();

    $('.cont-news').each(function () {
        var img_width = $(this).find('img').width();
        $(this).find('img').css('margin-left', -img_width / 2 + 'px');
    });

    console.log(pop_prImage);
    $('#image-carousel .item img').css('margin-left', -prImage / 2 + 'px');
    $('.wr-most-pop-product .pr-image img').css('margin-left', -pop_prImage / 2 + 'px');
}
centerImage();
$(window).resize(function () {
    centerImage();
});

$('#image-carousel .item ').bind('click', function () {

    var link = $(this).find('img').attr('src');
    var title = $(this).find('img').attr('alt');
    var video_link = $(this).find('img').data('link');
    if ($(this).find('img').data('type') === 'video') {}

    $(this).find('img').data('type') !== 'video' ? $('.main-image').html('<img src="' + link + '" alt="' + title + '">') : $('.main-image').html('<iframe width="100%" height="287" src="' + video_link + '" frameborder="0" allowfullscreen></iframe>');
});

var label = $('.properties label');

var pr_count = $('#product-count').val();

$('.plus').bind('click', function () {
    pr_count++;
    $('#product-count').val(pr_count);
});
$('.min').bind('click', function () {
    pr_count > 1 ? pr_count-- : false;
    $('#product-count').val(pr_count);
});

label.bind('click', function () {
    label.removeClass('active');
    $(this).addClass('active');
});

$('#go-to-reviews').click(function () {
    $.scrollTo('#reviews', 500);
});

$(document).mouseup(function (e) {
    var container = $('.not-main .cat-head,.block-select');
    if (container.has(e.target).length === 0) {
        $('.not-main .categories,.wr-selects').hide();
    }
});
$('.wr-selects li').bind('click', function () {
    var select = $('.block-select');
    var text = $(this).find('span').text();
    var sort = $(this).attr('data-sort');
    var default_text = select.find('.text-select').text();
    var default_value = select.attr('data-sort');

    $(this).find('span').text(default_text).attr('data-sort', default_value);
    $(this).attr('data-sort', default_value);

    $('.text-select').text(text);
    select.attr('data-sort', sort);
    $('#sort-val').val(sort);

    $('.wr-selects').hide();
});

$('.block-select').click(function () {
    $('.wr-selects').show();
});

/*Delete this links*/
$('.categories>li> a').attr('href', 'catalog.php');
$('.nav-item:nth-child(3) a').attr('href', 'about-company.php');
$('.nav-item:nth-child(5) a').attr('href', 'delivery.php');
$('.nav-item:nth-child(9) a').attr('href', 'news.php');
$('.nav-item:nth-child(11) a').attr('href', 'contacts.php');
$('.link-info-product,.categories .has-submenu ul li a,#top-slides .learn-more').attr('href', 'product.php');