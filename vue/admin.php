<?php include('../modele/entete.php');?>

<body>
    <div class="row">
        
        <div class="col s12 m4 l3">
            <!-- le sidenav ou la barre laterale--> 
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li><div class="user-view">
                <div class="background">
                    <img src="../images/bg.jpg">
                </div>
                <a href="#user"><img class="circle" src="../images/IMG_20180101_112513930.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div></li>
                <li>
                <a  id="ajout" class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">add</i> Ajouter</a>

                <!-- la structure dropdown -->
                <ul id='dropdown1' class='dropdown-content teal accent-4'>
                  <li><a class="white-text event" href="#" ><i class="material-icons white-text">event</i>Evenement</a>  </li>
                  <li><a href="#!" class="white-text actu"><i class="material-icons white-text">public</i>Actualites</a></li>
                  <li><a href="#!" class="white-text annon"><i class="material-icons white-text"></i>Annonces</a></li>
                </ul>
              </li>
              <li>
                  <a id="modifier" class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">edit</i> Modifier</a>
  
                  <!-- la structure dropdown -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!" class="white-text event"><i class="material-icons white-text">event</i>Evenement</a></li>
                    <li><a href="#!" class="white-text actu"><i class="material-icons white-text">public</i>Actualites</a></li>
                    <li><a href="#!" class="white-text annon"><i class="material-icons white-text"></i>Annonces</a></li>
                  </ul>
              </li>
              <li>
                  <a id="supprimer" class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">clear</i> Supprimer</a>
  
                  <!-- la structure dropdown -->
                  <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!" class="white-text event"><i class="material-icons white-text">event</i>Evenement</a></li>
                  <li><a href="#!" class="white-text actu"><i class="material-icons white-text">public</i>Actualites</a></li>
                  <li><a href="#!" class="white-text annon"><i class="material-icons white-text"></i>Annonces</a></li>
                  </ul>
              </li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        </div>

        <div class="col s12 m8 l9"> 
            <!--le formulaire-->
            <h4 class="center" id="libele">Ajouter Evenement</h4>
            <form id="formAjout" enctype="multipart/form-data"  name="formAjout" class="col s12" method="POST" style="padding-right: 25px;padding-left: 25px" >
                
                <div class="row">
                    <div class="input-field col s12">
                    <input id="Titre" name="titre" type="text" class="validate">
                    <label for="Titre">Titre</label>
                    </div>

                </div>
                <div class="row">
                    <div class="row">
                            <div class="input-field col s12">
                            <textarea id="contenu" name="contenu" class="materialize-textarea"></textarea>
                            <label for="contenu">Contenu</label>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Image</span>
                            <input type="file" name="image">
                        </div>
                        <div class="file-path-wrapper">
                            <input id="image" class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input type="text" id="option" name="option" style="display:none">
                </div>
                <div class="row">
                    <div class="footer">
                        
                        <!--<a type="submit" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons right blue-text">send</i>Publier</a>
                        -->
                    
                    </div>
                </div>
                <input type="submit" value="Envoyer" class="btn">
            </form>
        </div>
        <span id="message" class="center"></span>
    </div>
    <span id="fonchoix" style="display: none"></span>


</body>
<?php include("../modele/pied.php");?>