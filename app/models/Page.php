<?php 
    class Page{
        private $db;

        public function __construct()
        {
            $this->db= new Database;
        }

        public function login($data){
      $this->db->query('SELECT * FROM users WHERE username = :username');

      //bind values
      $this->db->bind(':username', $data['uname']);

      $row = $this->db->single();

      $hasedPassword = $row->password;

      if(password_verify($data['psw'], $hasedPassword)){
        return $row;
      }else{
        return false;
      }

    }

      }