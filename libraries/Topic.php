<?php
class Topic
{
    //Init DB variable
    private $db;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * Get All Topics
     */
    public function getAllTopics()
    {
        $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM topics
            INNER JOIN users
            ON topics.user_id = users.id
            INNER JOIN categories
            ON topics.category_id = categories.id
            OREDER BY create_date DESC
        ");
        // Assign resultset
        $results = $this->db->resultset();
        return $results;
    }
}
