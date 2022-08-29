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

    public function getAllSessions(){
            $this->db->query('SELECT * FROM trainingsession');

            $results = $this->db->resultSet();
            
            return $results;
        }

        public function addTrainingSession($data){
            $this->db -> query('INSERT INTO trainingsession(title,date,time,venue) VALUES(:title,:date,:time, :venue)');
            $this->db -> bind(':title',$data['title']);
            $this->db -> bind(':date',$data['date']);
            $this->db -> bind(':time',$data['time']);
            $this->db -> bind(':venue',$data['venue']);
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function updateTrainingSession($data){
            $this->db -> query('UPDATE trainingsession SET title = :title , date = :date , time = :time , venue = :venue WHERE sessionID =:ID');
            $this->db -> bind(':title',$data['title']);
            $this->db -> bind(':date',$data['date']);
            $this->db -> bind(':time',$data['time']);
            $this->db -> bind(':venue',$data['venue']);
            $this->db -> bind(':ID',$data['sessionID']);
            
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function getSessionByID($id){
            $this->db->query('SELECT * FROM trainingsession WHERE sessionID = :sessionID');
            $this->db -> bind(':sessionID',$id);

            $results = $this->db->single();
            return $results;
            
        }

        public function deleteSessionByID($id){
            $this->db->query('DELETE FROM trainingsession WHERE sessionID = :sessionID');
            $this->db -> bind(':sessionID',$id);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }

        public function deleteSession()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $this->hrmModel->deleteSessionByID($_GET['SID']);

            header('location:' . URLROOT . '/hrmanagers/sessions');
        }
    }

    public function searchEmployees($id){
            $this->db->query("SELECT * FROM employees WHERE employeeID LIKE '%".$id."%' OR fullName LIKE '%".$id."%' OR address LIKE '%".$id."%' OR NIC LIKE '%".$id."%' OR telephoneNo LIKE '%".$id."%'");
            
            //$this->db -> bind(':ID',$id);

            $results = $this->db->resultSet();
            return $results; 
        }

        public function completeAttendance($sid, $eid){
          $this->db->query('INSERT INTO sessionemployee (sessionID, employeeID) VALUES (:sid, :eid)');

          $this->db->bind(':sid', $sid);
          $this->db->bind(':eid', $eid);

          if($this->db->execute()){
            return true;
          }else{
            return false;
          }

        }

        
        public function isAttendanceMarked($sid, $eid){
          $this->db->query('SELECT * FROM sessionemployee WHERE sessionID=:sessionID AND employeeID=:employeeID');

          $this->db->bind(':sessionID', $sid);
          $this->db->bind(':employeeID', $eid);

          $count = $this->db->rowcount();

          if($count > 0){
            return true;
          }else{
            return false;
          }

        }

        public function getAttendanceDetails($sid){
          $this->db->query('SELECT `employees`.`employeeID`, `employees`.`fullName` FROM employees INNER JOIN sessionemployee ON `employees`.`employeeID` = `sessionemployee`.`employeeID` WHERE `sessionemployee`.`sessionID` = :sid');

          $this->db->bind(':sid', $sid);

          $results = $this->db->resultSet();

          return $results;
        }

        public function getSessionCount(){
          $this->db->query('SELECT COUNT(sessionID) AS sessionCount FROM trainingsession');

          $sc = $this->db->single();

          return $sc;
        }

        public function getEmployeeCount(){
          $this->db->query('SELECT COUNT(employeeID) AS employeeCount FROM employees');

          $ec = $this->db->single();

          return $ec;
        }
      }