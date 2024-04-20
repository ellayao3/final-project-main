<?php

namespace app\controllers;
use app\models\Appointments; 

class AppointmentsController 
{
    public function getExperience() {
        $appointmentsModel = new Experience();
        header("Content-Type: application/json");
        $appointments = $appointmentseModel->getAllAppointments(); 
        echo json_encode($appointments);
        exit();
    }    

}