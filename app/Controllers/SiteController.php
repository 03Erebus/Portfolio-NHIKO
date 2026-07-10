<?php
namespace App\Controllers;

use App\Models\Project; 

class SiteController extends BaseController 
{
    public function home() 
    {
        // No array needed at all for the home page!
        $this->renderView('home');
    }

    public function gallery() 
    {
        $model = new Project();
        $artworks = $model->getByCategory('Digital Art'); 

        // Only pass the artworks data
        $this->renderView('gallery', [
            'artworks' => $artworks 
        ]);
    }

    public function software() 
    {
        $model = new Project();
        $devProjects = $model->getByCategory('Software'); 

        // Only pass the projects data
        $this->renderView('software', [
            'projects' => $devProjects 
        ]);
    }
}