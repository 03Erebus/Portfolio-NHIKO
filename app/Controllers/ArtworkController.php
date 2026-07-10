<?php
namespace App\Controllers;

// USE THE PROJECT MODEL INSTEAD
use App\Models\Project; 

require_once __DIR__ . '/../Models/Project.php';

$model = new Project();
// Fetch ONLY the items tagged as 'Artwork'
$artworks = $model->getByCategory('Artwork');

// Load the view and pass the data
require __DIR__ . '/../Views/gallery.php';