<?php

namespace app\models;
use app\core\Database;

class Reviews

{
    use Database;

    protected $table = 'reviews';

    public function getAllReviews() {
        $query = "SELECT * FROM reviews ";
        return $this->query($query);

    }
}