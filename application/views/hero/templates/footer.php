<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Kontak</h3>
                    <ul class="list-group-horizontal text-left">
                        <li class="list-group-horizontal-item text-white"><i class="fa fa-map-marker fa-fw me-1"></i> Jl. Pangeran Puger No.70, Grobogan, Kec. Grobogan, Kabupaten Grobogan, Jawa Tengah 58152</li>
                        <li class="list-group-horizontal-item text-white"><i class="fa fa-phone fa-fw me-1"></i> (62) 821-3323-3777</li>
                        <li class="list-group-horizontal-item text-white"><i class="fa fa-envelope fa-fw me-1"></i><a class="text-light" href="mailto:official@sabdhalangit.com"> official@sabdhalangit.com</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h3>Menu Link</h3>
                    <ul class="list-inline">
                        <ul class="list-group-horizontal text-left">
                            <li class="list-group-horizontal-item">
                                <a class="text-light" href="#">Beranda</a>
                            </li>
                            <li class="list-group-horizontal-item">
                                <a class="text-light" href="#">Tentang Kami</a>
                            </li>
                            <li class="list-group-horizontal-item">
                                <a class="text-light" href="#">Portofolio</a>
                            </li>
                            <li class="list-group-horizontal-item">
                                <a class="text-light" href="#">Layanan</a>
                            </li>
                            <li class="list-group-horizontal-item">
                                <a class="text-light" href="#">Blog</a>
                            </li>
                        </ul>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h3>Newsletter</h3>
                    <form class="form-inline">
                        <div class="form-group">
                            <input class="form-control" placeholder="Masukan Email" type="text" name="email">
                        </div>
                        <button class="btn btn-danger ml-3">Ikuti</button>
                    </form>
                    <ul class="list-unstyled social_icon mt-2">
                        <li><a target="_blank" href="https://www.facebook.com/sabdha.langit.14"><i class="fab fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.tiktok.com/@sabdhalangit"><i class="fab fa-tiktok"></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/@SABDHALANGIT"><i class="fab fa-youtube"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/sabdhalangit/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <p class="text-center mb-0 py-3">
                        © <?= date('Y'); ?> All Rights Reserved. <a href="<?= base_url(''); ?>" class="text-danger">cv. sabdha langit indonesia</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- HTML -->
<div class="whatsapp-float">
    <a type="button" data-toggle="modal" data-target="#exampleModal">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Isi Tanda Pengenal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon</label>
                        <input type="number" class="form-control" id="telepon" placeholder="Masukkan Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <select class="form-control" id="pertanyaan">
                            <option selected disabled>Pilih Salah Satu</option>
                            <option value="Sewa Alat">Sewa Alat</option>
                            <option value="EO">EO</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-success">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- CSS -->
<style>
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 30px;
        right: 30px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .whatsapp-float:hover {
        background-color: #128c7e;
        color: #fff;
    }

    .whatsapp-float i {
        margin-top: 15px;
    }

    @media (max-width: 767px) {
        .whatsapp-float {
            width: 40px;
            height: 40px;
            bottom: 20px;
            right: 20px;
            font-size: 20px;
        }

        .whatsapp-float i {
            margin-top: 10px;
        }
    }

    .modal-header {
        background-color: #E94048;
        color: white;
        font-weight: bold;
    }

    .modal-title {
        margin: 0;
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        color: #fff;
    }

    .modal-body {
        background-color: #f5f5f5;
    }

    .form-control {
        border: 2px solid #d9d9d9;
        border-radius: 4px;
        box-sizing: border-box;
        height: 50px;
        margin-bottom: 10px;
    }

    .form-control:focus {
        border: 2px solid #002651;
        outline: none;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .modal-footer button {
        font-weight: bold;
    }

    .btn-danger {
        background-color: #d9534f;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c9302c;
    }
</style>


<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-3.0.0.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/custom.js"></script>
</body>

</html>