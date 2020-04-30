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
                foreach($event as $obj){
                    $titre=$obj->getTitre();
                    $contenu=$obj->getContenu();
                    $datePub=$obj->getDatePub();
                    $image=$obj->getImage();
                    $identif=$obj->getId();
                
                echo("
                <div class=\"col s12 m4 l4\" >
                    <div class=\"card z-depth-3\">
                        <div class=\"card-image\">
                            <img src=\"../upload/$image\">
                            <span class=\"card-title\">$titre</span>
                            </div>
                        <div class=\"card-content\">
                            <p>
                                $contenu
                            </p>
                        </div>
                        <div class=\"card-action\">
            
                            <a class=\"waves-effect waves-light btn-small\" style=\"background-color: red;\"><i class=\"material-icons white-text\">edit</i></a>
                        </div>
                    </div>
                </div>
                ");
                }
                
            }
            elseif($_REQUEST['fonc']=='supprimer') {
                $event=Evenements::afficheEven();
                foreach($event as $obj){
                    $titre=$obj->getTitre();
                    $contenu=$obj->getContenu();
                    $datePub=$obj->getDatePub();
                    $image=$obj->getImage();
                    $identif=$obj->getId();
                
                echo("
                <div class=\"col s12 m4 l4\" >
                    <div class=\"card z-depth-3\">
                        <div class=\"card-image\">
                            <img src=\"../upload/$image\">
                            <span class=\"card-title\">$titre</span>
                            </div>
                        <div class=\"card-content\">
                            <p>
                                $contenu
                            </p>
                        </div>
                        <div class=\"card-action\">
            
                            <a class=\"waves-effect waves-light btn-small\" style=\"background-color: red;\"><i class=\"material-icons white-text\">clear</i></a>
                        </div>
                    </div>
                </div>
                ");
                }
            }
        }
        //recuperation des infos a modifier ou a supprimer dans la table actualites
        elseif($_REQUEST['option']=='actualite') {
            if($_REQUEST['fonc']=='modifier') {
                $actu=Actualites::afficheActu();
                foreach($actu as $obj){
                    $titre=$obj->getTitre();
                    $contenu=$obj->getContenu();
                    $datePub=$obj->getDatePub();
                    $image=$obj->getImage();
                    $identif=$obj->getId();
                
                echo("
                <div class=\"col s12 m4 l4\" >
                    <div class=\"card z-depth-3\">
                        <div class=\"card-image\">
                            <img src=\"../upload/$image\">
                            <span class=\"card-title\">$titre</span>
                            </div>
                        <div class=\"card-content\">
                            <p>
                                $contenu
                            </p>
                        </div>
                        <div class=\"card-action\">
            
                            <a class=\"waves-effect waves-light btn-small\" style=\"background-color: red;\"><i class=\"material-icons white-text\">edit</i></a>
                        </div>
                    </div>
                </div>
                ");
                }
            }
            elseif($_REQUEST['fonc']=='supprimer') {
                $actu=Actualites::afficheActu();
                foreach($actu as $obj){
                    $titre=$obj->getTitre();
                    $contenu=$obj->getContenu();
                    $datePub=$obj->getDatePub();
                    $image=$obj->getImage();
                    $identif=$obj->getId();
                
                echo("
                <div class=\"col s12 m4 l4\" >
                    <div class=\"card z-depth-3\">
                        <div class=\"card-image\">
                            <img src=\"../upload/$image\">
                            <span class=\"card-title\">$titre</span>
                            </div>
                        <div class=\"card-content\">
                            <p>
                                $contenu
                            </p>
                        </div>
                        <div class=\"card-action\">         
                            <a class=\"waves-effect waves-light btn-small\" style=\"background-color: red;\"><i class=\"material-icons white-text\">clear</i></a>
                        </div>
                    </div>
                </div>
                ");
                }
            }
        }
        //recuperation des infos a modifier ou a supprimer dans la table annonces
        elseif($_REQUEST['option']=='annonce') {
            if($_REQUEST['fonc']=='modifier') {
                $annon=Annonces::afficheAnnon();
                foreach($annon as $obj) {
                    $titre=$obj->getTitre();
                    $contenu=$obj->getContenu();
                    $datePub=$obj->getDatePub();
                    $image=$obj->getImage();
                    $identif=$obj->getId();
                echo("
                    <div class=\"col s12 m6\">
                        <div class=\"card horizontal\">
                            <div class=\"card-image\">
                                <img src=\"../upload/$image\">
                            </div>
                            <div class=\"\" style=\"margin-left:3% ;\">
                                <div class=\"header titreAnnon\" >$titre</div>
                                $contenu
                                <a class=\"waves-effect waves-light \">LIRE PLUS</a>
                            </div>
                        </div>
                    </div>
                ");
                }
            }
            elseif($_REQUEST['fonc']=='supprimer') {
                $annon=Annonces::afficheAnnon();
                foreach($annon as $obj) {
                    $titre=$obj->getTitre();
                    $contenu=$obj->getContenu();
                    $datePub=$obj->getDatePub();
                    $image=$obj->getImage();
                    $identif=$obj->getId();
                
                echo("
                <div class=\"col s12 m4 l4\" >
                    <div class=\"card z-depth-3\">
                        <div class=\"card-image\">
                            <img src=\"../upload/$image\">
                            <span class=\"card-title\">$titre</span>
                            </div>
                        <div class=\"card-content\">
                            <p>
                                $contenu
                            </p>
                        </div>
                        <div class=\"card-action\">
            
                            <a class=\"waves-effect waves-light btn-small\" style=\"background-color: red;\"><i class=\"material-icons white-text\">edit</i></a>
                        </div>
                    </div>
                </div>
                ");
                }
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