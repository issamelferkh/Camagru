<?php 
    class Post{
  private $db;
  public function __construct()
  {
      $this->db = new Database; 
      $this->db->query('INSERT INTO `Img`(`userid`, `imgedate`, `imgurl`) VALUES ("10", NOW(), "jhgfhjdghfgdfhjghjf")');
     
  }
    }