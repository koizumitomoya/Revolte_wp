<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <?php wp_head(); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:600&display=swap&subset=japanese" rel="stylesheet">
        <title>Revolte</title>
    </head>

    <body>
        <!-- header -->
    <header class="container-fluid bg-white py-2 px-md-5 header">
        <div class="row">
            <div class="col-md-12 d-md-flex">
				<div><a href="http://localhost:8888/wordpress/wordpress%20/index.php"><img class="header-logo text-white d-md-flex" src="<?php echo get_template_directory_uri() ?>/img/Revolte.png"></a></div>
                <div class="header-nav d-md-flex ml-md-auto">
                    <nav class="header-list text-center mx-0">
                        <ul class="text-xxs text-md-xs px-0 ">
                            <li class="d-inline-block mt-3"><a href="#" class="btn-flat-border">TOP</a></li>
                            <li class="d-inline-block mx-md-5"><a href="#SERVICE" class="btn-flat-border">SERVICE</a></li>
                            <li class="d-inline-block"><a href="#COMPANY" class="btn-flat-border">COMPANY</a></li>
                            <li class="d-inline-block mx-md-5"><a href="#CONTACT" class="btn-flat-border">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>