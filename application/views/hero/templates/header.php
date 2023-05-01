<!DOCTYPE html>
<html lang="id">
<?php
date_default_timezone_set('Asia/Jakarta');
?>

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <title>Sabdha Langit Indonesia</title>

    <meta name="keywords"
        content="Event organizer, EO, Grobogan, Purwodadi, Jawa Tengah, BUMN, EO Pemerintah daerah, pemda, Semarang">
    <meta name="description"
        content="Kami adalah perusahaan Event Organizer profesional di Grobogan, Jawa Tengah. Menawarkan layanan lengkap untuk acara pernikahan, acara bisnis, hingga Event Pemerintahan. Hubungi kami sekarang untuk mendapatkan solusi terbaik dan membuat acara Anda berkesan!">
    <meta name="author" content="jaxid">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
    <link rel="icon" href="<?= base_url('assets/'); ?>images/logo/faveicon.png" type="image/png" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

</head>

<body class="main-layout">

    <?php if ($pages == 'beranda') : ?>
    <div class="loader_bg">
        <div class="loader"><img src="<?= base_url('assets/'); ?>images/logo/logo-sabdha-langit.png"
                alt="Loading Images Sabdha Langit" /></div>
    </div>
    <?php endif; ?>

    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/'); ?>images/logo/logo-panjang-hitam.png" alt="Logo Sabdha Langit"
                        width="200" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <style>
                    .active {
                        border-bottom: 2px solid red;
                        color: red;
                    }

                    .navbar-nav .nav-link {
                        font-weight: 600;
                        color: #000;
                    }

                    .navbar-nav .nav-link:hover {
                        color: red;
                    }
                    </style>
                    <ul class="navbar-nav">
                        <li class="nav-item <?= ($pages == 'beranda') ? 'active' : '' ?>">
                            <a class="nav-link mx-2" href="<?= base_url(''); ?>">Beranda</a>
                        </li>
                        <li class="nav-item <?= ($pages == 'about') ? 'active' : '' ?>">
                            <a class="nav-link mx-2" href="<?= base_url('tentang-kami'); ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item <?= ($pages == '') ? 'active' : '' ?>">
                            <a class="nav-link mx-2" href="#">Layanan</a>
                        </li>
                        <li class="nav-item <?= ($pages == 'blog') ? 'active' : '' ?>">
                            <a class="nav-link mx-2" href="<?= base_url('blog'); ?>">Blog</a>
                        </li>
                        <li class="nav-item <?= ($pages == '') ? 'active' : '' ?>">
                            <a class="nav-link mx-2" href="#">Hubungi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>