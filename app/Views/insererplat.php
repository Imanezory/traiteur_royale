
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

<body  style="background-image: url('../public/assets/images/bg/bg_pages.png');">
    <?php include('header2.php'); ?>

    <?php if (!empty($alerte)): ?>
        <div id="alerte-message" class="text-red-500 text-center text-white p-4 rounded mb-4"><?= $alerte ?></div><?php endif; ?>
 
        <section class="mt-14" >
                  
    <form action="<?= base_url('insererplat') ?>" method="POST" enctype="multipart/form-data" class="bg-white p-8  shadow-xl max-w-4xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold text-center text-gray-800">Ajouter un nouveau plat</h2>

    <div class="mb-4">
        <label for="nom" class="block text-lg font-medium text-gray-700 mb-2">Nom du plat</label>
        <input type="text" id="nom" name="nom" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="description" class="block text-lg font-medium text-gray-700 mb-2">Description</label>
        <textarea id="description" name="description" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required></textarea>
    </div>

    <div class="mb-4">
        <label for="prix" class="block text-lg font-medium text-gray-700 mb-2">Prix</label>
        <input type="number" id="prix" name="prix" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="image" class="block text-lg font-medium text-gray-700 mb-2">Image</label>
        <input type="file" id="image" name="image" class="w-full text-sm text-gray-500 border border-gray-300 rounded-md file:border-0 file:bg-[#ff9d6e] file:text-white file:py-2 file:px-4 hover:file:bg[#ff9d6e] focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="mb-4">
        <label for="disponibilite" class="block text-lg font-medium text-gray-700 mb-2">Disponibilité</label>
        <select id="disponibilite" name="disponibilite" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
            <option value="1">Disponible</option>
            <option value="0">Indisponible</option>
        </select>
    </div>

    <div class="flex justify-center">
        <button type="submit" class="bg-[#ff9d6e] text-white px-6 py-3 rounded-lg shadow-md  focus:ring-4 focus:ring-blue-300">Ajouter le plat</button>
    </div>
</form>

        </section>

<script src="../public/assets/alerte.js" ></script>

</body>

</html>
    