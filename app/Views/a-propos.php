<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos - Mon traiteur</title>
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
    h3{
    color: #072b31;
}
</style>

<body>
    <?php include('header.php'); ?>


    <section  class="bg-cover bg-center h-96" style="background-image: url('../public/assets/images/bg/bg_pages.png');">
        <div class="flex items-center justify-center h-full  bg-opacity-50">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-6 text-white">Tous les services</h2>
                <p class="text-lg mb-6">Acceuil | A propos</p>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-16 my-12">
        <div class="mb-32 text-center">
            <span class="text-orange-500 uppercase tracking-widest text-sm">À PROPOS</span>
            <h2 class="text-4xl font-bold mt-4">NOTRE RAISON D'ÊTRE, NOS VALEURS ET NOTRE VISION.</h2>
            <hr class="my-4 w-20 mx-auto border-t-2 border-black">
            <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">
                Nous nous engageons à offrir des produits et services qui apportent une réelle valeur ajoutée à nos clients.
            </p>
        </div>
        <div class="flex flex-col lg:flex-row items-center justify-center max-w-5xl mx-auto bg-white shadow-md overflow-hidden">
       
            <div class="w-full lg:w-1/2">
                <img src="../public/assets/images/apropos/Traiteur.jpg" alt="À propos de notre traiteur" class="object-cover w-full h-full">
            </div>
      
            <div class="w-full lg:w-1/2 p-8 text-center lg:text-left">
                <h3 class="text-2xl font-bold mb-4">Découvrez notre histoire ! </h3>
                <p class="text-gray-600">
                    Notre traiteur en ligne vous propose une cuisine savoureuse, faite avec des ingrédients de qualité, pour vos événements
                    ou repas quotidiens. Nous sommes dédiés à satisfaire vos goûts et vos envies, avec un service sur mesure.
                </p>
            </div>

        </div>
        <div class="flex flex-col justify-start max-w-5xl mx-auto bg-white shadow-md overflow-hidden">
            <div class="w-full p-8">
                <h3 class="text-2xl font-bold mb-4">NOTRE MISSION</h3>
                <p class="text-gray-600">
                    Nous croyons en l'importance de la qualité et du service client. Notre objectif est de rendre chaque expérience unique,
                    en nous adaptant aux besoins de chaque client. Avec un menu varié et des solutions flexibles, notre traiteur en ligne est
                    là pour répondre à vos attentes.
                </p>
            </div>
            <div class="w-full p-8">
                <h3 class="text-2xl font-bold mb-4">LA QUALITÉ, NOTRE PRIORITÉ</h3>
                <p class="text-gray-600">
                    Chez Traiteur Royale, nous savons que la réussite d’un événement repose sur une organisation impeccable. C’est pourquoi nous mettons à votre disposition tout notre savoir-faire : <br>
                    <br>
                    Élaboration et personnalisation de menus.<br>
                    Préparation de plats savoureux avec des ingrédients frais.<br>
                    Livraison, installation et service complet.<br><br>
                    Que ce soit pour une réception de grande envergure, notre équipe est là pour répondre à vos attentes et offrir à vos convives une expérience gastronomique unique.
                </p>
            </div>
            <div class="w-full p-8">
                <h3 class="text-2xl font-bold mb-4">LIVRAISON A DOMICILE</h3>
                <p class="text-gray-600">
                    Nous livrons vos commandes à Agadir et dans ses environs. Notre équipe de cuisine et de service s’assure que tout se déroule dans les règles de l’art, avec une attention particulière pour que vos invités soient choyés.
                    Et ce n’est pas tout ! Notre offre ne se limite pas aux grands événements.
                    Choisissez parmi nos menus variés ou concevez le vôtre : nous nous occupons du reste et livrons directement chez vous.
                </p>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>


</body>

</html>