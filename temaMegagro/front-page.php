<?php
    get_header();
?>
<main id="index-content">
    <section class="">
    <?php
          global $wpdb;
          $sliders = $wpdb->get_results("SELECT MIN(id) FROM ".$wpdb->prefix."nextend2_smartslider3_sliders");

          $propiedad="MIN(id)";
          $id= $sliders[0]->$propiedad;
          echo do_shortcode('[smartslider3 slider="'.$id.'"]');
    ?>
    </section>
    <section class="my-3 d-flex justify-content-center flex-column align-items-sm-start align-items-center">
        <span class="ms-sm-3 ms-0 fs-4 fw-bold mb-3">Productos Destacados</span>
        <div id="carousel2" class="carousel slide carousel-dark" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="./img/product1.jpg" class="me-4 d-xl-inline d-none" alt="img1">
                        <img src="./img/product2.jpg" class="me-4 d-lg-inline d-none" alt="img2">
                        <img src="./img/product3.jpg" class="me-4 d-sm-inline d-none" alt="img3">
                        <img src="./img/product4.jpg" class="" alt="img4">
                    </div>
                </div>
                <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="./img/product5.jpg" class="me-4 d-xl-inline d-none" alt="img2">
                    <img src="./img/product6.jpg" class="me-4 d-lg-inline d-none" alt="img1">
                    <img src="./img/product7.jpg" class="me-4 d-sm-inline d-none" alt="img4">
                    <img src="./img/product8.jpg" class="" alt="img3">
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel2  " data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </section>
        <section class="my-3">
            <span class="ms-sm-5 fs-4 fw-bold">Noticias Recientes</span>
            <div>
                <?php
                    query_posts("category_name='noticia'");
                    if(have_posts()){
                    $i=1;
                    while(have_posts()){
                        the_post();
                        if($i==5)
                            break;
                        else{
                        ?>
                            <a href="<?php the_permalink(); ?>" target="_blank">
                                <article>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    <div>
                                        <span><?php the_title(); ?></span>
                                    </div>
                                </article>
                            </a>
                        <?php 
                        $i++;
                        }
                    }
                    }
                ?>
            </div>
        </section>
        <section class="my-3 d-flex flex-column justify-content-center w-100">
            <span class="ms-sm-3 ms-0 fs-4 fw-bold mb-3">Marcas</span>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <section class="">
                    <article class="row d-flex align-items-center justify-content-center">
                        <div class="flipCard col-4 mb-3 me-3">
                            <div class="front">
                                <img src="./img/marca1.png" alt="">
                            </div>
                            <div class="back">
                                <p>BRICPET</p>
                            </div>
                        </div>
                        <div class="flipCard col-2 mb-3 me-3">
                            <div class="front">
                                <img src="./img/marca2.png" alt="">
                            </div>
                            <div class="back">
                                <p>VIMOFARM</p>
                            </div>
                        </div>
                        <div class="flipCard col-2 mb-3 me-3">
                            <div class="front">
                                <img src="./img/marca3.png" alt="">
                            </div>
                            <div class="back">
                                <p>TOTALAGRO TRADE</p>
                            </div>
                        </div>
                        <div class="flipCard col-2 mb-3 me-3">
                            <div class="front">
                                <img src="./img/marca4.png" alt="">
                            </div>
                            <div class="back">
                                <p>Farmaceutica Mundial</p>
                            </div>
                        </div>
                        <div class="flipCard col-2 mb-3 me-3">
                            <div class="front">
                                <img src="./img/marca5.jpg" alt="">
                            </div>
                            <div class="back">
                                <p>ARSUS</p>
                            </div>
                        </div>
                        <div class="flipCard col-2 mb-3 me-3">
                            <div class="front">
                                <img src="./img/marca6.png" alt="">
                            </div>
                            <div class="back">
                                <p>AGRITECH</p>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </section>
        <section class="my-3 d-flex justify-content-center flex-column align-items-sm-start align-items-center">
            <span class="ms-sm-3 ms-0 fs-4 fw-bold mb-3">Bùsquedas Recientes</span>
            <div id="carousel3" class="carousel slide carousel-dark" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <img src="./img/info4.jpg" class="me-4 d-xl-inline d-none" alt="img1">
                            <img src="./img/info3.jpg" class="me-4 d-lg-inline d-none" alt="img2">
                            <img src="./img/info2.jpg" class="me-4 d-sm-inline d-none" alt="img3">
                            <img src="./img/info1.jpg" class="" alt="img4">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img src="./img/product5.jpg" class="me-4 d-xl-inline d-none" alt="img2">
                            <img src="./img/product6.jpg" class="me-4 d-lg-inline d-none" alt="img1">
                            <img src="./img/product7.jpg" class="me-4 d-sm-inline d-none" alt="img4">
                            <img src="./img/product8.jpg" class="" alt="img3">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                    <span class="container-prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel3  " data-bs-slide="next">
                    <span class="container-next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
</main>
<?php
    get_footer();
?>