<?php
  class Pages extends Controller {
    public function __construct(){
     $this->postModel = $this->model('Post');
    }
    public function index()
    {
      $posts = $this->postModel->getImage();

      $data = [
          'title'=>'Hello '. $_SESSION['username'].'',
        'posts' => $posts
      ];
     
      $this->view('pages/index', $data);
    }
    public function about(){
      $data = ['title'=>'About Us'];
      $this->view('pages/about', $data);
    }
    
  }