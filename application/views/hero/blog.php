<style>
    .carousel-inner .carousel-item img {
        height: 400px;
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
                <h2>Article</h2>
                <form class="form-inline mt-4">
                    <div class="input-group">
                        <input type="text" class="form-control border-right-0" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .blog-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 20px;
        line-height: 1.2;
        font-weight: 600;
    }

    .desc {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 10px;
    }

    .blog-button a {
        border-radius: 0;
    }

    .blog-button .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .blog-button .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>
<div class="container py-5">
    <div class="row">
        <?php foreach ($blogs as $row) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-item shadow">
                    <div class="image-wrap">
                        <a href="<?= base_url('blog/' . $row['slug_id']); ?>">
                            <img src="<?= base_url('assets/images/articles/headers/' . $row['header_image']); ?>" alt="cover <?= $row['title_id']; ?>" class="img-fluid">
                        </a>
                    </div>
                    <div class="blog-content p-3">
                        <ul class="blog-meta">
                            <li class="date"><i class="fa fa-calendar-check-o"></i> Senin, 03 April 2023</li>
                        </ul>
                        <h2 class="blog-title">
                            <a href="<?= base_url('blog/' . $row['slug_id']); ?>"><?= $row['title_id']; ?></a>
                        </h2>
                        <p class="desc"><?= $row['deskripsi']; ?></p>
                        <div class="blog-button mt-2 d-flex justify-content-end">
                            <a class="btn btn-outline-danger rounded" href="<?= base_url('blog/' . $row['slug_id']); ?>">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>