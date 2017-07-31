
$('.categories').find('li').each(function () {
    $(this).find('ul').length ? $(this).addClass('has-submenu') : false;
});
$('#top-slides').owlCarousel({
    items: 1
});
$('#all-carousel').owlCarousel({
    items: 4,
    loop: true,
    nav: true,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
});

let tab = $('.tab');

let active_tab = $('.tab.active').data('tab');

$(`#${active_tab}`).show();

tab.bind('click',function () {
    const this_tab =   $(this).data('tab');
    tab.removeClass('active');
    $('.tab-content').hide();
    $(this).addClass('active');
    $(`#${this_tab}`).show();

});

$('.wr-product .link-info-product').mouseover(function () {
   $('.add-to-favorite').css('color','white');
});
$('.wr-product .link-info-product').mouseout(function () {
    $('.add-to-favorite').css('color','#9d9d9d');
});

/*
function lineHeight() {
    $('.wr-price-buy .price').css({
        'line-height': $('.wr-price-buy').height() + 'px'
    });
}

lineHeight();

$(window).resize(function () {
    lineHeight();
});*/
