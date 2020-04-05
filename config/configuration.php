<?
    //definition des differents parametres de la connexion
    define("SERVEUR","localhost");
    define("DB","jhs_db");
    define("LOG","root");
    define("PWD","");
    define("CONNECTION", "mysql:host=".SERVEUR.";dbname=".DB.";"."charset=utf8");

    class Connexion{
        private $connection;
        public function getConnexion(){
            try{
                $connection=new PDO(CONNECTION,LOG,PWD);
                return $connection;
            }
            catch(Exception $e){
                die('Erreur :'.$e->getMessage());
            }
        }
    }
 
