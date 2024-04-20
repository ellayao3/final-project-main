<?php

namespace app\controllers;
use app\models\Appointments; 

class AppointmentsController 
{
    public function addAppointments() {
        $appointmentsModel = new Appointments();
        header("Content-Type: application/json");
        $appointments = $appointmentsModel->addAppointments(); 
        echo json_encode($appointments);
        exit();
    }    

}