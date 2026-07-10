<?php
namespace App\Models;

use Cores\Database;

class Artwork 
{
    protected $db;

    public function __construct() 
    {
        $this->db = (new Database())->pdo;
    }

    // Get all artworks for the gallery grid
    public function getAll() 
    {
        $stmt = $this->db->prepare("SELECT * FROM artworks ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(); 
    }

    // Get ONE artwork for the detail view page
    public function getById($id) 
    {
        $stmt = $this->db->prepare("SELECT * FROM artworks WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(); 
    }
}