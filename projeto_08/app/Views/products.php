<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felipe Pinheiro">
    <meta name="description" content="Uma Grande Lanchonete">
    <meta name="keywords" content="Hamburguer, lanches">

    <meta http-equiv="refresh" content="25">

    <title>CIGBurguer</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- app.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
</head>

<body>
    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-2">
                <!-- logo -->
                <a href="<?php echo site_url('/'); ?>" title="Início" target="_self">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="CIGBurguer Logo">
                </a>
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <a class="nav-link ms-5" href="<?php echo site_url('/'); ?>" target="_self" title="internal link">
                    Início
                </a>
                <a class="nav-link ms-5" href="<?php echo site_url('/products'); ?>" target="_self" title="internal link">
                    Produtos
                </a>
                <a class="nav-link ms-5" href="<?php echo site_url('/where_we_are'); ?>" target="_self" title="internal link">
                    Onde estamos?
                </a>
            </div>
        </div>
    </nav>

    <!-- main -->
    <main>
        <section class="container">
            <div class="col">
                <div class="row"> <!-- burges -->
                    <!-- burger 01 -->
                    <div class="row mb-5 product-box">
                        <div class="col-5 text-center">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/burger_01.png'); ?>" alt="Burger 01">
                        </div>
                        <div class="col-7 p-5">
                            <h1 class="mb-3 product-text-color">Burger 01</h1>
                            <p class="mb-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias minus perferendis esse facere qui reprehenderit, eius tempore quas dolor. Debitis velit, obcaecati amet magnam ea inventore totam sed dignissimos nisi?
                                Neque, rerum amet. Dolorem alias excepturi, voluptatibus est magnam soluta quasi repudiandae ducimus asperiores, non expedita sit corrupti similique consectetur! Exercitationem recusandae, qui sed dicta quas illo excepturi sequi nihil.
                            </p>
                            <h2 class="mt-3 product-text-color">
                                R$ 15,00
                            </h2>
                        </div>
                    </div>
                    <!-- burger 02 -->
                    <div class="row mb-5 product-box">
                        <div class="col-7 p-5">
                            <h1 class="mb-3 product-text-color">Burger 02</h1>
                            <p class="mb-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias minus perferendis esse facere qui reprehenderit, eius tempore quas dolor. Debitis velit, obcaecati amet magnam ea inventore totam sed dignissimos nisi?
                                Neque, rerum amet. Dolorem alias excepturi, voluptatibus est magnam soluta quasi repudiandae ducimus asperiores, non expedita sit corrupti similique consectetur! Exercitationem recusandae, qui sed dicta quas illo excepturi sequi nihil.
                            </p>
                            <h2 class="mt-3 product-text-color">
                                R$ 15,00
                            </h2>
                        </div>
                        <div class="col-5 text-center">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/burger_02.png'); ?>" alt="Burger 01">
                        </div>
                    </div>
                    <!-- burger 03 -->
                    <div class="row mb-5 product-box">
                        <div class="col-5 text-center">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/burger_03.png'); ?>" alt="Burger 01">
                        </div>
                        <div class="col-7 p-5">
                            <h1 class="mb-3 product-text-color">Burger 03</h1>
                            <p class="mb-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias minus perferendis esse facere qui reprehenderit, eius tempore quas dolor. Debitis velit, obcaecati amet magnam ea inventore totam sed dignissimos nisi?
                                Neque, rerum amet. Dolorem alias excepturi, voluptatibus est magnam soluta quasi repudiandae ducimus asperiores, non expedita sit corrupti similique consectetur! Exercitationem recusandae, qui sed dicta quas illo excepturi sequi nihil.
                            </p>
                            <h2 class="mt-3 product-text-color">
                                R$ 15,00
                            </h2>
                        </div>
                    </div>
                    <!-- burger 04 -->
                    <div class="row mb-5 product-box">
                        <div class="col-7 p-5">
                            <h1 class="mb-3 product-text-color">Burger 04</h1>
                            <p class="mb-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias minus perferendis esse facere qui reprehenderit, eius tempore quas dolor. Debitis velit, obcaecati amet magnam ea inventore totam sed dignissimos nisi?
                                Neque, rerum amet. Dolorem alias excepturi, voluptatibus est magnam soluta quasi repudiandae ducimus asperiores, non expedita sit corrupti similique consectetur! Exercitationem recusandae, qui sed dicta quas illo excepturi sequi nihil.
                            </p>
                            <h2 class="mt-3 product-text-color">
                                R$ 15,00
                            </h2>
                        </div>
                        <div class="col-5 text-center">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/burger_04.png'); ?>" alt="Burger 01">
                        </div>
                    </div>
                </div> <!-- /burges-->
            </div>
        </section>
    </main>

    <!-- social networks -->
    <footer class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="http://face" title="Facebook" target="_blank">
                        <img src="<?php echo base_url('assets/images/facebook.png'); ?>" alt="Facebook">
                    </a>
                    <a href="http://insta" title="Instagram" target="_blank">
                        <img src="<?php echo base_url('assets/images/instagram.png'); ?>" alt="Instagram">
                    </a>
                    <a href="http://whats" title="WhatsApp" target="_blank">
                        <img src="<?php echo base_url('assets/images/whatsapp.png'); ?>" alt="WhatsApp">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <h6>
                    Todos os Direitos Reservados &copy; <?php echo date('Y'); ?>
                </h6>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
