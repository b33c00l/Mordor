<?php

class BannerModel
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll(): array
    {
        return $this->db->select("SELECT * FROM banners");
    }

    public function getRandom(int $count = 3): array
    {
        return $this->db->select("SELECT *, rand() as rand FROM banners ORDER BY rand LIMIT :count",
            ["count" => $count] 
        );
    }


}
