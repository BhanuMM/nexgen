<?php
class Hrmanagers extends Controller {

    public function __construct()
    {
        $this->hrModel = $this-> model('Hrmanager');        

    }

    public function dashboard(){
        $data = array(
            'name' => '',
            'NIC' => '',
            'address' => '',
            'email' => '',
            'tpno' => '',
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
      
}