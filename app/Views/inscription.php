<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire - Mon traiteur</title>
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

    h2 {
        color: #434343;
    }
</style>

<body>
    <?php include("header.php") ?>
    <section class="py-16">
        <div class="mb-12 text-center">
            <span class="text-orange-500 uppercase tracking-widest text-sm">S'inscrire</span>
            <h2 class="text-4xl font-bold mt-4">Rejoignez-nous</h2>
            <hr class="my-4 w-20 mx-auto border-t-2 border-black">

            <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">
                Créez votre compte dès maintenant pour profiter de nos services de traiteur et rendre vos événements inoubliables.
            </p>
        </div>
        <?php if (!empty($alerte)): ?>
            <div id="alerte-message" class=" bg-red-500 text-white text-center text-white p-4 rounded mb-4"><?= $alerte ?></div><?php endif; ?>
    </section>
    <section class="flex items-center justify-center h-screen -mt-24 ">
        <div class="flex flex-col md:flex-row w-4/5 h-3/4 bg-white overflow-hidden">
            <div class="hidden md:block md:w-1/2 bg-cover bg-center"
                style="background-image: url('assets/images/login/login.jpg');">
            </div>
        
        <form action="<?= base_url('add') ?>" method="post" class="p-8" >


                    <div class="mb-4 flex space-x-4">
                        <div class="w-1/2">
                            <label for="nom" class="block text-gray-700 font-semibold mb-2">Nom</label>
                            <input type="text" id="nom" name="nom" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
                        </div>
                        <div class="w-1/2">
                            <label for="prenom" class="block text-gray-700 font-semibold mb-2">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
                        </div>
                    </div>
                    <div class="mb-4 flex space-x-4">
                        <div class="w-1/2">
                            <label for="telephone" class="block text-gray-700 font-semibold mb-2">Téléphone</label>
                            <input type="number" id="telephone" name="telephone" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
                        </div>
                        <div class="w-1/2">
                            <label for="adresse" class="block text-gray-700 font-semibold mb-2">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="mot_de_passe" class="block text-gray-700 font-semibold mb-2">Mot de passe</label>
                        <input type="password" id="mot_de_passe" name="mot_de_passe"
                            class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]"
                            required>
                    </div>
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="bg-[#ff9d6e] text-white px-6 py-2 font-semibold hover:bg-orange-600 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]">
                            S'inscrire
                        </button>
                    </div>
                    <div class=" text-center mt-4">
                        <p class="text-sm text-gray-600">
                            Vous avez déja un compte ?
                            <a href="connecter" class="text-orange-600 hover:underline">Se connecter</a>
                        </p>

                    </div>
                </form>



            </div>
        </div>
    </section>

    <?php include("footer.php") ?>

    <script src="../public/assets/alerte.js" ></script>





</body>

</html>