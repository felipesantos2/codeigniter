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
    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="p-2 col">
                <!-- logo -->
                <a href="<?php echo site_url('/'); ?>" title="Início" target="_self">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="CIGBurguer Logo">
                </a>
            </div>
            <div class="flex-row p-3 col pe-5 d-flex justify-content-end">
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
        <section class="container product-box">
            <div class="row">
                <div class="mb-2 text-center col-5">
                    <img  class="img-fluid rounded-4" src="<?php echo base_url('assets/images/room.jpg'); ?>" alt="Our room">
                </div>
                <div class="col-6">

                    <p class="mb-0 where-we-are-title">
                        CIGBurger
                    </p>
                    <p class="where-we-are-subtitle">
                        Rua des hamburgeres, 123 Paris
                    </p>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quibusdam illo suscipit quidem repudiandae, perspiciatis iste doloremque. Impedit porro eos quisquam, earum ipsum praesentium iusto a odit ducimus et velit?
                    </p>

                    <div class="mb-3 d-flex align-items-center">
                        <img src="<?php echo base_url('assets/images/icon_phone.png'); ?>" alt="Phone">
                        <p class="where-we-are-subtitle ms-3">
                            <a class="nav-link" href="tel:+559999999999"> (33) 9 9999-9999 </a>
                        </p>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <img src="<?php echo base_url('assets/images/icon_email.png'); ?>" alt="Email">
                        <p class="where-we-are-subtitle ms-3">
                            <a class="nav-link" href="mailto:">cigbuger@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- map -->
        <section class="container py-5 product-box">
            <div class="col">
                <div class="text-center col">
                    <img class="img-fluid rounded-4" src="<?php echo base_url('assets/images/map.jpg'); ?>" alt="map">
                </div>
            </div>
        </section>
    </main>

    <!-- social networks -->
    <footer class="container-fluid">
        <div class="row justify-content-center">
            <div class="flex-row col-6 d-flex justify-content-center">
                <div class="mx-4 text-center">
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
        <div class="mt-4 row">
            <div class="text-center col">
                <h6>
                    Todos os Direitos Reservados &copy; <?php echo date('Y'); ?>
                </h6>
            </div>
        </div>
    </footer>

    <!-- bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
