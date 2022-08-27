<?php 
    class Hrmanager{
        private $db;

        public function __construct()
        {
            $this->db= new Database;
        }
        

        public function registerUser($data){
      //prepared statement
      $this->db->query('INSERT INTO users (userRoleID, username, password)
       VALUES (:userRoleID, :username, :password)');

       //bind values
       $this->db->bind(':userRoleID', $data['uid']);
       $this->db->bind(':username', $data['uname']);
       $this->db->bind(':password', $data['psw']);
       
       //execute function
       if($this->db->execute()){
         return true;
       }else{
         return false;
       }
       
    }

    public function getUserID($data){
        $this->db->query('SELECT userID FROM users WHERE username= :username');

         $this->db->bind(':username', $data['uname']);

         $result = $this->db->single();

         return $result;
    }

    public function registerEmployee($data, $userId){
      //prepared statement
      $this->db->query('INSERT INTO employees (userID, fullName, email, DOB, address, NIC, telephoneNO)
       VALUES (:userID, :fullName, :email, :DOB, :address,  :NIC, :telephoneNo)');

       //bind values
        $this->db->bind(':userID', $userId);
       $this->db->bind(':fullName', $data['fname']);
       $this->db->bind(':email', $data['email']);
       $this->db->bind(':DOB', $data['dob']);
       $this->db->bind(':address', $data['address']);
       $this->db->bind(':NIC', $data['nic']);
       $this->db->bind(':telephoneNo', $data['tpno']);
      
       
       //execute function
       if($this->db->execute()){
         return true;
       }else{
         return false;
       }
       
    }

    public function findUserName($uname){
      $this->db->query('SELECT * FROM users WHERE username= :uname');

      $this->db->bind(':uname', $uname);

      if($this->db->rowCount() > 0){
        return true;
      }else{
        return false;
      }
    }


    public function getEmployeeDetails(){
      $this->db->query('SELECT `users`.`username`, employees.* FROM users INNER JOIN employees ON `users`.`userID` = `employees`.`userID`');

      $results = $this->db->resultSet();

      return $results;
    }

      }