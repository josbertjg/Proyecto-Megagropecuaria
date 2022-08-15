<?php
    get_header();
?>
    <main id="blog-content">
      <section class="mensaje-header mb-4 row">
        <nav class="px-3 col-12" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
        <div class=" offset-sm-4 offset-3 col-sm-4 col-5">
            <span>Blog</span>
        </div>
        <div class="dropdown col-4 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-dollar-sign dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Bs.S</a></li>
              <li><a class="dropdown-item" href="#">U$S</a></li>
            </ul>
        </div>
    </section>
        <section class="my-5">
            <?php
                if(have_posts()){
                    $i=0;
                    $aux=0;
                    while(have_posts()){
                    the_post();
                    if($i==0){
            ?>
            <section class="mb-5">
              <span class="fs-2 fw-bold mb-3">Noticias</span>
              <div id="carouselblog1" class="carousel slide" data-bs-ride="false">
                  <div class="carousel-inner">
                    <?php 
                    } 
                        if($i<=3){
                    ?>
                    <div class="carousel-item <?php if($i==0) echo 'active' ?>">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
                      <div class="carousel-caption">
                        <h5 class="d-none d-sm-block"><?php the_title(); ?></h5>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver Noticia</a>
                      </div>
                    </div>
                    <?php 
                        } 
                        if($i==3){
                    ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselblog1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselblog1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
            </section>
            <section>
            <?php
                    }
                    if($i>=4){
                    ?>
                <?php
                            if($i==4){
                        ?>
                            <section class="section-doble">
                                <article>
                                    <div class="mb-sm-0 mb-3">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="#">
                                            <span><?php the_title(); ?></span>
                                        </a>
                                    </div>
                            <?php }else if($i==5){ ?>
                                    <div>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="#">
                                            <span><?php the_title(); ?></span>
                                        </a>
                                    </div>
                                </article>
                            </section>
                            <?php }else if($i==6){ ?>
                            <section class="section-large">
                                <article>
                                    <div>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="#">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="fw-bold fs-4"><?php the_title(); ?></span>
                                        <h6><?php the_date(); ?></h5>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>">Saber Màs</a>
                                    </div>
                                </article>
                            </section>
                        <?php  
                            }    
                        }
                        if($i==6)
                            $i=4;
                        else
                            $i=$i+1; 
                    }
                }
                ?>
                </section>
            </section>
            <?php
                the_posts_pagination();
            ?>
    </main>
<?php
    get_footer();
?>