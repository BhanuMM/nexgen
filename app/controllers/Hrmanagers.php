<?php
class Hrmanagers extends Controller {
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
    public function editProfile(){
        $data = array(
            'name' => '',
            'NIC' => '',
            'address' => '',
            'email' => '',
            'tpno' => '',
        );
        
        
        $this->view('hrmanagers/editProfile',$data);
    }
      
}