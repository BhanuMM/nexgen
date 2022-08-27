<?php
class Admins extends Controller {

    public function __construct()
    {
        
        $this->stockModel = $this-> model('Stock');        
        $this->farmerModel = $this-> model('Farmer');
        

    }
    public function login(){
        
        $data = array(
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        );
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data =array(
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => ''
            );
        

        // validation here
        if(empty($data['email'])){
            $data['emailError'] = 'please enter the email'; 
        }

        if(empty($data['password'])){
            $data['passwordError'] = 'please enter the password'; 
        }

        if (empty($data['passwordError']) && empty($data['emailError'])){
            
            $loggedInUser = $this->adminModel->login($data['email'],$data['password']);

            if($loggedInUser){
                $this->createUserSession($loggedInUser);
                header('location:'.URLROOT.'/admins/dashboard');
  
            }else{
                $data['passwordError'] = 'Password or username is incorrect. Please try again' ;

            }
        }
        }else{
            $data = array(
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => '',
                
            );
        }

        $this->view('Admins/login',$data);
        
    }
    public function createUserSession($admin){
   
        $_SESSION['AdminID']= $admin -> AID;
        $_SESSION['name'] = $admin -> name;
        $_SESSION['email'] = $admin -> email;
        
    }
   
    public function logout(){
        unset($_SESSION['AdminID']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        header('location:' .URLROOT. '/pages/index');
    }

    public function dashboard(){
        $data = array(
            'name' => '',
            'NIC' => '',
            'address' => '',
            'email' => '',
            'tpno' => '',
        );
        
        
        $this->view('admins/dashboard',$data);
    }







     public function editProfile(){
        
        $id=$_SESSION['AdminID'];
        $posts = $this->adminModel->getAdminByID($id);
        $data = array( 'posts' => $posts,
                        'name' => '',
                        'NIC' => '',
                        'address' => '',
                        'email' => '',
                        'tpno' => '',
                        'nameError' => '',
                        'NICError' => '',
                        'addressError' => '',
                        'emailError' => '',
                        'tpError' => '',
        );
        
       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = array(
                'posts' => $posts,
                'name' => trim($_POST['name']),
                'NIC' => trim($_POST['nic']),
                'address' => trim($_POST['address']),
                'email' => trim($_POST['email']),
                'tpno' => trim($_POST['tpno']),
                'nameError' => '',
                'NICError' => '',
                'addressError' => '',
                'emailError' => '',
                'tpError' => '',
            );
            
            
            //validation
            if(empty($data['name'])){
                $data['nameError'] = 'please enter the name'; 
            }
            if(empty($data['NIC'])){
                $data['NICError'] = 'please enter the NIC'; 
            }
            if(empty($data['address'])){
                $data['addressError'] = 'please enter the address'; 
            }
            if(empty($data['email'])){
                $data['emailError'] = 'please enter the email'; 
            }
            if(empty($data['tpno'])){
                $data['tpError'] = 'please enter the tp number'; 
            }
            
            
            if(empty($data['nameError']) && empty($data['NICError']) && empty($data['addressError']) && empty($data['emailError']) && empty($data['tpError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])){
            
            //register user from model
            if($this->adminModel -> updateProfile($data,$id)){
               // redirect to login page;
               header('location:' . URLROOT. '/admins/editProfile'); 
            }else{
                die('something went wrong');
            }
           
            // echo($data1);
            }
        }else{
            $data = array( 'posts' => $posts,
                        'name' => '',
                        'NIC' => '',
                        'address' => '',
                        'email' => '',
                        'tpno' => '',
                        'nameError' => '',
                        'NICError' => '',
                        'addressError' => '',
                        'emailError' => '',
                        'tpError' => '',
        );
              
        }
        $this->view('admins/editProfile',$data);
    }
}   
