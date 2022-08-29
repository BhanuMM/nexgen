<?php
class Employees extends Controller
{
    public function __construct()
    {
        $this->employeeModel = $this->model('Employee');
    }
    public function dashboard()
    {
        $sessions = $this->employeeModel->getAllSessions();
        $data = array(
            'sessions' => $sessions,
        );
        $this->view('employees/dashboard', $data);
    }

   


   
 
}