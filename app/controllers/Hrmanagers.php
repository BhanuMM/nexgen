<?php
class Hrmanagers extends Controller {

    public function __construct()
    {
        $this->hrModel = $this-> model('Hrmanager');        

    }

    public function dashboard(){

        $sc = $this->hrModel->getSessionCount();
        $ec = $this->hrModel->getEmployeeCount();

        $scf = $sc->sessionCount;
        $ecf = $ec->employeeCount;

        $data = array(
            'name' => '',
            'NIC' => '',
            'address' => '',
            'email' => '',
            'tpno' => '',
            'sessionCount' => $scf,
            'employeeCount' => $ecf
        );
        
        
        $this->view('hrmanagers/dashboard',$data);
    }
    public function addemployee(){

        $data = [
            'uname' => '',
            'psw' => '',
            'fname' => '',
            'email' => '',
            'dob' => '',
            'address' => '',
            'nic' => '',
            'tpno' => '',
            'uid' => '',
            'unameError' => '',
            'pswError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
            'uname' => trim($_POST['uname']),
            'psw' => trim($_POST['psw']),
            'fname' => trim($_POST['fname']),
            'email' => trim($_POST['email']),
            'dob' => trim($_POST['dob']),
            'address' => trim($_POST['address']),
            'nic' => trim($_POST['nic']),
            'tpno' => trim($_POST['tpno']),
            'uid' => 2,
            'unameError' => '',
            'pswError' => '',
        ];

        if(empty($data['uname'])){
            $data['unameError'] = "username can't be empty";
        }else if($this->hrModel->findUserName($data['uname'])){
            $data['unameError'] = 'Username already taken!';
        }
        
        if(empty($data['psw'])){
            $data['psw'] = "password can't be empty";
        }

        

        if(empty($data['unameError']) && empty($data['pswError'])){
            $data['psw'] = password_hash($data['psw'], PASSWORD_DEFAULT);

            if($this->hrModel->registerUser($data)){
                $result = $this->hrModel->getUserID($data);

                if($result){
                    $userId = $result->userID;
                    if($this->hrModel->registerEmployee($data, $userId)){
                        header('location: ' . URLROOT . '/Hrmanagers/employees');
                    }else{
                        die('Something Went Wrong!');
                    }
                }else{
                    die('Something Went Wrong!');
                }
                
            }else{
                die('Something Went Wrong!');
            }
        }


        }
        
        $this->view('hrmanagers/addemployee', $data);
    }


    public function employees(){

        $employees = $this->hrModel->getEmployeeDetails();

        $data = [
            'employees' => $employees,
        ];
       
        $this->view('hrmanagers/employees', $data);
    }
      
    public function sessions()
    {
        $sessions = $this->hrModel->getAllSessions();
        $data = array(
            'sessions' => $sessions,
        );


        $this->view('Hrmanagers/sessions', $data);
    }

    public function addTrainingSession()
    {
        $data = array(
            'title' => '',
            'date' => '',
            'time' => '',
            'venue' => '',
            'nameError' => '',
            'NICError' => '',
            'addressError' => '',
            'emailError' => '',
            'tpError' => '',
        );

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'title' => trim($_POST['sesTitle']),
                'date' => trim($_POST['sesDate']),
                'time' => trim($_POST['sesTime']),
                'venue' => trim($_POST['sesVenue']),

                'nameError' => '',
                'NICError' => '',
                'addressError' => '',
                'emailError' => '',
                'tpError' => '',
            );


            //validation
            if (empty($data['title'])) {
                $data['nameError'] = 'please enter the title';
            }
            if (empty($data['date'])) {
                $data['NICError'] = 'please enter the date';
            }
            if (empty($data['time'])) {
                $data['addressError'] = 'please enter the time';
            }
            if (empty($data['venue'])) {
                $data['emailError'] = 'please enter the venue';
            }


            if (empty($data['nameError']) && empty($data['NICError']) && empty($data['addressError']) && empty($data['emailError'])) {

                //register user from model
                if ($this->hrModel->addTrainingSession($data)) {
                    // redirect to login page;
                    header('location:' . URLROOT . '/hrmanagers/sessions');
                } else {
                    die('something went wrong');
                }

                // echo($data1);
            }
        } else {
            $data = array(
                'title' => '',
                'date' => '',
                'time' => '',
                'venue' => '',
                'nameError' => '',
                'NICError' => '',
                'addressError' => '',
                'emailError' => '',
                'tpError' => '',
            );
            
             
        }

       $this->view('hrmanagers/addTrainingSession', $data);
    }

    public function updateSession()
    {
        if (isset($_GET['SID'])) {
            $posts = $this->hrModel->getSessionByID($_GET['SID']);

            $data = array(
                'sessionID' => $_GET['SID'],
                'title' => $posts->title,
                'date' => $posts->date,
                'time' => $posts->time,
                'venue' => $posts->venue,
                'nameError' => '',
                'NICError' => '',
                'addressError' => '',
                'emailError' => '',
                'tpError' => '',
            );
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'sessionID' => trim($_POST['sessionID']),
                'title' => trim($_POST['sesTitle']),
                'date' => trim($_POST['sesDate']),
                'time' => trim($_POST['sesTime']),
                'venue' => trim($_POST['sesVenue']),

                'nameError' => '',
                'NICError' => '',
                'addressError' => '',
                'emailError' => '',
                'tpError' => '',
            );


            //validation
            if (empty($data['title'])) {
                $data['nameError'] = 'please enter the title';
            }
            if (empty($data['date'])) {
                $data['NICError'] = 'please enter the date';
            }
            if (empty($data['time'])) {
                $data['addressError'] = 'please enter the time';
            }
            if (empty($data['venue'])) {
                $data['emailError'] = 'please enter the venue';
            }


            if (empty($data['nameError']) && empty($data['NICError']) && empty($data['addressError']) && empty($data['emailError'])) {

                //register user from model
                if ($this->hrModel->updateTrainingSession($data)) {
                    // redirect to login page;
                    header('location:' . URLROOT . '/hrmanagers/sessions');
                } else {
                    die('something went wrong');
                }

                // echo($data1);
            }
        }
        $this->view('Hrmanagers/updateSession', $data);
    }

    public function searchEmployee()
    {
        $sid = $_GET['SID'];
        $attendEmployees = $this->hrModel->getAttendanceDetails($sid);

        $data = [
            'attendEmployees' => $attendEmployees,
        ];
        $this->view('hrmanagers/searchEmployee', $data);
    }

    public function markAttendence(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $input = trim($_POST['sesTitle']);
        $SID = trim($_POST['sid']);
        
        $posts = $this->hrModel->searchEmployees($input);
        $data = array(
            'key' => $input,
            'sessionID' => $SID,
            'sessions' => $posts,
            'attendanceError' => '',
        );
         
        $this->view('hrmanagers/markAttendence', $data);
    }else{
        $data = array(
            'name' => '',
            'NIC' => '',
            'address' => '',
            'email' => '',
            'tpno' => '',
        );

         $this->view('hrmanagers/markAttendence', $data);

    }
}

public function completeAttendance(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $key = trim($_POST['key']);
        $eid = trim($_POST['eid']);
        $sid = trim($_POST['sid']);
        $data = [
            'key' => $key,
            'sessionID' => $sid,
            'sessions' => '',
            'attendanceError' => '',
        ];

        if($this->hrModel->isAttendanceMarked($sid, $eid)){
            $data['attendanceError'] = "Already attendance Marked";
        }

        if(empty($data['attendanceError'])){
            if($this->hrModel->completeAttendance($sid, $eid)){
             header('location: ' . URLROOT . '/Hrmanagers/searchEmployee?SID='.$sid."");
        }else{
            die('Something went wrong');
        }
        }else{
            $data['sessions'] = $this->hrModel->searchEmployees($key);
            $this->view('hrmanagers/markAttendence', $data);
        }
        
        
        
}
}
   
}