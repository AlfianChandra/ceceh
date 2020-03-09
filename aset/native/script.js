$(document).ready(function () {
    //elemen slider
    let slider = $(".slider");
    slider.slick({
        infinite: true, //repeat slide
        slidertoshow: 1, //jumlah slide awal yang ditampilin
        slidesToScroll: 1, //jumlah slide perscroll

        //next prev
        autoPlay: false, //geser otomatis
        autoplaySpeed: 1000 //interval waktu
    });

    //fungsi navigasi slide
    $(".nav-left").click(function () {
        slider.slick('slickPrev');
    });

    $(".nav-right").click(function () {
        slider.slick('slickNext');
    });
});