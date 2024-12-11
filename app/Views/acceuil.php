<?php $session = session(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon traiteur</title>
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

<body class="font-sans leading-normal tracking-normal">
    <?php include('header.php'); ?>

    <section class=" bg-center h-screen" style="background-image: url('../public/assets/images/bg/bg_pages.png');">
        <div class="flex items-center justify-center h-full ">
            <div class="text-center text-white">
                <h2 class="text-5xl font-bold mb-6 text-white">Des Plats Raffinés pour Chaque Occasion</h2>
                <p class="text-lg mb-6">Commandez facilement en ligne et profitez de nos services traiteur.</p>
                <button class="text-white bg-[#ff9d6e] font-bold py-3 px-6 rounded"> <a href="plats">Découvrez nos Plats</a></button>
            </div>
        </div>
    </section>

    <section id="special" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
         
            <div class="mb-12 text-center">
                <span class="text-orange-500 uppercase tracking-widest text-sm">Nos offres Spéciales</span>
                <h2 class="text-4xl font-bold mt-4">Spécialité de Traiteur Royale</h2>
                <hr class="my-4 w-20 mx-auto border-t-2 border-black">

                <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">
                    Découvrez nos spécialités de traiteur, préparées avec soin pour sublimer vos événements et ravir vos invités.
                </p>

            </div>

            <div class="flex justify-center items-center">
                <div class="grid grid-cols-4  gap-0 max-w-6xl w-full">
                
                    <div class="bg-white shadow-lg p-4 w-full h-80 flex flex-col items-center text-center">
                        <div class="flex flex-col justify-center items-center h-full text-center">
                            <h3 class="text-xl font-semibold">Mon gateau</h3>
                            <p class="text-gray-600 mt-2 mb-4">Un menu  raffiné, alliant saveurs délicates et créations gourmandes pour émerveiller vos invités.</p>
                            <a class="text-[#b5a46d] " href="plats">Voir le menu</a>
                        </div>

                    </div>

                    <div class="bg-white shadow-lg h-80  w-full">
                        <img src="../public/assets/images/special/mongateau.jpg" alt="Image" class="w-full h-80  object-cover ">
                    </div>

                    <div class="bg-white shadow-lg p-4 w-full h-80  flex flex-col items-center text-center">
                        <div class="flex flex-col justify-center items-center h-full text-center">
                            <h3 class="text-xl  font-semibold">Mon Buffet</h3>
                            <p class="text-gray-600">Un buffet varié, parfait pour toutes vos occasions spéciales</p>
                            <a class="text-center " href="plats">Voir le menu</a>
                        </div>
                    </div>

                    <div class="bg-white shadow-lg h-80 w-full">
                        <img src="../public/assets/images/special/buffet.jpg" alt="Image" class="w-full h-80  object-cover ">
                    </div>

               
                    <div class="bg-white shadow-lg h-80  w-full">
                        <img src="../public/assets/images/special/menu.jpg" alt="Image" class="w-full h-80 object-cover ">
                    </div>
                    <div class="bg-white shadow-lg h-80 p-4 w-full flex flex-col items-center text-center">
                        <div class="flex flex-col justify-center items-center h-full text-center">
                            <h3 class="text-xl  font-semibold">Mon Menu</h3>
                            <p class="text-gray-600">Un menu savoureux, conçu pour satisfaire tous les palais.</p>
                            <a class="text-center " href="plat">Voir le menu</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg h-80 w-full">
                        <img src="../public/assets/images/special/pdejeuner.jpg" alt="Image" class="w-full h-80 object-cover ">
                    </div>
                    <div class="bg-white shadow-lg p-4 h-80 w-full flex flex-col items-center text-center">
                        <div class="flex flex-col justify-center items-center h-full text-center">
                            <h3 class="text-xl  font-semibold">Mon Petit-Déjeuner</h3>
                            <p class="text-gray-600">Un petit déjeuner gourmand pour bien commencer la journée.</p>
                            <a class="text-center " href="plat">Voir le menu</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section id="reserv" class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-1/2 flex items-center justify-center bg-[#f9f5ec] p-6">
                    <div class="text-center">
                        <img src="../public/assets/images/icons/serving-dish.svg" alt="Icone" class="w-16 md:w-20 mb-4 mx-auto">
                        <h1 class="text-xl md:text-2xl font-bold text-black">Faire une commande</h1>
                        <p class="text-sm md:text-lg text-gray-500 mt-2">
                            Ouvert de 8h00 à 18h00, tous les jours de la semaine
                        </p>
                        <a href="plats" class="btn font-bold py-3 px-6 rounded mt-6 block md:inline-block">
                            Commander
                        </a>
                    </div>
                </div>


                <div class="w-full lg:w-1/2">
                    <img src="../public/assets/images/banner/ban_reservation.jpg" alt="Image Reservation"
                        class="w-full h-64 lg:h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 my-12">
        <div class="mb-32 text-center">
            <span class="text-orange-500 uppercase tracking-widest text-sm">À PROPOS</span>
            <h2 class="text-4xl font-bold mt-4">NOTRE RAISON D'ÊTRE, NOS VALEURS ET NOTRE VISION.</h2>
            <hr class="my-4 w-20 mx-auto border-t-2 border-black">

            <p class="text-lg text-gray-600 mt-4 max-w-xl mx-auto">
                Nous nous engageons à offrir des produits et services qui apportent une réelle valeur ajoutée à nos clients.
            </p>
        </div>

        <div class="container mx-auto px-4">
 
            <div class="flex flex-wrap justify-center items-center space-y-6 lg:space-y-0">
            
                <div class="w-full lg:w-5/12 mb-8 lg:mb-0">
                    <span class="text-orange-500 uppercase tracking-widest text-sm">Notre histoire</span><br><br>
                    <h2 class="text-2xl lg:text-3xl text-gray-800 mb-4 text-center lg:text-left">
                        PREMIER TRAITEUR EN LIGNE AU MAROC
                    </h2>
                    <p class="text-gray-600 mb-6 text-center lg:text-left">
                        Nous répondons avec empressement aux demandes privées et corporatives, quel que soit l’importance de votre évènement.
                        <br><br>
                        Des mets savoureux, une présentation impeccable, un service parfait pour un évènement mémorable, voilà ce à quoi nous nous engageons. Inauguration, anniversaire, baptême, funérailles, My Traiteur vous offre un service à la hauteur de vos attentes. Chaque petit détail compte et vous êtes en droit d’exiger ce qu’il se fait de mieux. Voilà notre souci d’excellence.
                    </p>
                    <div class="flex items-center justify-center lg:justify-start space-x-8">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-0">IMANE ZORY</h4>
                            <p class="text-sm text-gray-500">Fondatrice</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-0">NOURA CHENNINIF</h4>
                            <p class="text-sm text-gray-500">Fondatrice</p>
                        </div>
                    </div>
                </div>

              
                <div class="w-full lg:w-6/12">
                    <div class="grid grid-cols-2 gap-4 max-w-6xl mx-auto">
                        <div class="col-span-1">
                            <a href="assets/img/offset/1.jpg" class="group relative block">
                                <img class="w-full h-60 object-cover" src="../public/assets/images/histoire/table.jpg" alt="Image 1" />
                                <span class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-xl">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-span-1 mt-20">
                            <a href="assets/img/offset/3.jpg" class="group relative block">
                                <img class="w-full h-40 object-cover" src="../public/assets/images/histoire/bastilla.jpeg" alt="Image 2" />
                                <span class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-xl">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-span-1">
                            <a href="assets/img/offset/3.jpg" class="group relative block">
                                <img class="w-full h-40 object-cover" src="../public/assets/images/histoire/buff.jpg" alt="Image 3" />
                                <span class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-xl">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="col-span-1">
                            <a href="assets/img/offset/1.jpg" class="group relative block">
                                <img class="w-full h-60 object-cover" src="../public/assets/images/histoire/table2.jpg" alt="Image 4" />
                                <span class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-xl">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
     
        </div>
    
    </section>

    <section class="mb-40">
        <div class="mb-12 text-center">
            <span class="bgtitle text-orange-500 uppercase tracking-widest text-sm inline-block relative">Services</span>
            <h2 class="text-4xl font-bold mt-4">Traiteur et Organisateur des Evènements</h2>
            <hr class="my-4 w-20 mx-auto border-t-2 border-black">
        </div>

        <div class="container mx-auto my-12 px-4 ">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
       
                <div class="space-y-8 text-right">
                    <div>
                        <h3 class="text-xl font-bold uppercase tracking-wide">Accueil</h3>
                        <p class="text-gray-500 text-sm">Équipes dynamiques dotées d'une grande aisance relationnelle</p>
                        <span class="text-gray-300 text-4xl hover:text-orange-500 font-bold">01</span>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold uppercase tracking-wide">Cuisine Marocaine</h3>
                        <p class="text-gray-500 text-sm">La signature Mon Traiteur</p>
                        <span class="text-gray-300 text-4xl hover:text-orange-500 font-bold">03</span>
                    </div>
                  
                    <div>
                        <h3 class="text-xl font-bold uppercase tracking-wide">Cake Design</h3>
                        <p class="text-gray-500 text-sm">Un moment unique, un design unique</p>
                        <span class="text-gray-300 text-4xl hover:text-orange-500 font-bold">05</span>
                    </div>
                </div>

           
                <div class="relative">
                    <div class="w-64 h-64 mx-auto bg-white drop-shadow-2xl rounded-full flex items-center justify-center">
                        <div class="text-center text-white space-y-2">
                            <img src="../public/assets/images/logo/logo.png" alt="">
                        </div>
                    </div>
                </div>

         
                <div class="space-y-8 text-left">
               
                    <div>
                        <h3 class="text-xl font-bold uppercase tracking-wide">Pâtisserie Marocaine</h3>
                        <p class="text-gray-500 text-sm">Le Maroc, le pays de toutes les saveurs</p>
                        <span class="text-gray-300 text-4xl hover:text-orange-500 font-bold">02</span>
                    </div>
            
                
                    <div>
                        <h3 class="text-xl font-bold uppercase tracking-wide">Décoration</h3>
                        <p class="text-gray-500 text-sm">Des scénographies à couper le souffle</p>
                        <span class="text-gray-300 text-4xl hover:text-orange-500 font-bold">04</span>
                    </div>
                  
                    <div>
                        <h3 class="text-xl font-bold uppercase tracking-wide">Sécurité</h3>
                        <p class="text-gray-500 text-sm">Agents de sécurité, agents de contrôle...</p>
                        <span class="text-gray-300 text-4xl hover:text-orange-500 font-bold">06</span>
                    </div>
                </div>
            </div>

         
            <div class="text-center mt-8">
                <button class="btn font-bold py-3 px-6 rounded mt-6 block md:inline-block">
                    <a href="services">Voir plus de services</a>
                </button>
            </div>
        </div>
    </section>


    <section class="mb-40">
        <div class="mb-12 text-center">
            <span class="bgtitle text-orange-500 uppercase tracking-widest text-sm inline-block relative">témoignages</span>
            <h2 class="text-4xl font-bold mt-4">Ce Que Disent Nos Clients À Propos de Nous</h2>
            <hr class="my-4 w-20 mx-auto border-t-2 border-black">
        </div>

        <div class="py-16 h-[400px] bg-cover bg-center relative" style="background-image: url('../public/assets/images/client/bg_client.jpg');">
            <div class="container mx-auto px-4 h-full">
                <div class="relative w-2/3 mx-auto h-full">
                    <div id="testimonial-slider" class="overflow-hidden h-full -mb-20">
                        <div class="flex transition-transform duration-500 h-full">
                       
                            <div class="w-full flex-shrink-0 p-4 h-full">
                                <div class="bg-white shadow-lg rounded-md p-6 text-center h-full flex flex-col justify-center">
                                    <p class="text-sm italic text-gray-600 mb-4">"Service exceptionnel, je recommande fortement !"</p>
                                    <h4 class="text-base font-semibold text-gray-800">- Karima - Sidi Bibi</h4>
                                </div>
                            </div>
                   
                            <div class="w-full flex-shrink-0 p-4 h-full">
                                <div class="bg-white shadow-lg rounded-md p-6 text-center h-full flex flex-col justify-center">
                                    <p class="text-sm italic text-gray-600 mb-4">"Merci beaucoup. La fête a été merveilleuse grâce à vous."</p>
                                    <h4 class="text-base font-semibold text-gray-800">- Fatima - Marrakech</h4>
                                </div>
                            </div>
                        
                            <div class="w-full flex-shrink-0 p-4 h-full">
                                <div class="bg-white shadow-lg rounded-md p-6 text-center h-full flex flex-col justify-center">
                                    <p class="text-sm italic text-gray-600 mb-4">"Je suis tellement content que je l'ai choisi pour mon événement, tout était super.!"</p>
                                    <h4 class="text-base font-semibold text-gray-800">- Mohammed - Agadir</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute  left-1/2 transform -translate-x-1/2 flex space-x-2">
                        <button class="dot bg-gray-400 w-3 h-3 rounded-full"></button>
                        <button class="dot bg-gray-400 w-3 h-3 rounded-full"></button>
                        <button class="dot bg-gray-400 w-3 h-3 rounded-full"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="border-b-black border">
    <div class="mb-20 text-center">
        <span class="text-orange-500 uppercase tracking-widest text-sm">Contactez-nous</span>
        <h2 class="text-4xl font-bold mt-4">Laissez un Commentaire ou Posez une Question.</h2>
        <hr class="my-4 w-20 mx-auto border-t-2 border-black">
    </div>

    <div class="max-w-2xl mx-auto">
        <form action="#" method="POST" class="bg-gray-100 p-8 shadow-lg">
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Nom</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
                </div>

                <div class="w-1/2">
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Téléphone</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
                </div>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]" required></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-[#ff9d6e] text-white px-6 py-2 font-semibold hover:bg-orange-600 focus:ring-2 focus:ring-[#ff9d6e] focus:border-[#ff9d6e]">Envoyer</button>
            </div>
        </form>
    </div>

    <button id="scrollToTop" class="w-16 h-16 bg-[#ff9d6e] rounded-full shadow-lg  fixed bottom-8 right-8 flex items-center justify-center text-white transition-all duration-300 hover:shadow-2xl hover:text-white hover:bg-[#ff9d6e]">
        ↑
    </button>

</section>


<?php include('footer.php'); ?>

    
    <script src="../public/assets/slider.js"></script>
    <script src="../public/assets/scroll.js"></script>


</body>

</html>