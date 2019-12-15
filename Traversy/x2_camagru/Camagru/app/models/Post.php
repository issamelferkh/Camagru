<?php
class Post{
  private $db;
  public function __construct()
  {
      $this->db = new Database;
  }

  public function addImage($info){
      $userid = $info['userid'];
      $pic = $info['imgurl'];
      $this->db->query('INSERT INTO `Img`(`userid`, `imgedate`, `imgurl`) VALUES (:userid, NOW(), :imgurl)');
      $this->db->bind(':userid', $userid);
      $this->db->bind(':imgurl', $pic);
      
      if ($this->db->execute())
          return (true);
      else
          return (false);
  }

  public function getImage(){
    $this->db->query('SELECT * FROM Img JOIN `user` ON `Img`.`userid` = `user`.`id` order by imgedate desc');
    $row = $this->db->resultSet();
    return ($row);
}
    
public function addLikes($data)
{
    $imgid = $data['imgid'];
    $userid = $data['userid'];
    $this->db->query('INSERT INTO `like`(`userid`, `imgid`, `like`) VALUES(:userid, :imgid, 1)');
    $this->db->bind(':userid', $userid);
    $this->db->bind(':imgid', $imgid);
    if($this->db->execute())
    {
        $this->db->query('SELECT * FROM Img WHERE imgid='.$imgid.'');
        $row = $this->db->single();
        $n = $row->likes;
        $date = $row->imgedate;
        $this->db->query('UPDATE Img SET likes=:likes,imgedate=:imgedate WHERE imgid=:imgid');
        $this->db->bind(':likes', $n+1);
        $this->db->bind(':imgedate', $date);
        $this->db->bind(':imgid', $imgid);
        $this->db->execute();
    }
    
    }
    public function dellikes($data)
    {
        $imgid = $data['imgid'];
        $userid = $data['userid'];
        $this->db->query('SELECT * FROM Img WHERE imgid='.$imgid.'');
        $row = $this->db->single();
        $n = $row->likes;
        $date = $row->imgedate;
        $this->db->query('UPDATE Img SET likes=:likes,imgedate=:imgedate WHERE imgid=:imgid');
        $this->db->bind(':likes', $n-1);
        $this->db->bind(':imgedate', $date);
        $this->db->bind(':imgid', $imgid);
        $this->db->execute();
        $this->db->query("DELETE FROM `like` WHERE userid=:userid AND imgid=:imgid");
        $this->db->bind(':userid', $userid);
        $this->db->bind(':imgid', $imgid);
        if($this->db->execute())
            return true;
        else
            return false;
        
    }

    public function getlikes(){
    $this->db->query('SELECT * FROM `like`');
    $row = $this->db->resultSet();
    return ($row);
    }
}