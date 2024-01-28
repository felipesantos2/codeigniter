<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Felipe Pinheiro">
    <meta name="description" content="Uma Grande Lanchonete">
    <meta name="keywords" content="Hamburguer, lanches">

    <meta http-equiv="refresh" content="25">

    <title>
        <?php echo esc($title); ?>
    </title>

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
    <main class="my-4 py-2">
        <section class="container-fluid bg-color-02">
            <div class="row">
                <div class="col text-center p-5">
                    <div class="mb-5">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/main_burger_01.png'); ?>" alt="the best burguer in the world!">
                    </div>
                    <div class="text-center">
                        <h3 class="mb-5">
                            Deliciosos e com grandes descontos!
                        </h3>
                        <a class="btn-products" href="<?php echo site_url('/products'); ?>">Produtos</a>
                    </div>
                </div>
                <div class="col text-center p-5">
                    <img class="img-fluid" src="<?php echo base_url('assets/images/main_burger_02.png'); ?>" alt="the best burguer in the world!">
                </div>
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
                    Todos os Direitos Reservados &copy; 
                    <?php echo date('Y').' - '.app_timezone().'-3'; ?>
                </h6>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
