<?php
namespace App\Models;

class Project {
    
    private $projects;

    // Accept the data file name dynamically (defaults to 'projects.php')
    public function __construct($filename = 'projects.php') {
        $filePath = __DIR__ . '/../Data/' . $filename;
        
        if (file_exists($filePath)) {
            $this->projects = require $filePath;
        } else {
            $this->projects = []; // Fallback if file doesn't exist
        }
    }

    public function getAllProjects() {
        return $this->projects;
    }

    public function getProjectBySlug($slug) {
        foreach ($this->projects as $project) {
            if ($project['link'] === '/project/' . $slug) {
                return $project;
            }
        }
        return null;
    }

    public function getByCategory($categoryName) {
        return array_filter($this->projects, function($project) use ($categoryName) {
            return $project['category'] === $categoryName;
        });
    }
}