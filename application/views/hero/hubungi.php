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
                <h2 class="h2 text-uppercase">HUBUNGI KAMI</h2>
            </div>
        </div>
    </div>
</div>

<!--  contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form id="request" class="main_form" action="" method="POST">
                    <div class="row">
                    <div class="col-md-12 ">
                        <input class="contactus" placeholder="Nama Lengkap" type="text" required autocomplete="off" name="name"> 
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Alamat Email" type="email" required autocomplete="off" name="email"> 
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Nomor Telepon" type="number" required autocomplete="off" name="phone">                          
                    </div>
                    <div class="col-md-12">
                        <textarea class="textarea" placeholder="Pesan" type="text" required autocomplete="off" name="message"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="send_btn" type="submit">Send</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_main">
                    <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d793.4712205142374!2d110.92031113341066!3d-7.02518094688167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70b748c90b7371%3A0x8047ad129c4a7f98!2sJl.%20Pangeran%20Puger%20No.70%2C%20Grobogan%2C%20Kec.%20Grobogan%2C%20Kabupaten%20Grobogan%2C%20Jawa%20Tengah%2058152!5e0!3m2!1sid!2sid!4v1691266050961!5m2!1sid!2sid" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->