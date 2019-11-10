<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Index Title-> defined in /app/controllers/Pages.php',
        'description' => 'Index Content -> in /app/views/pages/index.php',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Title-> defined in /app/controllers/Pages.php',
        'description' => 'About Content -> in /app/views/pages/about.php',
      ];

      $this->view('pages/about', $data);
    }
  }