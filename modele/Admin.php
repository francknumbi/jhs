<?
    class Admin{
        private $id;
        private $login;
        private $pwd;
        private $image;
        private $niveau;

        public function __construct($login,$pwd,$image,$niveau)
        {
            $this->login=$login;
            $this->pwd=$pwd;
            $this->image=$image;
            $this->niveau=$niveau;
            
        }
        public function getLogin(){
            return $this->login;
        }
        public function getPwd(){
            return $this->pwd;
        }
        public function getImage(){
            return $this->image;
        }
        public function getNiveau(){
            return $this->niveau;
        }

    }