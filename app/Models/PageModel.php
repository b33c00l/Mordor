<?php

class PageModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Get page ( [0]'st element from results array)
    public function getPage(string $title): array
    {
        return $this->db->select("SELECT * FROM pages WHERE title = :title", ["title" => $title])[0];
    }


}
