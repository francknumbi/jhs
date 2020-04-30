<?
    class Annonces{
        private $id;
        private $titre;
        private $contenu;
        private $datePub;
        private $image;
        private $admin;

        public function __construct($titre,$contenu,$datePub,$image,$admin)
        {
            $this->titre=$titre;
            $this->contenu=$contenu;
            $this->datePub=$datePub;
            $this->image=$image;
            $this->admin=$admin;
        }

        public function getId(){
            return $this->id;
        }
        public function getTitre(){
            return $this->titre;
        }
        public function getContenu(){
            return $this->contenu;
        }
        public function getDatePub(){
            return $this->datePub;
        }
        public function getImage(){
            return $this->image;
        }
        public function getAdmin(){
            return $this->admin;
        }
        //methode d'ajout d'annonces
        public static function ajoutAnnon($id,$titre,$contenu,$date,$image,$admin){
            try{
                 $connexion=Connexion::getConnexion();
                 $requette="INSERT INTO annonces VALUES(?,?,?,?,?,?)";
                 $resultat=$connexion->prepare($requette);
                 $resultat->execute(array($id,$titre,$contenu,$date,$image,$admin));
            }
            catch(Exception $e){
                 die('Erreur: '.$e);
            }
        }
        //methode d'affiche d'annonces
        public static function  afficheAnnon(){
            try{
                $connexion=Connexion::getConnexion();
                $requette="SELECT * FROM annonces";
                $resultat=$connexion->prepare($requette);
                $resultat->execute();
                if($resultat!=null){
                    while($obj=$resultat->fetch()){
                        $tableau[]=new Annonces($obj['id'], $obj['titre'], $obj['contenu'], $obj['datePub'], $obj['image'], $obj['admin']);
                    }
                }
                return $tableau;

            }
            catch(Exception $e){
                die('Erreur: '.$e);
            }
        }
        

    }