<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Mon traiteur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Lustria" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=HSarG1BFsN8xr5G69r9RuNbm9qaLgEji3Ha48mYdP-SrCi5zB54rUHu-cim2cFuOnxE1UFJaNvo8Mu-TeGr63Q" charset="UTF-8"></script>
</head>
<style>
    * {
        font-family: "PT Serif", serif;

    }

    .btn {
        background-color: #ff9d6e;
        color: white;
    }

    #special a {
        color: #b5a46d;
    }

    h2 {
        color: #434343;
    }
    body{
        overflow: hidden;
    }
</style>

<body>
    <?php include('header2.php'); ?>
    <section class="bg-cover bg-center h-[590px]" style="background-image: url('../public/assets/images/bg/bg_pages.png');">
        <div class="flex items-center justify-center h-full  bg-opacity-50">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-6 text-white">Bienvenue <?= esc($session->get('user')['nom']); ?> dans Traiteur Royale</h2>
                <p class="text-lg mb-6"></p>
            </div>
        </div>
    </section>
    

</body>

</html>