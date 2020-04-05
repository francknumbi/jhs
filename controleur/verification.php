<?php
    //inclusion des fichiers concernes 
    include("../config/configuration.php");
    include("../modele/Evenements.php");
    include("../modele/Actualites.php");
    include("../modele/Annonces.php");
    include("../modele/Exhortations.php");
   // PAGE ADMINISTRATEUR*

    /*
            /*if(isset($_FILES)){
                $photo = $_FILES['photo']['name'];
                $photo_tmp = $_FILES['photo']['tmp_name'];
                $destination = '../upload/'.$photo;
                $copy=move_uploaded_file($photo_tmp, $destination);   
                $util=UTILISATEUR::Ajout($id,$login,$pwd,$role,$photo);
            }
            $event=Evenements::ajoutEvent('', $titre, $contenu, $date, 'ddd', 'franck');
*/


    if (empty($_POST)) {
        echo "Aucune donnée reçue";
    }
    else {
        if(isset($_POST['option'])){
            if($_POST['option']=='evenement'){
                $titre=$_POST['titre'];
                $contenu=$_POST['contenu'];
                $date=strftime('%A %d %B');
                $event=Evenements::ajoutEvent('', $titre, $contenu, $date, '', 'franck');
            }
            
            elseif($_POST['option']=='actualite') {        
                $titre=$_POST['titre'];
                $contenu=$_POST['contenu'];
                $date=strftime('%A %d %B');
                $actu=Actualites::ajoutActu('', $titre, $contenu, $date, 'kjk', 'franck');
                $post = print_r($_POST, true);
                file_put_contents("fr.log", $post);
            }
            elseif($_POST['option']=='annonce') {
                $titre=$_POST['titre'];
                $contenu=$_POST['contenu'];
                $date=strftime('%A %d %B');
                $annon=Annonces::ajoutAnnon('', $titre, $contenu, $date, '', 'franck');
            }
            elseif ($_POST['option']=='exhortation') {
                $titre=$_POST['titre'];
                $contenu=$_POST['contenu'];
                $date=strftime('%A %d %B');
                $exho=exhortations::ajoutExho('', $titre, $contenu, $date, '', 'franck');
            }
            else{
                $post = print_r($_POST, true);
                file_put_contents("fr.log", $post);
            }    
                 
        }      
    }

?>