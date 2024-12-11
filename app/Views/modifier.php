<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier - Mon traiteur</title>
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
    <section class="bg-cover bg-center h-96" style="background-image: url('../public/assets/images/bg/bg_pages.png');">
        <div class="flex items-center justify-center h-full bg-opacity-50">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-6 text-white">Gérer mon compte</h2>
                <p class="text-lg mb-6">Acceuil | Gérer mon compte | modifier mes informations</p>
            </div>
        </div>
    </section>
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-8">
        <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
            <nav class="mb-4 flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            Acceuil
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white md:ms-2">Gérer mon compte</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">modification</span>
                        </div>
                    </li>
                </ol>
            </nav>




            <div class="py-4 md:py-8">
            <?php if (!empty($alerte)): ?>
            <div id="alerte-message" class="text-red-500 text-center font-bold text-white p-4 rounded mb-4"><?= $alerte ?></div><?php endif; ?>
                    <form action="<?= base_url('modifier') ?>" method="POST" class="mb-4 grid gap-4 sm:grid-cols-2 sm:gap-8 lg:gap-16">

                        <div class="space-y-4">
                            <div class="flex space-x-4">
                                <div>
                                    <span class="mb-2 text-[#ff9d6e] inline-block rounded px-2.5 py-0.5 text-xs font-medium">Compte de:</span>
                                    <div class="mb-4 flex space-x-4">
                                        <div class="w-1/2">
                                            <label for="nom" class="font-semibold text-gray-900 dark:text-white">Nom</label>
                                            <input type="text" id="nom" name="nom" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]"
                                                value="<?= esc($session->get('user')['nom']); ?>" required>
                                        </div>
                                        <div class="w-1/2">
                                            <label for="prenom" class="font-semibold text-gray-900 dark:text-white">Prénom</label>
                                            <input type="text" id="prenom" name="prenom" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]"
                                                value="<?= esc($session->get('user')['prenom']); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="font-semibold text-gray-900 dark:text-white">Email Adresse</label>
                                <input type="email" id="email" name="email" value="<?= esc($session->get('user')['email']); ?>"
                                    class="w-full mt-2 px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required />
                            </div>
                            <div>
                                <label for="adresse" class="font-semibold text-gray-900 dark:text-white">Adresse</label>
                                <input type="text" id="adresse" name="adresse" value="<?= esc($session->get('user')['adresse']); ?>"
                                    class="w-full mt-2 px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required />
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label for="telephone" class="font-semibold text-gray-900 dark:text-white">Numéro de téléphone</label>
                                <input type="number" id="telephone" name="telephone" value="<?= esc($session->get('user')['telephone']); ?>"
                                    class="w-full mt-2 px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required />
                            </div>
                            <div>
                                <label for="mot_de_passe	" class="font-semibold text-gray-900 dark:text-white">Mot de passe </label>
                                <input type="password" id="mot_de_passe" name="mot_de_passe" value="<?= esc($session->get('user')['mot_de_passe']); ?>"
                                    class="w-full mt-2 px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required />
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <button type="submit" class="inline-flex w-full items-center justify-center rounded-lg bg-[#ff9d6e] px-5 py-2.5 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto">
                                Enregistrer les modifications
                            </button>
                        </div>
                    </form>
                    </div>
            </div>

    </section>
    <?php include('footer.php'); ?>
    <script src="../public/assets/alerte.js"></script>

</body>

</html>