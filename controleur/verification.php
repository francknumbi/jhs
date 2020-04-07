<?php
    //inclusion des fichiers concernes 
    include("../config/configuration.php");
    include("../modele/Evenements.php");
    include("../modele/Actualites.php");
    include("../modele/Annonces.php");
    include("../modele/Exhortations.php");

   /////// PAGE ADMINISTRATEUR /////////

   // recuperation des elements dans la BDD

   if (!empty($_GET)) {
       //recuperation des infos a modifier ou a supprimer dans la table evenements
        if ($_REQUEST['option']=='evenement') {
            if($_REQUEST['fonc']=='modifier') {
                $event=Evenements::afficheEven();
                echo "reussite";
                return json_encode($event);
            }
            elseif($_REQUEST['fonc']=='supprimer') {
                $event=Evenements::afficheEven();
                return json_encode($event);
            }
        }
        //recuperation des infos a modifier ou a supprimer dans la table actualites
        elseif($_REQUEST['option']=='actualite') {
            if($_REQUEST['fonc']=='modifier') {
                $actu=Actualites::afficheActu();
                return json_encode($actu);
            }
            elseif($_REQUEST['fonc']=='supprimer') {
                $actu=Actualites::afficheActu();
                return json_encode($actu);
            }
        }
        //recuperation des infos a modifier ou a supprimer dans la table annonces
        elseif($_REQUEST['option']=='annonce') {
            if($_REQUEST['fonc']=='modifier') {
                $annon=Annonces::afficheAnnon();
                return json_encode($annon);
            }
            elseif($_REQUEST['fonc']=='supprimer') {
                $annon=Annonces::afficheAnnon();
                return json_encode($annon);
            }
        }
        else {
            var_dump($_REQUEST);
        }
    }
// Envoi des infos dans la BDD
    if (isset($_POST['option']) && isset($_FILES['image'])) {
        //insertion des infos dans la table evenements
        if($_POST['option']=='evenement'){
            $titre=$_POST['titre'];
            $contenu=$_POST['contenu'];
            $date=strftime('%A %d %B');
            $image = $_FILES['image']['name'];
            $photo_tmp = $_FILES['image']['tmp_name'];
            $destination = '../upload/'.$image;
            $copy=move_uploaded_file($photo_tmp, $destination);               
            $event=Evenements::ajoutEvent('', $titre, $contenu, $date, $image, 'franck');
        }
        //insertion des infos dans la table actualites
        elseif($_POST['option']=='actualite') {        
            $titre=$_POST['titre'];
            $contenu=$_POST['contenu'];
            $date=strftime('%A %d %B');
            $image = $_FILES['image']['name'];
            $photo_tmp = $_FILES['image']['tmp_name'];
            $destination = '../upload/'.$image;
            $copy=move_uploaded_file($photo_tmp, $destination);
            $actu=Actualites::ajoutActu('', $titre, $contenu, $date, $image, 'franck');
            $post = print_r($_POST, true);
            file_put_contents("fr.log", $post);
        }
        //insertion des infos dans la table annonces
        elseif($_POST['option']=='annonce') {
            $titre=$_POST['titre'];
            $contenu=$_POST['contenu'];
            $date=strftime('%A %d %B');
            $image = $_FILES['image']['name'];
            $photo_tmp = $_FILES['image']['tmp_name'];
            $destination = '../upload/'.$image;
            $copy=move_uploaded_file($photo_tmp, $destination);
            $annon=Annonces::ajoutAnnon('', $titre, $contenu, $date, $image, 'franck');
        }
        //insertion des infos dans la table exhortations
        elseif ($_POST['option']=='exhortation') {
            $titre=$_POST['titre'];
            $contenu=$_POST['contenu'];
            $date=strftime('%A %d %B');
            $image = $_FILES['image']['name'];
            $photo_tmp = $_FILES['image']['tmp_name'];
            $destination = '../upload/'.$image;
            $copy=move_uploaded_file($photo_tmp, $destination);
            $exho=exhortations::ajoutExho('', $titre, $contenu, $date, $image, 'franck');
        }
           
                 
    }
    

?>