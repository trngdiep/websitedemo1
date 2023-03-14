var mobile_banner =   new Swiper('.mobile_banner', {

    // slidesPerGroup: 4,
    observer: true,
    observeParents: true,
    // navigation: {
    //     nextEl: '.recipes_product_content_in_detail .swiper-button-next',
    //     prevEl: '.recipes_product_content_in_detail .swiper-button-prev',
    // },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    cssMode: true,

    disableOnInteraction: false,
    slidesPerView: 'auto',
    lazy: true,
    lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 4,
        loadOnTransitionStart: true,
    },

    spaceBetween: 80,
    touchMove: false,
    keyboard: {
        enabled: true,
    },
    loop: true,
    mousewheel: false,
    speed: 500,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        autoplaySpeed:   3000,
        stopOnLastSlide: true,

    },

});


$(document).ready(function(){
    $(".mobile_product_detail_in_gen").slice(0, 6).show();
    $(".mobile_product_detail_in_dienthoai").slice(0, 6).show();
    $(".mobile_product_detail_in_maytinhbang").slice(0, 6).show();
    $(".mobile_product_detail_in_dongho").slice(0, 6).show();
    $(".seeMore1").on("click", function(e){
        e.preventDefault();
        $(".mobile_product_detail_in_gen:hidden").slice(0, 3).slideDown();
        if($(".mobile_product_detail_in_gen:hidden").length == 0) {
            $(".seeMore1").hide();
        }
    });
    $(".seeMore2").on("click", function(e){
        e.preventDefault();
        $(".mobile_product_detail_in_dienthoai:hidden").slice(0, 3).slideDown();
        if($(".mobile_product_detail_in_dienthoai:hidden").length == 0) {
            $(".seeMore2").hide();
        }
    });
    $(".seeMore3").on("click", function(e){
        e.preventDefault();
        $(".mobile_product_detail_in_maytinhbang:hidden").slice(0, 3).slideDown();
        if($(".mobile_product_detail_in_maytinhbang:hidden").length == 0) {
            $(".seeMore3").hide();
        }
    });
    $(".seeMore4").on("click", function(e){
        e.preventDefault();
        $(".mobile_product_detail_in_dongho:hidden").slice(0, 3).slideDown();
        if($(".mobile_product_detail_in_dongho:hidden").length == 0) {
            $(".seeMore4").hide();
        }
    });

})