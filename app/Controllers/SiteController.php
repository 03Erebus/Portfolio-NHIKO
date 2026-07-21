<?php
namespace App\Controllers;

use App\Models\Project; 

class SiteController extends BaseController 
{
    public function home() 
    {
        $this->renderView('home');
    }

    public function gallery() 
    {
        // Dynamically loads your artwork data file
        $model = new Project('artworks.php');
        $artworks = $model->getAllProjects(); 

        $this->renderView('gallery', [
            'artworks' => $artworks 
        ]);
    }

    public function software() 
    {
        // Dynamically loads your software data file
        $model = new Project('projects.php');
        $devProjects = $model->getAllProjects(); 

        $this->renderView('software', [
            'projects' => $devProjects 
        ]);
    }
    
}