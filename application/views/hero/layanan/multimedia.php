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
                <h2 class="h2 text-uppercase">MULTIMEDIA</h2>
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
                        <p class="text-justify my-3">Sabdha Langit Indonesia Multimedia adalah pilihan utama dalam menyediakan solusi multimedia yang beragam. Layanan kami mencakup rental LED/Videotron untuk berbagai keperluan visual, seperti acara perusahaan, pameran, dan promosi produk. Dengan teknologi canggih, kami menghadirkan tampilan visual yang menarik dan impresif, memberikan kesan yang tak terlupakan bagi audiens. Kami juga ahli dalam videoshooting untuk mengabadikan momen-momen berharga dalam kualitas tinggi. Tim kreatif dan berpengalaman kami mampu menggambarkan narasi yang kuat melalui video, menciptakan cerita yang menggerakkan hati.</p>
                        <p class="text-justify my-3">Dalam foto dan video dokumentasi, kami mengambil tanggung jawab untuk menangkap setiap momen dengan detail dan estetika yang sempurna. Produksi film pendek dan video sekolah menjadi bagian penting dari portofolio kami, menyajikan pesan-pesan yang berdampak dalam format visual yang menarik. Animasi menjadi salah satu kekuatan kami, dengan keahlian dalam menciptakan visualisasi yang dinamis dan menghibur, memudahkan pengertian konsep-konsep yang kompleks. Kami juga menawarkan layanan rental TV dan editing video yang profesional, memastikan bahwa setiap proyek multimedia kami mencapai standar tertinggi dan memenuhi harapan klien.</p>
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
                    <p>Dokumentasi Kegiatan MULTIMEDIA</p>
                </div>
            </div>
        </div>
        <div class="slick_single_page">
            <div class="slick_slider">
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/media/media1.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/media/media2.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/media/media3.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/media/media4.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/media/media5.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/media/media6.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>