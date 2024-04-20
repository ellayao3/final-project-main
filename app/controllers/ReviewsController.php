<?php

namespace app\controllers;
use app\models\Reviews;

class ReviewsController
{
    public function getReviews()
    {
        $reviewsModel = new Reviews();
        header("Content-Type: application/json");
        $reviews = $reviewsModel->getAllReviews();
        echo json_encode($reviews);
        exit();
    }
}

