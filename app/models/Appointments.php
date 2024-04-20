<?php

namespace app\models;

use app\core\Model;

class Appointments
{
    use Model;

    protected $table = 'appointments';

    public function setDB($db)
    {
        $this->db = $db;
    }

    public function postAppointments($name, $number, $email, $date)
    {
        // Prepare and execute the SQL query to insert the appointment data
        $sql = "INSERT INTO $this->table (name, number, email, date) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssss", $name, $number, $email, $date);
        
        // Execute the query
        if ($stmt->execute()) {
            // Appointment saved successfully
            return true;
        } else {
            // Appointment saving failed
            return false;
        }
    }
}
