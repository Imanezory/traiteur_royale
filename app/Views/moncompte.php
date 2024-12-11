<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon compte - Mon traiteur</title>
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
        <p class="text-lg mb-6">Acceuil | Gérer mon compte</p>
      </div>
    </div>
    <?php if (!empty($alerte)): ?>
      <div id="alerte-message" class="text-red-500 text-center font-bold text-white p-4 rounded mb-4"><?= $alerte ?></div><?php endif; ?>
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
              <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white md:ms-2"> <?= esc($session->get('user')['nom']); ?></a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
              </svg>
              <span class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ms-2">Gérer mon compte</span>
            </div>
          </li>
        </ol>
      </nav>

  
      <div class="py-4 md:py-8">
        <div class="mb-4 grid gap-4 sm:grid-cols-2 sm:gap-8 lg:gap-16">
          <div class="space-y-4">
            <div class="flex space-x-4">
              <img class="h-16 w-16 rounded-lg" src="https://www.shutterstock.com/image-vector/user-icon-trendy-flat-style-600nw-1697898655.jpg" alt="Helene avatar" />
              <div>
                <span class="mb-2 text-[#ff9d6e] inline-block rounded px-2.5 py-0.5 text-xs font-medium"> Compte de : </span>
                <h2 class="flex items-center text-xl font-bold leading-none text-gray-900 dark:text-white sm:text-2xl"> <?= esc($session->get('user')['nom']); ?> <?= esc($session->get('user')['prenom']); ?></h2>
              </div>
            </div>
            <dl class="">
              <dt class="font-semibold text-gray-900 dark:text-white">Email Adresse</dt>
              <dd class="text-gray-500 dark:text-gray-400"> <?= esc($session->get('user')['email']); ?></dd>
            </dl>
            <dl>
              <dt class="font-semibold text-gray-900 dark:text-white">Adresse</dt>
              <dd class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
                <svg class="hidden h-5 w-5 shrink-0 text-gray-400 dark:text-gray-500 lg:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                </svg>
                <?= esc($session->get('user')['adresse']); ?>
              </dd>
            </dl>
            <dl>
              <dt class="font-semibold text-gray-900 dark:text-white">Adresse de livraison</dt>
              <dd class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
                <svg class="hidden h-5 w-5 shrink-0 text-gray-400 dark:text-gray-500 lg:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                </svg>
                <?= esc($session->get('user')['adresse']); ?>
              </dd>
            </dl>
          </div>
          <div class="space-y-4">
            <dl>
              <dt class="font-semibold text-gray-900 dark:text-white">Numéro de téléphone</dt>
              <dd class="text-gray-500 dark:text-gray-400"> <?= esc($session->get('user')['telephone']); ?></dd>
            </dl>

            </dl>
          </div>
        </div>
        <button type="button" data-modal-target="accountInformationModal2" data-modal-toggle="accountInformationModal2" class="inline-flex w-full items-center justify-center rounded-lg bg-[#ff9d6e] px-5 py-2.5 text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto ">
          <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"></path>
          </svg>
          <a href="modifier">Modifier mes informations</a>
        </button>
        <button type="button" data-modal-target="accountInformationModal2" data-modal-toggle="accountInformationModal2" class="inline-flex w-full items-center justify-center rounded-lg bg-[#ff9d6e] px-5 py-2.5 text-sm font-medium text-white  focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto ">

          <a href="commandes">Voir mes commandes</a>
        </button>
      </div>

    </div>



  </section>
  <?php include('footer.php'); ?>

</body>

</html>