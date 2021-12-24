var $=jQuery;
    $(document).ready(function(){
    $('.one-time').slick({
        arrows: false,
        rtl: true,
        slidesToShow: 1,
        slidesToScroll: 1,
//				dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });

    $('.last-products-slider').slick({
    arrows: true,
    rtl: true,
    slidesToShow: 4,
    slidesToScroll: 1,
//				dots: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
{
    breakpoint: 992,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false
}
},
{
    breakpoint: 576,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 2
}
},
{
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
}
}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
});

    $('.last-blog-slider').slick({
    arrows: false,
    rtl: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 3000,
});
});
