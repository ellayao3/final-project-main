<?php
namespace app\controllers;

use app\core\Controller;
use app\models\Appointments;

class AppointmentsController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new Appointments(); 
    }

    public function postAppointments()
    {
        // Retrieve form data from the POST request
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $date = $_POST['date'];

        // Set the database connection for the model
        $this->model->setDB($this->getDb());

        // Insert form data into the database
        $this->model->saveAppointments($name, $number, $email, $date);

        // Inserting into the database is completed for appointments
        // Now, you can insert the same data into the contact form table
        $this->model->saveAppointmentsInfo($name, $email, $number, $date);
    }
}
?>
