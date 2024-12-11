<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details- Mon traiteur</title>
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
</style>

<body>
    <?php include('header.php'); ?>

    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">

                <div class="md:w-1/2 px-6 mb-8">
                    <img src="<?= base_url($plat['image']) ?>" alt="<?= $plat['nom'] ?>" class="w-[600px] h-[500px] rounded-lg shadow-md">
                </div>

                <div class="w-full md:w-1/2 px-4 mb-8">
                    <?php if (session()->getFlashdata('alerte')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('alerte') ?>
                        </div>
                    <?php endif; ?>

                    <h2 class="text-3xl font-bold mb-2"><?= esc($plat['nom']) ?></h2>
                    <p class="text-gray-600 mb-4">ID: <?= esc($plat['id']) ?></p>
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2"><?= esc($plat['prix']) ?>DH</span>
                    </div>
                    <p class="text-gray-700 mb-6"><?= esc($plat['description']) ?></p>


                    <div class="flex space-x-4 mb-6">
                        <form action="<?= base_url('confirmer') ?>" method="post">
                            <input type="hidden" name="plat_id" value="<?= esc($plat['id']) ?>">
                            <label for="quantite">Quantité :</label>
                            <input type="number" name="quantite" id="quantite" value="1" min="1" class="border rounded px-3 py-1" /><br><br>
                            <button
                                type="submit"
                                class="bg-[#ff9d6e] flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Confirmer la commande
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>


</body>

</html>