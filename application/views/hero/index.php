<section class="banner_main">
    <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="<?= base_url('assets/'); ?>images/banner1.jpg" alt="First slide">
                <div class="container">
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="<?= base_url('assets/'); ?>images/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="<?= base_url('assets/'); ?>images/banner3.jpg" alt="Third slide">
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
                                        <option selected disabled>Pilih Pertanyaan</option>
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
                    <p>Sabdha Langit Indonesia adalah sebuah perusahaan Event Organizer yang berbasis di Grobogan, Jawa
                        Tengah. Perusahaan ini telah berpengalaman dalam mengelola berbagai jenis acara seperti expo,
                        bazaar, konser musik, launching produk, dan banyak lagi. </p>
                    <a class="read_more" href="Javascript:void(0)"> Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about_img">
                    <figure><img src="<?= base_url('assets/'); ?>images/about.png" alt="#" /></figure>
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
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/room1.jpg" alt="#" /></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/room2.jpg" alt="#" /></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="serv_hover" class="room">
                    <div class="room_img">
                        <figure><img src="<?= base_url('assets/'); ?>images/room3.jpg" alt="#" /></figure>
                    </div>
                    <div class="bed_room">
                        <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="row">
                <a class="btn btn-primary rounded" href="">Cek Selengkapnya</a>
            </div>
        </div>

    </div>
</div>

<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Blog</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                </div>
            </div>
        </div>
        <div class="row">
            <style>
            .h5 {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
                font-size: small;
            }

            .desc {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
                overflow: hidden;
                text-align: justify;
            }
            </style>
            <?php foreach ($blogs as $row) : ?>
            <div class="col-md-4">
                <div class="blog_box">
                    <div class="blog_img">
                        <a href="<?= base_url('blog/' . $row['header_image']); ?>">
                            <figure><img
                                    src="<?= base_url('assets/images/articles/headers/' . $row['header_image']); ?>"
                                    alt="<?= $row['title_id']; ?>" /></figure>
                        </a>
                    </div>
                    <div class="blog_room">
                        <h3 class="h5 mb-2"><a
                                href="<?= base_url('blog/' . $row['slug_id']); ?>"><?= $row['title_id']; ?></a></h3>
                        <p class="desc"><?= $row['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Contact Us</h2>
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form id="request" class="main_form" method="post" action="<?= base_url('post/message'); ?>">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus" placeholder="Nama" type="text" name="nama">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Email" type="email" name="email">
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Nomor Handphone" type="number" name="tlp">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Pesan" name="pesan" type="text"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="send_btn">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8652063315362!2d110.91876687515861!3d-7.025126292976601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70b748c90b7371%3A0x8047ad129c4a7f98!2sJl.%20Pangeran%20Puger%20No.70%2C%20Grobogan%2C%20Kec.%20Grobogan%2C%20Kabupaten%20Grobogan%2C%20Jawa%20Tengah%2058152!5e0!3m2!1sid!2sid!4v1680808315952!5m2!1sid!2sid"
                            width="auto" height="400" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>