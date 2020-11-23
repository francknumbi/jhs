<?
    //definition des differents parametres de la connexion
    /*define("SERVEUR","localhost");
    define("DB","jhsdb");
    define("LOG","root");
    define("PWD","");
    define("CONNECTION", "mysql:host=".SERVEUR.";dbname=".DB.";"."charset=utf8");
    */
    define("SERVEUR","ec2-54-247-169-129.eu-west-1.compute.amazonaws.com");
    define("DB","da7u2htsam4e4o");
    define("LOG","bopfflrvqyucxn");
    define("PWD","9ece4a5bba66ee304151683121998bf3ae4b42aab3d3da3b9f62495ee9e4ed2f");
    define("PORT","5432");
    define("CONNECTION", "pgsql:host=".SERVEUR.";port=".PORT.";dbname=".DB);
    

    $db = parse_url(getenv("DATABASE_URL"));

    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["ec2-54-247-169-129.eu-west-1.compute.amazonaws.com"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));


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
 
