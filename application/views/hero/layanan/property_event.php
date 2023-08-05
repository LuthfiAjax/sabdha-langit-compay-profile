<style>
    .carousel-inner .carousel-item img {
        height: 300px;
        width: 100%;
        object-fit: cover;
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .carousel-caption h2 {
        color: #fff;
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }

    @media (max-width: 767px) {
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 80% !important;
            height: 20%  !important;
        }

        .carousel-caption h2 {
            font-size: 1rem !important;
        }
    }
</style>

<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/images/blog_bg.jpg'); ?>" alt="Article Image">
            <div class="carousel-caption">
                <h1 class="h2 text-uppercase">Sabdha Langit Indonesia</h1>
                <h2 class="h2 text-uppercase">PROPERTY EVENT</h2>
            </div>
        </div>
    </div>
</div>

<div class="single_blog" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <article>
                        <p class="text-justify my-3">Sabdha Langit Indonesia Property Event adalah mitra terpercaya dalam mengatur acara berkaitan dengan properti. Kami menyediakan beragam alat dan dekorasi untuk meningkatkan kesan acara dan menampilkan properti dengan cara yang menarik. Alat seperti Misticool dan Kipas Blower menjaga kenyamanan tamu di berbagai tempat acara, memberikan pengalaman yang menyenangkan saat menjelajahi properti. Kami juga menyediakan peralatan dekorasi seperti Barier, Kain Plafon, dan Dekorasi yang dapat disesuaikan dengan tema acara dan karakter properti yang dipromosikan.</p>
                        <p class="text-justify my-3">Podium dan panggung yang kami sediakan tidak hanya berfungsi sebagai tempat berbicara atau performa, tetapi juga memperkuat kesan profesionalisme dan elegansi. Kursi lipat yang kami tawarkan memberikan fleksibilitas dalam mengatur ruang untuk para tamu, sementara meja sirine memberikan elemen fungsional yang penting dalam acara properti. Dengan pengalaman dalam mengatur acara promosi properti yang sukses, kami menghadirkan solusi yang efektif dan menarik bagi pengembang dan pemilik properti untuk menampilkan aset mereka dengan cara yang mengesankan.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our_room bg-white" style="padding:0 0 0 0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Gallery</h2>
                    <p>Dokumentasi Kegiatan PROPERTY EVENT</p>
                </div>
            </div>
        </div>
        <div class="slick_single_page">
            <div class="slick_slider">
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/property/property1.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/property/property2.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/property/property3.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/property/property4.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/property/property5.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/property/property6.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>