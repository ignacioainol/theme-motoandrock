<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="<?= bloginfo('template_directory')?>/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory')?>/assets/css/main.css">
    <title>Moto and Rock - We are stars</title>
</head>

<body>
    <header>
        <div class="row">
            <div class="col-md-3">
                <div style="background-image: url('<?= bloginfo('template_directory')?>/assets/images/logoMotoAndRock.png')"
                    class="logoMotoandRock"></div>
            </div>

            <div class="col-md-5">
                <?= get_product_search_form() ?>
            </div>


        </div>

    </header>