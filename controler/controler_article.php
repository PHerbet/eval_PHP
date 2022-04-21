<?php
    /*---------------------------------------------
                    IMPORT
    ---------------------------------------------*/
    //importer la connexion à la bdd
    include '../utils/connect_bdd.php';
    //importer le model
    include '../model/model_article.php';
    //importer la vue
    include '../view/view_article.php';
    /*---------------------------------------------
                    TEST
    ---------------------------------------------*/
    
    // test pour vérifier si les champs du formulaire sont remplis 
        if (isset($_POST['name_art']) && isset($_POST['price_art']) 
        && $_POST['name_art'] != '' && $_POST['price_art'] != '' )
            {//Stocker les super globales POST dans des variables
                $name = $_POST['name_art'];
                $price = $_POST['price_art'];
                //appel de la fonction ajouter un user en BDD
                add_art($bdd, $name, $price);
                //message 
                echo "$name a été ajouté à la BDD";
            }//si champs vides
            else
            {
                echo "Veuillez compléter les champs du formulaire";
            }

?>