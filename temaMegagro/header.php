<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">

    <?php
        wp_head();
    ?>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex justify-content-sm-center">
              <a class="navbar-brand" href="#">
                  <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id=get_theme_mod('custom_logo');
                        $logo=wp_get_attachment_image_src($custom_logo_id);
                    }
                  ?>
                  <img src="<?php echo $logo[0]; ?>" alt="logo">
                  <b id="title">Megagropecuaria</b>
              </a>
              <?php
                get_search_form();
              ?>
              <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column align-items-center justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center justify-content-lg-start mt-3 mt-sm-0 justify-content-center">
                    <div class="d-flex justify-content-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-3" href="#" id="categorias" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categorias">
                                <li><a class="dropdown-item" href="#">Medicamentos</a></li>
                                <li><a class="dropdown-item" href="#">Pecuaria</a></li>
                                <li><a class="dropdown-item" href="#">Agricola</a></li>
                                <li><a class="dropdown-item" href="#">Servicio</a></li>
                                <li><a class="dropdown-item" href="#">Agrotiendas</a></li>
                                <li><a class="dropdown-item" href="#">Vademécum</a></li>
                                <li><a class="dropdown-item" href="#">Mascotas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-sm-3 me-0">
                            <a id="btnSesion" class="btn btn-outline-light" href="#">Iniciar Sesion</a>
                        </li>
                    </div>
                </ul>
              </div>
            </div>
          </nav>
    </header>