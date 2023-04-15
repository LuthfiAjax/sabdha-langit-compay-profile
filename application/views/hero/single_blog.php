<div class="single_blog" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <style>
                    h1 {
                        margin: 0;
                        text-transform: uppercase;
                        letter-spacing: 0.17em;
                        font-size: 28px;
                    }

                    p {
                        margin: 10px 0;
                        font-size: 14px;
                        color: #777;
                    }

                    .share-icons {
                        display: flex;
                        justify-content: start;
                        align-items: center;
                        margin: 10px 0;
                    }

                    .share-icons a {
                        margin: 0 10px;
                        color: #555;
                        transition: all 0.3s ease-in-out;
                    }

                    .share-icons a:hover {
                        color: #E52029;
                    }

                    .share-icons a i {
                        font-size: 24px;
                    }

                    @media only screen and (max-width: 600px) {
                        h1 {
                            font-size: 20px;
                        }
                    }
                </style>
                <h1 style="padding-top:40px;"><b><?= $blog->title_id; ?></b></h1>
                <?php
                $this->load->library('indonesian_date');
                ?>
                <p><?= $this->indonesian_date->format_date($blog->publish_date); ?></p>
                <div class="share-icons">
                    <span><b>Bagikan : </b></span>
                    <a href="https://api.whatsapp.com/send?text=" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=&text=" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                </div>

                <!-- Slider Section-->
                <section class="mt-1" id="about-slider" style="padding-bottom: 20px !important;padding-top:10px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div id="carousel-news" class="carousel slide carousel-fade">
                                    <ol class="carousel-indicators indicators-inside">
                                        <li data-target="#carousel-news" data-slide-to="0" class="active"></li>
                                    </ol>
                                    <div role="listbox" class="carousel-inner">
                                        <div class="item active"><img src="<?= base_url('assets/images/articles/headers/' . $blog->header_image); ?>" alt="Cover <?= $blog->title_id; ?>" class="img-responsive"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <style>
                        figure {
                            margin: auto;
                            width: 90% !important;
                        }

                        figure img {
                            width: 80%;
                            margin: auto;
                        }

                        img {
                            max-width: 100%;
                            height: auto;
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                        }

                        article {
                            font-size: 18px;
                            line-height: 1.5;
                            color: #333;
                        }
                    </style>
                    <article>
                        <?= $blog->body_text; ?>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>