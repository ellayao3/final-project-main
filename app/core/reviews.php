<?php

namespace app\models;

use app\core\Database;

class Reviews 
{
    public int $review_id;
    public string $name;
    public float $star;
    public string $review_message;

    public function tableName(): string
    {
        return 'reviews'; 
    }

    public function attributes(): array
    {
        return ['name', 'star', 'review_message']; // Adjusted to match your table columns
    }

    // Function to fetch all reviews from the database
    public static function getAllReviews(): array
    {
        $db = Database::getInstance();
        $tableName = static::tableName();
        $query = "SELECT * FROM $reviews";
        return $db->queryAll($query);
    }
}
