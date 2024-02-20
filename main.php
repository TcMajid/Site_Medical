
<?php
require_once("head.html")
?>

    <title>Site médicale</title>
    
    <link rel="stylesheet" href="styles/main.css">
    
</head>

<body>
    <?php
    require_once("bandeau.html")
    ?>

    <div class="connexion">
        <div class="Fond_connexion">
            <div class="seconnecter">Se Connecter</div>
            <input type="text" name="Username" id="Username" placeholder="Username">
            <input type="text" name="Password" id="Password" placeholder="Password">
            <input type="submit" name="Login" id="Login" value="Login">
            <div class="compte">Pas de compte ?   <div class="compte1"><a href="Login.php"></a> Créez-en un !</div></div>
        </div>
    </div>

    <div class="corps1">
        <div class="text1">
            <div class="titre1">
                Un Suivi Complet sur Votre Santé
            </div>
            <br>
            <div class="texte1_1">
                Découvrez une approche holistique de votre bien-être avec nos outils de suivi de santé.
                Profitez d'analyses détaillées pour optimiser votre condition physique et mentale, et 
                vivez une vie plus épanouie avec des stratégies personnalisées.
            </div>
        </div>
        
        <img src="assests/images/Image_1_main.png" alt="image_1" height="450px">
    </div>



    <div class="corps2">
        <img src="assests/images/Image_2_main.png" alt="image_2" height="450px">
        <div class="text2">
            <div class="titre2">
                Des recettes de cuisines rapides et savoureuses
            </div>
            <br>
            <div class="texte2_1">
                Explorez un monde de saveurs avec nos recettes rapides et délicieuses, adaptées à tous les régimes.
                Nos plats simples et équilibrés sont conçus pour s'adapter à votre rythme de vie, tout en mettant 
                la nutrition à l'honneur.
            </div>
        </div>
    </div>


    <div class="corps1">
        <div class="text1">
            <div class="titre1">
                Des exercices de méditation
            </div>
            <br>
            <div class="texte1_1">
                Trouvez votre équilibre avec nos sessions de méditation guidées,
                pensées pour apaiser l'esprit et relâcher la tension. Courtes et efficaces,
                elles s'intègrent aisément dans votre routine pour une sérénité au quotidien.
            </div>
        </div>
        
        <img src="assests/images/Image_3_main.png" alt="image_1" height="350px">
    </div>

    <br><br><br><br><br>

    <div class="hr_main"></div>

    <br><br><br><br>

    <div class="advertissement">
        Avertissement Juridique
        <br><br>
        Ce site web est conçu à des fins éducatives et informatives uniquement.
        Les informations fournies ne doivent pas être utilisées pour le diagnostic ou 
        le traitement de conditions médicales, et ne doivent pas remplacer les conseils d'un professionnel
        de la santé qualifié. Nous ne sommes pas responsables de l'exactitude, de la fiabilité des informations fournies,
        ni des conséquences de l'utilisation de ces informations. Toujours consulter un médecin ou un autre professionnel 
        de la santé qualifié pour des questions liées à votre santé.
    </div>
    <br><br><br><br><br>
</body>