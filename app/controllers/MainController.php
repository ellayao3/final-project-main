<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Appointments;
use app\models\Reviews;

class MainController extends Controller
{

    public function homepage()
    {
        include '../public/assets/views/main/homepage.php';
//        $this->view('../public/assets/views/main/example-homepage.php', true);
    }

    public function addAppointments()
    {
        include  '../public/assets/views/main/homepage.php';
    }

    public function Reviews()
    {
        include  '../public/assets/views/main/homepage.php';
    }


    public function notFound()
    {
    }

}