<?php

namespace app\models;

use app\core\Database;

class Appointments
{
    use Database;

    protected $table = 'appointments';

    public function addAppointment()
    {
        $query = "INSERT INTO appointments (name, number, email, date) VALUES (:name, :number, :email, :date)";
        return $this->queryWithParams($query, $inputData);
    }
}
