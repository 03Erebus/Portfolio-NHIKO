<?php
namespace App\Controllers;

use App\Models\Project; 

require_once __DIR__ . '/../Models/Project.php';

$model = new Project();
// Fetch ONLY the items tagged as 'Software'
$softwareProjects = $model->getByCategory('Software');

// Load the view and pass the data
require __DIR__ . '/../Views/software.php';