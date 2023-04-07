<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <ul class="list-group-horizontal text-left">
                        <li class="list-group-horizontal-item text-white"><i class="fa fa-map-marker fa-fw me-1"></i> 1234 Main St, City</li>
                        <li class="list-group-horizontal-item text-white"><i class="fa fa-phone fa-fw me-1"></i> (123) 456-7890</li>
                        <li class="list-group-horizontal-item text-white"><i class="fa fa-envelope fa-fw me-1"></i><a class="text-light" href="mailto:info@example.com"> info@example.com</a></li>
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
                                <a class="text-light" href="#">Produk</a>
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
                        <button class="btn btn-danger ml-3">Subscribe</button>
                    </form>
                    <ul class="list-unstyled social_icon mt-2">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
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
<a href="https://wa.me/xxxxxxxxxx" class="whatsapp-float" target="_blank">
    <i class="fa fa-whatsapp"></i>
</a>

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
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    a.whatsapp-float:hover {
        color: red;
    }

    .whatsapp-float i {
        margin-top: 15px;
    }
</style>


<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-3.0.0.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/custom.js"></script>
</body>

</html>