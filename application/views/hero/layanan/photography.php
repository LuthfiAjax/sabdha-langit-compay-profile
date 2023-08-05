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
                <h2 class="h2 text-uppercase">PHOTOGRAPHY</h2>
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
                        <p class="text-justify my-3">Sabdha Langit Indonesia Photography adalah penyedia jasa fotografi dan videografi yang berdedikasi dalam mengabadikan momen berharga. Dengan pengalaman dan keahlian kami, kami menawarkan berbagai layanan yang mencakup berbagai aspek kehidupan dan peristiwa penting. Dalam dunia pernikahan, kami menghadirkan keindahan dan kebahagiaan melalui foto dan video wedding yang indah, merekam setiap momen penuh emosi dan kebahagiaan pada hari istimewa. Layanan pre-wedding dan engagement kami menghasilkan gambar yang menggambarkan kisah cinta dengan gaya unik dan kreatif, memberikan kenangan yang akan selalu diingat.</p>
                        <p class="text-justify my-3">Tak hanya terbatas pada pernikahan, kami juga berpengalaman dalam dokumentasi acara keluarga seperti ngunduh mantu, memberikan dimensi yang mendalam pada setiap detil dan interaksi. Dalam momen akademik, kami menangkap kebahagiaan dan pencapaian dalam foto dan video wisuda, serta menyediakan layanan album sekolah yang kreatif dan berkesan. Setiap momen berharga dihidupkan kembali melalui karya kami, menciptakan kenangan yang langgeng dan spesial.</p>
                        <p class="text-justify my-3">Tim fotografer dan videografer kami adalah para ahli dalam seni visual, memiliki bakat untuk menangkap esensi emosi dan cerita di balik setiap gambar. Dengan peralatan dan teknologi terkini, kami menghasilkan hasil karya yang tajam dan berkualitas tinggi. Dari momen intim hingga peristiwa besar, Sabdha Langit Indonesia Photography hadir untuk menciptakan jejak yang tak terlupakan dalam sejarah hidup Anda.</p>
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
                    <p>Dokumentasi Kegiatan PHOTOGRAPHY</p>
                </div>
            </div>
        </div>
        <div class="slick_single_page">
            <div class="slick_slider">
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/foto/foto1.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/foto/foto2.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/foto/foto3.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/foto/foto4.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/foto/foto5.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>gallery/foto/foto6.jpg" alt="Gallery Sabdha Langit Indonesia" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>