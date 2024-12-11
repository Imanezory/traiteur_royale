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
</style>

<body style="background-image: url('../public/assets/images/bg/bg_pages.png');">
    <?php include('header2.php'); ?>

    <?php if (session()->getFlashdata('alerte')): ?>
    <div id="alerte-message" class=" alert alert-success bg-white text-red-600 text-center p-4 rounded mb-4">
        <?= session()->getFlashdata('alerte') ?>
    </div>
<?php endif; ?>



    <section >
        <div class="overflow-x-auto px-6 py-8">
            <table class="min-w-full bg-white shadow-lg rounded-lg border-separate border-spacing-0">
                <thead class="bg-[#ff9d6e] text-white">
                    <tr>

                        <th class="py-2 px-4 text-left">Image</th>
                        <th class="py-2 px-4 text-left">Id plat</th>
                        <th class="py-2 px-4 text-left">Plat</th>
                        <th class="py-2 px-4 text-left">Prix</th>
                        <th class="py-2 px-4 text-left">Disponibilité</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800">
                    <?php foreach ($plats as $plat): ?>
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-2 px-4">
                                <img src="<?= esc($plat['image']) ?>" alt="<?= esc($plat['nom']) ?>" class="w-20 h-20 object-cover rounded-md">
                            </td>
                            <td class="py-2 px-4"><?= esc($plat['id']) ?></td>
                            <td class="py-2 px-4"><?= esc($plat['nom']) ?></td>
                            <td class="py-2 px-4"><?= esc($plat['prix']) ?></td>
                            <td class="py-2 px-4"><?= esc($plat['disponibilite']) ?></td>
                            <td class="py-2 px-4">
                                <a href="<?= base_url('modifierplat/' . $plat['id']) ?>" class="text-blue-500">Modifier</a> |
                                <a href="<?= base_url('supprimerPlat/' . $plat['id']) ?>" class="text-red-500" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>


    </section>

    <script src="../public/assets/alerte.js"></script>

</body>

</html>