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

    .carousel-caption form {
        display: inline-block;
        width: 100%;
        max-width: 500px;
        margin-top: 1rem;
    }

    .carousel-caption .input-group {
        width: 100%;
    }

    .carousel-caption .form-control {
        width: 100%;
        border-radius: 30px;
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
                <h2 class="h2 text-uppercase">Tentang Kami</h2>
            </div>
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <h1 class="mb-1 text-uppercase fw-bold">Sabdha Langit<span class="text-danger"> Indonesia</span></h1>
                <p class="mb-4 text-justify">CV. Sabdha Langit Indonesia, unit usaha berasal dari Yayasan Bakti Indonesia, fokus pada pendidikan non-formal untuk anak-anak muda dan masyarakat sekitar. Tujuan kami: memberikan keahlian, keterampilan, dan kemandirian. Spesialisasi kami: industri kreatif, terutama penyelenggaraan acara. Sukses dengan Expo Boyong Grobog (Februari 2016), kami ditugaskan mengelola Expo Pertanian Jawa Tengah yang diresmikan oleh Gubernur Jawa Tengah, Ganjar Pranowo di Purwodadi.</p>
            </div>
            <div class="col-lg-7">
                <div class="row g-3">
                    <div class="about_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/about.png" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-1">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12">
                <p class="mb-4 text-justify">
                    CV. Sabdha Langit Indonesia merupakan unit usaha yang dilahirkan dari Yayasan Bakti Indonesia. Berawal dari sebuah keinginan untuk membawa anak-anak muda, baik para warga belajar pendidikan non formal, maupun masyarakat di sekitar Yayasan, untuk dapat memiliki keahlian, keterampilan, serta produktivitas sehingga mampu mengurangi angka pengangguran yang berdampak pada pengembangan Yayasan menuju kemandirian tanpa tergantung dari bantuan pemerintah maupun swasta. Oleh karena itu, Pendiri sekaligus Ketua Yayasan Bakti Indonesia menggagas sebuah unit usaha yang bergerak di bidang industri kreatif khususnya penyelenggaraan acara. Expo Boyong Grobog pada bulan Februari 2016 menjadi event pertama kita yang diselenggarakan selama 14 hari di Lapangan Kelurahan Grobogan. Oleh karena kesuksesan acara tersebut, kami didaulat untuk menangani event Expo Pertanian Jawa Tengah yang dibuka secara langsung oleh Gubernur Jawa Tengah, Ganjar Pranowo di Purwodadi. 
                </p>
                <p class="mb-4 text-justify">
                    Melihat antusias anak-anak muda dalam penyelenggaraan acara, kami mencoba melegalformalkan diri pada 19 Mei 2017 dengan nama CV. Sabdha Langit Indonesia. Sejak itulah secara resmi kami menjadi sebuah event organizer, yang sering digunakan jasanya oleh instansi-instansi di lingkungan Pemerintah Kabupaten Grobogan. Pada perkembangannya, oleh karena kebutuhan event seperti promosi dan publikasi, kami mencoba mengembangkan sektor multimedia mulai dari videografi dan desain grafis Alhasil, karya-karya kami direspon pasar dengan sangat baik, sehingga kami membuka divisi baru di bidang multimedia, yang pada perkembangannya pun juga merambah ke sektor fotografi.
                </p>
                <p class="mb-4 text-justify">
                    Berkat konsistensi untuk terus berinovasi serta menyuguhkan karya-karya yang diminati pasar, kami seringkali didaulat untuk menangani event-event baik di tingkat kabupaten, provinsi, hingga nasional. Tahun 2022, kami mulai mengembangkan divisi baru yakni dekorasi, yang melayani penataan venue acara dan persewaan peralatan event dengan standar nasional. Ke depan, kami akan terus berinovasi, mengembangkan segala potensi yang ada dengan slogan “Sabdha Langit Everywhere” menjadi penyemangat diri untuk dapat berada dan diterima dimana-mana.
                </p>
                <p class="mb-4 text-justify">
                    Jangan lewatkan kesempatan untuk menghadirkan acara yang tak terlupakan dan mengesankan! Hubungi kami sekarang di CV. Sabdha Langit Indonesia untuk mendapatkan layanan event organizer, multimedia, property event, dan fotografi profesional yang akan menjadikan momen berharga Anda menjadi sempurna. Percayakan acara Anda kepada kami dan rasakan kepuasan serta kebebasan dalam merayakan setiap momen. Hubungi kami sekarang dan temukan bagaimana kami bisa mewujudkan visi acara Anda dengan sempurna.
                </p>
                <div class="container mt-5">
                    <div class="text-center">
                        <a href="<?= base_url('layanan'); ?>" class="btn btn-danger rounded">Lihat Layanan Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
