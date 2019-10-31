<?php
    class User{
        private $db;
        private $token;

        public function __construct(){
            $this->db = new Database;
        }
        public function getToken($len=32)
        {
            return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
        }
       
       // Regsiter user
       
        public function register($data){
         
        $this->db->query('INSERT INTO user (username, email, password, token) VALUES(:username, :email, :password, :token)');
        // Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':token', $data['token']);
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
       }

      public function login($username, $password)
      {
        $this->db->query('SELECT * FROM user WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

      $hashed_password = $row->password;
      $hash = hash('whirlpool', $password);
      if($hash == $hashed_password){
        return $row;
      } else {
        return false;
      }

      }

        public function findUserByEmail($email)
        {
            $this->db->query('SELECT * FROM user WHERE email = :email');
            $this->db->bind(':email', $email);
            $row = $this->db->single();
            if($this->db->rowCount() > 0){
                return true;
            }else{
              return false;
            }
        }

        public function findUser($username)
        {
            $this->db->query('SELECT * FROM user WHERE username = :username');
            $this->db->bind(':username', $username);
            $row = $this->db->single();
            if($this->db->rowCount() > 0){
                return true;
            }else{
              return false;
            }
        }

        // Regsiter user
        public function modify($data){
          $this->db->query('UPDATE user SET username = "'.$data['username'].'" WHERE token ='.$data['token'].'');
          // Bind values
            $this->db->bind(':username', $data['username']);
        
          // Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }
         }

         public function forgottenpass($data){
          $this->db->query('UPDATE user SET username = "'.$data['username'].'" WHERE token ='.$data['token'].'');
          // Bind values
            $this->db->bind(':username', $data['username']);
        
          // Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }
         }
    }