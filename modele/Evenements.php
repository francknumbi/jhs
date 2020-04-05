<?
    class Evenements{
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
        public static function ajoutEvent($id,$titre,$contenu,$date,$image,$admin){
           try{
                $connexion=Connexion::getConnexion();
                $requette="INSERT INTO evenements VALUES(?,?,?,?,?,?)";
                $resultat=$connexion->prepare($requette);
                $resultat->execute(array($id,$titre,$contenu,$date,$image,$admin));
                var_dump($resultat);
           }
           catch(Exception $e){
                die('Erreur: '.$e);
           }
        }
        public static function recupEvent(){
            try{
                $connexion=Connexion::getConnexion();
                $requette='SELECT * FROM admin';
                $resultat=$connexion->prepare($requette);
                $resultat->execute();
           }
           catch(Exception $e){
                die('Erreur: '.$e);
           }
        }
        

        
    }