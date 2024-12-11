<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Mon traiteur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
 
 <section class="bg-cover bg-center h-96" style="background-image: url('../public/assets/images/bg/bg_pages.png');">
    <div class="flex items-center justify-center h-full bg-opacity-50">
        <div class="text-center text-white">
            <h2 class="text-5xl font-bold mb-6 text-white">Contact</h2>
            <p class="text-lg mb-6">Acceuil | Contact</p>
        </div>
    </div>
</section>

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13766.718334252462!2d-9.536378160449182!3d30.38845520000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sagadir%20bay%20traiteir!5e0!3m2!1sfr!2sma!4v1733154086493!5m2!1sfr!2sma" class="w-full" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    

    <div class="flex flex-col lg:flex-row justify-center text-white space-y-6 lg:space-y-0 lg:space-x-12 mt-12 mb-20">

        <div class="text-center bg-[#072b31] p-6 lg:p-10 text-lg">
            <i class="fa-solid fa-house text-2xl mb-3"></i>
            <h3 class="font-semibold text-xl text-[#ff9d6e]">Adresse</h3>
            <p>Hay Salam, Agadir 80650</p>
        </div>

        <div class="text-center bg-[#072b31] p-6 lg:p-10 text-lg">
            <i class="fa-solid fa-phone text-2xl mb-3"></i>
            <h3 class="font-semibold text-xl text-[#ff9d6e]">Téléphone</h3>
            <p>+212 123 456 789</p>
        </div>
      
        <div class="text-center bg-[#072b31] p-6 lg:p-10 text-lg">
            <i class="fa-solid fa-envelope text-2xl mb-3"></i>
            <h3 class="font-semibold text-xl text-[#ff9d6e]">Email</h3>
            <p>traiteur.royale@gmail.com</p>
        </div>
    </div>
</section>

<section >
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


<?php include("footer.php") ?>
    <script src="../public/assets/scroll.js"></script>
</body>
</html>