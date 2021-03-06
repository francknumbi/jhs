<?
    class Exhortations{
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
        //methode ajout
        public static function ajoutExho($id,$titre,$contenu,$date,$image,$admin){
            try{
                 $connexion=Connexion::getConnexion();
                 $requette="INSERT INTO exhortations VALUES(?,?,?,?,?,?)";
                 $resultat=$connexion->prepare($requette);
                 $resultat->execute(array($id,$titre,$contenu,$date,$image,$admin));
                 var_dump($resultat);
            }
            catch(Exception $e){
                 die('Erreur: '.$e);
            }
        }
        //methode d'affichage des exhortations
        public static function  afficheExho(){
            try{
                $connexion=Connexion::getConnexion();
                $requette="SELECT * FROM exhortations";
                $resultat=$connexion->prepare($requette);
                $resultat->execute();
                if($resultat!=null){
                    while($obj=$resultat->fetch()){
                        $tableau[]=new Exhortations($obj['id'], $obj['titre'], $obj['contenu'], $obj['datePub'], $obj['image'], $obj['admin']);
                    }
                }
                return $tableau;

            }
            catch(Exception $e){
                die('Erreur: '.$e);
            }
        }


    }