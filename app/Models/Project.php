<?php
namespace App\Models;

class Project {
    
    // Private property to hold all our array data
    private $projects;

    public function __construct() {
        // Load the flat-file array when the model is called [cite: 588]
        $this->projects = require __DIR__ . '/../Data/projects.php';
    }

    // 1. Get everything (For your main gallery)
    public function getAllProjects() {
        return $this->projects;
    }

    // 2. Get a single project (For individual artwork pages)
    public function getProjectBySlug($slug) {
        foreach ($this->projects as $project) {
            if ($project['link'] === '/project/' . $slug) {
                return $project;
            }
        }
        return null; // Return nothing if it's not found
    }

    // 3. Filter by category (For a specialized Web Development page)
    public function getByCategory($categoryName) {
        return array_filter($this->projects, function($project) use ($categoryName) {
            return $project['category'] === $categoryName;
        });
    }
}