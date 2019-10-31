<?php
    class Posts extends Controller{
     
        public function __construct()
        {
            
            $this->postModel = $this->model('Post');
            $this->userModel = $this->model('User');
        }

        public function index(){
            $posts = $this->postModel->getImage();
            $likes = $this->postModel->getlikes();
            $data = [
                'title'=>'Hello '. $_SESSION['username'].'',
              'posts' => $posts,
                'likes' => $likes
            ];
            
            $this->view('posts/index', $data);
            
        }
        public function image(){
           
            $this->view('posts/image');
            
        }
        
        public function takeImage()
        {
            if(isset($_POST['imgBase64']) && isset($_POST['filtstick']))
            {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $upload_dir = "../public/imgs/";
                $img = $_POST['imgBase64'];
                $filter = $_POST['filtstick'];
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $file = $upload_dir . mktime().'.png';
                file_put_contents($file, $data);
                $sourceImage = $filter;
                $destImage = $file;
                list($srcWidth, $srcHeight) = getimagesize($sourceImage);
                $src = imagecreatefrompng($sourceImage);
                $dest = imagecreatefrompng($destImage);
                imagecopy($dest, $src, 0, 0, 0, 0, $srcWidth, $srcHeight);
                imagepng($dest, $file, 9);
                move_uploaded_file($dest, $file);
                
                $dt = ['userid' => $_SESSION['id'],
                'imgurl' => $file          
                ];
                if (!empty($data)) {
                    if ($this->postModel->addImage($dt) == true) {
                            
                    }
                
                }
            }
         
        }
       
        public function addlikes()
        {
            if(isset($_POST['imgid']) && isset($_POST['userid']))
            {
                
                $userid = $_POST['userid'];
                $imgid = $_POST['imgid'];
                $data = ['imgid' => $imgid,
                        'userid' => $userid
                        ];
              
               if($this->postModel->addLikes($data) == true)
                   echo "liked";
               
            }
                  
        }
        public function dellikes()
        {
            if(isset($_POST['imgid']) && isset($_POST['userid']))
            {
                $userid = $_POST['userid'];
                $imgid = $_POST['imgid'];
                 $data = ['imgid' => $imgid,
                        'userid' => $userid
                        ];
                if($this->postModel->dellikes($data) == true)
                   echo "unliked";
            }
        }
    

    }