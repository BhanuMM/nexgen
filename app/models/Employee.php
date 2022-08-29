<?php
class Employee
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSessions()
    {
        $this->db->query('SELECT * FROM `trainingsession` WHERE date>=CURDATE() ORDER BY date;');

        $results = $this->db->resultSet();

        return $results;
    }

}