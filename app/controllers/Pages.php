<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Admin');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('about');
    }

   
    





}
