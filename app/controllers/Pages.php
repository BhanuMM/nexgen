<?php
class Pages extends Controller {
    public function __construct() {
        $this->pageModel = $this->model('Page');
    }

    public function index() {
        $data =[
        'uname' => '',
        'psw' => '',
        'unameError' => '',
        'pswError' => ''
      ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //sanitize post data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'uname' => trim($_POST['uname']),
          'psw' => trim($_POST['psw']),
          'unameError' => '',
          'pswError' => ''
        ];

        //validate username
        if(empty($data['uname'])){
          $data['unameError'] = 'Please Enter the User Name';
        }

        //validate password
        if(empty($data['psw'])){
          $data['pswError'] = 'Please Enter the Password';
        }

        //if all errors are empty
        if(empty($data['unameError']) && empty($data['pswError'])){

          $loggedInUser = $this->pageModel->login($data);

          if($loggedInUser){
            $this->createUserSession($loggedInUser);
          }else{
            $data['pswError'] = 'Password or UserName Incorrect!';

            $this->view('pages/index', $data);
          }
        }

      }else{
        $data =[
          'uname' => '',
          'psw' => '',
          'unameError' => '',
          'pswError' => ''
        ];
      }

      $this->view('pages/index', $data);
    }



    public function createUserSession($user){
      session_start();
      $_SESSION['userID'] = $user->userID;
      $_SESSION['username'] = $user->username;
      $_SESSION['userRoleID'] = $user->userRoleID;

      if($_SESSION['userRoleID'] == 1){
        header('location: ' . URLROOT . '/hrmanagers/dashboard');
      }

      if($_SESSION['userRoleID'] == 2){
        header('location: ' . URLROOT . '/employees/dashbaord');
      }

    }

    public function logout(){
      unset($_SESSION['userID']);
      unset($_SESSION['username']);
      unset($_SESSION['userRoleID']);
      header('location: '. URLROOT . '/pages/index');
    }
   
    





}
