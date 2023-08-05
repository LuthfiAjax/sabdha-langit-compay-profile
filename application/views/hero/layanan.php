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
        }

        .carousel-caption h2 {
            font-size: 2rem !important;
        }

        .carousel-caption .form-inline {
            display: block !important;
            margin: 0 auto !important;
            width: 100% !important;
            max-width: 500px !important;
        }

        .carousel-caption .input-group {
            width: 100% !important;
        }

        .carousel-caption .form-control {
            width: 100% !important;
            border-radius: 30px !important;
        }
    }
</style>

<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/images/blog_bg.jpg'); ?>" alt="Article Image">
            <div class="carousel-caption">
                <h2 class="h2 text-uppercase">Layanan Kami</h2>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="mb-1 text-uppercase fw-bold">Sabdha Langit Indonesia<span class="text-danger"> EVENT ORGANIZER</span></h1>
            <p class="text-justify">
                Sabdha Langit Indonesia Event Organizer adalah mitra terpercaya Anda dalam menciptakan pengalaman acara yang tak terlupakan. Dengan sentuhan kreatif dan perencanaan yang teliti, kami menghadirkan berbagai acara mulai dari pernikahan elegan, acara korporat yang profesional, hingga pesta tematik yang meriah. Setiap detail diperhatikan dengan cermat untuk memberikan pengalaman yang sempurna bagi tamu dan klien kami.
            </p>
            <a class="btn btn-danger mt-3" href="<?= base_url('layanan/event-organizer'); ?>">Lihat Selangkapnya</a>
        </div>
        <div class="col-lg-6">
            <img src="<?= base_url('assets/images/layanan/event-organizer.jpg'); ?>" class="img-fluid" alt="Layanan Sabdha Langit Indonesia">
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= base_url('assets/images/layanan/multimedia-single.jpg'); ?>" class="img-fluid" alt="Layanan Sabdha Langit Indonesia">
        </div>
        <div class="col-lg-6">
            <h1 class="mb-1 text-uppercase fw-bold">Sabdha Langit Indonesia<span class="text-danger"> MULTIMEDIA</span></h1>
            <p class="text-justify">
                Sabdha Langit Indonesia Multimedia adalah pilihan utama dalam layanan produksi multimedia yang inovatif dan berkualitas. Dari produksi video yang menginspirasi hingga pengembangan konten digital yang menarik, kami menggabungkan kreativitas dengan teknologi mutakhir untuk memberikan pesan Anda dengan dampak maksimal. Tim profesional kami siap membantu Anda menghadirkan cerita melalui berbagai media.
            </p>
            <a class="btn btn-danger mt-3" href="<?= base_url('layanan/multimedia'); ?>">Lihat Selangkapnya</a>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="mb-1 text-uppercase fw-bold">Sabdha Langit Indonesia<span class="text-danger"> PROPERTY EVENT</span></h1>
            <p class="text-justify">
                Sabdha Langit Indonesia Property Event adalah partner ideal Anda dalam mengatur acara terkait properti yang mengesankan dan informatif. Dengan pemahaman mendalam tentang industri properti, kami menghasilkan pameran, peluncuran proyek, dan acara promosi yang efektif. Setiap acara dirancang untuk memamerkan keunggulan properti dan menciptakan peluang pertemuan yang berharga bagi para profesional dan calon pembeli.
            </p>
            <a class="btn btn-danger mt-3" href="<?= base_url('layanan/property-event'); ?>">Lihat Selangkapnya</a>
        </div>
        <div class="col-lg-6">
            <img src="<?= base_url('assets/images/layanan/property-event.jpg'); ?>" class="img-fluid" alt="Layanan Sabdha Langit Indonesia">
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="<?= base_url('assets/images/layanan/photography.jpg'); ?>" class="img-fluid" alt="Layanan Sabdha Langit Indonesia">
        </div>
        <div class="col-lg-6">
            <h1 class="mb-1 text-uppercase fw-bold">Sabdha Langit Indonesia<span class="text-danger"> PHOTOGRAPHY</span></h1>
            <p class="text-justify">
                Sabdha Langit Indonesia Photography adalah ahli dalam menangkap momen berharga dan mengabadikan keindahan melalui lensa kamera. Dari potret pribadi yang mendalam hingga pemotretan komersial yang menarik, kami memiliki keahlian untuk memvisualisasikan cerita melalui gambar. Fotografer berbakat kami menghadirkan hasil karya yang mengesankan, tak hanya sebagai gambar, tetapi juga sebagai kisah yang dapat diceritakan.
            </p>
            <a class="btn btn-danger mt-3" href="<?= base_url('layanan/photography'); ?>">Lihat Selangkapnya</a>
        </div>
    </div>
</div>