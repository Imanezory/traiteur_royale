<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Site Traiteur</title>

  <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: "PT Serif", serif;
    }
  </style>
</head>

<body class="text-black">
  <header class='flex border-b sticky top-0 bg-white font-sans min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-around px-10 py-3 gap-4 w-full'>
      <div style="width: 110px; height: 110px;">
        <a href="javascript:void(0)">
          <img src="<?= base_url('assets/images/logo/Logo.png'); ?>" alt="logo" style="width: 100%; height: 100%; object-fit: contain;" />
        </a>
      </div>

      <div id="collapseMenu"
        class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">

        <ul class="lg:flex lg:gap-x-10 lg:px-10 lg:space-y-0 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-full max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
          <li class="mb-6 hidden max-lg:block">
            <a href="javascript:void(0)">
              <img src="<?= base_url('assets/images/logo/Logo.png'); ?>" alt="logo" class="w-36" />
            </a>
          </li>
     

          <li class="group max-lg:border-b max-lg:py-3 relative">
            <a href="afficher_plats" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold lg:hover:fill-[#ff9d6e] block">
              Nos Plats
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
              </svg>
            </a>
            <ul class="absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500">
               <li class="border-b py-2 "><a href="insererplat" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold block">Ajout</a></li>
            </ul>
            
          </li>




          <li class="group max-lg:border-b max-lg:py-3 relative">
            <a href="afficher_clients" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold lg:hover:fill-[#ff9d6e] block">
              Nos Clients
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
              </svg>
            </a>
            <ul class="absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500">
               <li class="border-b py-2 "><a href="<?= base_url('ajout_client'); ?>" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold block">Ajout</a></li>
            </ul>
          </li>
        
          <li class="max-lg:border-b max-lg:py-3">
            <a href="afficher_commandes" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold block">Commandes</a>
          </li>
       
          <?php if ($session->get('logged_in')): ?>
            <li class="group max-lg:border-b max-lg:py-2 relative">
              <a href="javascript:void(0)" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold lg:hover:fill-[#ff9d6e] block">
                <?= esc($session->get('user')['nom']); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block" viewBox="0 0 24 24">
                  <path d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" data-name="16" data-original="#000000" />
                </svg>
              </a>
              <ul class="absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500">
                <?php if (session('role') !== 'admin'): ?>
                  <li class="border-b py-2">
                    <a href="<?= base_url('moncompte'); ?>" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold block">
                      <i class="fa-solid fa-user"></i> Mon compte
                    </a>
                  </li>
                <?php endif; ?>
                <li class="border-b py-2 "><a href="<?= base_url('deconnecter'); ?>" class="hover:text-[#ff9d6e] text-black text-[15px] font-bold block"><i class="fa-solid fa-right-from-bracket"></i> Déconnecter</a></li>
              </ul>
            </li>
          <?php else: ?>
            <li class="max-lg:border-b max-lg:py-3 lg:ml-auto">
              <a href="connecter" class="bg-[#072b31] -mt-2 text-white rounded-full px-6 py-2 transition duration-300 max-lg:w-full text-center hidden md:block">
                Se Connecter
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>



    <button id="sidebar-toggle" class="lg:hidden -ml-10 border-none  text-black  rounded">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M3 12h18M3 6h18M3 18h18"></path>
      </svg>
    </button>
  </header>

  <script>
    document.getElementById("sidebar-toggle").addEventListener("click", function() {
      document.getElementById("sidebar").classList.toggle("translate-x-0");
      document.getElementById("sidebar").classList.toggle("-translate-x-full");
    });

    document.getElementById("toggleClose").addEventListener("click", function() {
      document.getElementById("collapseMenu").classList.add("hidden");
    });
  </script>

</body>

</html>