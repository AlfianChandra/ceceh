<!DOCTYPE HTML>
<html>
<head>
    <title>CLEANCY</title>

    <!-- Script META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chro
    me=1">

    <!-- tampilan mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- END Script Meta -->

    <!-- Wilayah CSS -->

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="aset/plugins/slick/slick.css"/>

    <!-- Slick Theme -->
    <link rel="stylesheet" href="aset/plugins/slick/slick-theme.css"/>
    <!-- FontAwesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Script Buatan/Native *harus paling bawah-->
    <link rel="stylesheet" href="aset/style.css">
    <!-- End wilayah CSS -->

    <!-- Wilayah JS -->

    <!-- JEQI- Krn slick butuh JQuery. -->
    <script src="aset/plugins/jeqi/jquery.js"></script>
    <!-- Slick JS - Sslick.min.js tu script hemat kuota. Krn file script nyo kecil -->
    <script src="aset/plugins/slick/slick.min.js"></script>

    <!-- Paling bawah ni wilayah script buatan/native *harus paling bawah-->
    <script src="aset/native/script.js"></script>
    <!-- END Wilayah JS -->
</head>

<body>
<!--navbar menu-->
<div class="navbar">
    <div class="navbar-content">
        <div class="menu">
            <span class="icon-ellipsis-horizontal" style="color: #473c33;"></span>
        </div>

        <div class="navbar-brand">
            <span style="color: #473c33;">CLEANCY</span>
        </div>

        <div class="navbar-shop">
            <span class="icon-envelope" style="padding-right: 15px; color: #473c33;"></span>
            <span class="icon-shopping-cart" style="color: #473c33;"></span>
        </div>
    </div>
</div >

<div class="content">
    <div class="search">
        <input type="text" name="search" placeholder="find your patners here">
        <!--tombol submit-->
        <button type="submit" name="search-submit" class="submit-search"><span class="icon-search"></span></button>
    </div>

    <!-- SLIDER -->
    <!-- Slider Wrapper -->
    <!-- Desc:
    slider-wrapper adalah container untuk Main Slider sama Arrow slider.
    Class ini menerapkan atribut position:relative biar Arrow Wrapper bisa floating diatas Main Slider.
    Maka dari itu, Arrow Wrapper harus menerapkan position:absolute biar bisa overlaying diatas elemen Main Slider
    -->
    <div class="slider-wrapper">

        <!-- Arrow -->
        <!-- Desc:
        Arrow Wrapper harus diluar Slider Utama. Soalnya semua elemen yg ada di dalam Slider Utama dibaca slick sebagai
        Elemen Slider.


        -->
        <div class="arrow-wrap left-arrow nav-left">
            <button type="button"><i class="icon-chevron-left"></i></button>
        </div>
        <div class="arrow-wrap right-arrow nav-right">
            <button type="button"><i class="icon-chevron-right"></i></button>
        </div>

        <!-- Main Slider -->
        <!-- Desc:
        class slider digunakan untuk Main Slider yang diinisiasi oleh Slick di file JavaScript
        Atribut Arrow dan Dots dimatikan karena kita buat Custom Arrow di Arrow Wrapper
        -->
        <div class="slider">
            <div class="slider-image-wrapper">
                <img src="aset/gambar/first.jpg" style="object-fit: cover">
            </div>
            <div class="slider-image-wrapper">
                <img src="aset/gambar/second.jpg" style="object-fit: cover">
            </div>
        </div>
    </div>

    <!-- Penjelasan -->
    <!--
    >>Class Context dikasih atribut Flex dengan posisi Column (Baris)
    +++ Jadi, berlaku untuk <h1> dan <div> didalam Context.

    >>Class Context-group pake Flex row-wrap (Kolom)
    -->

    <div class="context">
        <h1>Context Title</h1>
        <div class="context-group">
            <div class="cg-box">BOX-1</div>
            <div class="cg-box">BOX-2</div>
            <div class="cg-box">BOX-3</div>
        </div>

        <div class="context-group">
            <div class="cg-box">BOX-1</div>
            <div class="cg-box">BOX-2</div>
            <div class="cg-box">BOX-3</div>
        </div>
    </div>

    <div class="context">
        <h1>Context Title</h1>
        <div class="context-group">
            <div class="cg-box">BOX-1</div>
            <div class="cg-box">BOX-2</div>
            <div class="cg-box">BOX-3</div>
        </div>

        <div class="context-group">
            <div class="cg-box">BOX-1</div>
            <div class="cg-box">BOX-2</div>
            <div class="cg-box">BOX-3</div>
        </div>
    </div>
</div>

</body>
</html>
