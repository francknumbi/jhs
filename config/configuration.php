<?
    //definition des differents parametres de la connexion
    /*define("SERVEUR","localhost");
    define("DB","jhsdb");
    define("LOG","root");
    define("PWD","");
    define("CONNECTION", "mysql:host=".SERVEUR.";dbname=".DB.";"."charset=utf8");
    
    define("SERVEUR","ec2-54-247-169-129.eu-west-1.compute.amazonaws.com");
    define("DB","da7u2htsam4e4o");
    define("LOG","bopfflrvqyucxn");
    define("PWD","9ece4a5bba66ee304151683121998bf3ae4b42aab3d3da3b9f62495ee9e4ed2f");
    define("PORT","5432");
    define("CONNECTION", "pgsql:host=".SERVEUR.";port=".PORT.";dbname=".DB);
    */

    


    class Connexion{
        private $connection;
        public function getConnexion(){
            try{
                //$connection=new PDO(CONNECTION,LOG,PWD);
                $db = parse_url(getenv("postgres://bopfflrvqyucxn:9ece4a5bba66ee304151683121998bf3ae4b42aab3d3da3b9f62495ee9e4ed2f@ec2-54-247-169-129.eu-west-1.compute.amazonaws.com:5432/da7u2htsam4e4o"));
                $connection = new PDO("pgsql:" . sprintf(
                    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                    $db["ec2-54-247-169-129.eu-west-1.compute.amazonaws.com"],
                    $db["5432"],
                    $db["bopfflrvqyucxn"],
                    $db["9ece4a5bba66ee304151683121998bf3ae4b42aab3d3da3b9f62495ee9e4ed2f"],
                    ltrim($db["postgres://bopfflrvqyucxn:9ece4a5bba66ee304151683121998bf3ae4b42aab3d3da3b9f62495ee9e4ed2f@ec2-54-247-169-129.eu-west-1.compute.amazonaws.com:5432/da7u2htsam4e4o"], "/")
                    //$db=["da7u2htsam4e4o"]
                ));
                return $connection;
            }
            catch(Exception $e){
                die('Erreur :'.$e->getMessage());
            }
        }
    }
 
