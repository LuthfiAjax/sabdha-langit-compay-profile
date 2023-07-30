<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <style>
        #carosel {
            object-fit: cover;
            height: 110%;
            width: 100%;
        }
        </style>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="carosel" class="first-slide" src="<?= base_url('assets/'); ?>images/banner1.jpg"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img id="carosel" class="second-slide" src="<?= base_url('assets/'); ?>images/banner2.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img id="carosel" class="third-slide" src="<?= base_url('assets/'); ?>images/banner3.jpg"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="booking_ocline">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="book_room">
                        <h1>Ajukan Pertanyaan</h1>
                        <form class="book_now">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="online_book" type="text" name="name" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-12">
                                    <input class="online_book" type="tel" name="phone" placeholder="Nomor Handphone">
                                </div>
                                <div class="col-md-12">
                                    <input class="online_book" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-md-12">
                                    <select class="online_book" name="purpose">
                                        <option selected disabled>Layanan</option>
                                        <option class="text-dark" value="Vacation">Event Organizer</option>
                                        <option class="text-dark" value="Business Trip">Sewa Panggung</option>
                                        <option class="text-dark" value="Wedding">Foto prewedding</option>
                                        <option class="text-dark" value="Other">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="book_btn">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="titlepage">
                    <h2>Tentang Kami</h2>
                    <p class="text-justify">CV. Sabdha Langit Indonesia merupakan unit usaha yang dilahirkan dari Yayasan Bakti Indonesia. Berawal dari sebuah keinginan untuk membawa anak-anak muda, baik para warga belajar pendidikan non formal, maupun masyarakat di sekitar Yayasan, untuk dapat memiliki keahlian, keterampilan, serta produktivitas sehingga mampu mengurangi angka pengangguran yang berdampak pada pengembangan Yayasan menuju kemandirian tanpa tergantung dari bantuan pemerintah maupun swasta.</p>
                    <a class="btn btn-danger rounded" href="<?= base_url('tentang-kami'); ?>"> Tentang Kami</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="<?= base_url('assets/'); ?>images/about.jpg" alt="Tentang Sabdha Langit" /></figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our_room">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Layanan Kami</h2>
                    <p>Kami menyediakan beberapa layanan dan penyewaan untuk keperluan event anda</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/layanan/eo.jpg" alt="Layanan Sabdha Langit Indonesia" /></figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/layanan/multimedia.jpg" alt="Layanan Sabdha Langit Indonesia" /></figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/layanan/property.jpg" alt="Layanan Sabdha Langit Indonesia" /></figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/layanan/photografi.jpg" alt="Layanan Sabdha Langit Indonesia" /></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <a class="btn btn-danger rounded" href="<?= base_url('layanan'); ?>">Lihat Layanan</a>
            </div>
        </div>
    </div>
</div>

<div class="our_room bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>PENGHARGAAN</h2>
                    <p>Beberapa Penghargaan yang kami dapatkan</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room bg-light">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/penghargaan/metrotv.jpg" alt="penghargaan sabdha langit" /></figure>
                    </div>
                    <div class="bed_room">
                        <p>Narasumber  Kick Andy Metro TV </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room bg-light">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/penghargaan/ngarit.jpg" alt="penghargaan sabdha langit" /></figure>
                    </div>
                    <div class="bed_room">
                        <p>Video Terbaik MPR RI Fraksi PPP</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room bg-light">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/penghargaan/trisakti.jpg" alt="penghargaan sabdha langit" /></figure>
                    </div>
                    <div class="bed_room">
                        <p>Trisakti Tourism Award Terfavorit 2021</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room bg-light">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/penghargaan/berserahdiri.jpg" alt="penghargaan sabdha langit" /></figure>
                    </div>
                    <div class="bed_room">
                        <p>Video Terbaik DJ Vlog Competition 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room bg-light">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/penghargaan/pdip.jpg" alt="penghargaan sabdha langit" /></figure>
                    </div>
                    <div class="bed_room">
                        <p>Video Terbaik DPP PDI Perjuangan </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="<?= base_url('assets/'); ?>images/visimisi.jpg" alt="#" /></figure>
                </div>
            </div>
            <div class="col-md-5">
                <div class="titlepage">
                    <h2 class="fs-3 fw-bold mb-1">Visi</h2>
                    <p class="text-justify">Terwujudnya perusahaan pelayanan jasa di bidang industri kreatif yang inovatif, kreatif dan terpercaya.</p>
                </div>
                <div class="titlepage">
                    <h2 class="fs-3 fw-bold mb-1">Misi</h2>
                    <ul class="list-unstyled">
                        <li class="mb-2 text-justify">
                            <span class="fw-bold"><i class="fas fa-stop mx-2"></i>Memberikan layanan terbaik kepada customer adalah prioritas utama</span>
                        </li>
                        <li class="mb-2 text-justify">
                            <span class="fw-bold"><i class="fas fa-stop mx-2"></i>Memberikan potensi sumber daya manusia yang terampil, kreatif dan inovatif</span>
                        </li>
                        <li class="mb-2 text-justify">
                            <span class="fw-bold"><i class="fas fa-stop mx-2"></i>Memberikan fasilitas terbaik untuk semua layanan</span>
                        </li>
                        <li class="mb-2 text-justify">
                            <span class="fw-bold"><i class="fas fa-stop mx-2"></i>Menjaga Tanggung Jawab dan Keharmonisan dalam Tim</span>
                        </li>
                        <li class="mb-2 text-justify">
                            <span class="fw-bold"><i class="fas fa-stop mx-2"></i>Mewujudkan perusahaan yang dikenal khalayak luas dengan tagline <b>Everywhere</b></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our_room bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Sabdha Langit TIM</h2>
                    <p>Sabdha Langit TIM: Tim kreatif berbakat, inspiratif, dan inovatif di seni dan desain. Kolaborasi luar biasa, hasil tak terlupakan.</p>
                </div>
            </div>
        </div>
        <div class="slick_single_page">
            <div class="slick_slider">
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>images/team/1.jpeg" alt="Sabdha Langit Indonesia TIM" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>images/team/2.jpeg" alt="Sabdha Langit Indonesia TIM" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
                <div class="slick_item mx-1">
                    <img src="<?= base_url('assets/'); ?>images/team/3.jpeg" alt="Sabdha Langit Indonesia TIM" style="width: 500px; height: 350px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
