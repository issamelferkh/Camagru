<?php
    class Users extends Controller{
        public function __construct(){
            $this->userModel = $this->model('User');
          
        }
      
        public function register()
        {    
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $token = substr(md5(openssl_random_pseudo_bytes(20)), 10);
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data =['username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'email' => trim($_POST['email']),
                    'token' => $token,
                    'username_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                if(empty($data['username'])){
                    $data['username_err'] = 'Please enter Username';
                }elseif($this->userModel->findUser($data['username'])){
                    $data['username_err'] = 'Username Already Exist';
                }

                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter Password';
                }elseif(strlen($_POST['password']) < 6){
                    $data['password_err'] = 'Password must be at least 6 characters';
                }

                if(empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Please confirm Password';
                }elseif($_POST['password'] != $_POST['confirm_password']){
                    $data['confirm_password_err'] = 'Passwords not match';
                }

                if(empty($data['email'])){
                    $data['email_err'] = 'Please enter email';
                }elseif($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email Already Exist';
                }

                if(empty($data['username_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['email_err'])){
                    $data['password'] = hash('whirlpool', $data['password']);
                    
                    $to  = $data['email'];
                    $subject = 'Confirm account';
                    $message = '
                        <html>
                        <head>
                        </head>
                        <body>
                            <p>To active your account click <a href="localhost/untitled/register/confirm/'. $token .'">Here</a></p>
                        </body>
                        </html>
                    ';
                    $headers = 'MIME-Version: 1.0';
                    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                    $headers .= 'To: ' . $to."\r\n";
                    mail($to, $subject, $message , $headers);
                    if($this->userModel->register($data)){
                        flash('register_success', 'You are registered and can you login');
                        redirect('users/login');
                      } else {
                        die('Something went wrong');
                      }
                }else{
                    $this->view('users/register', $data);
                }

            }else{
                $data =['username' => '',
                    'password' => '',
                    'email' => '',
                    'confirm_password' => '',
                    'username_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];
                $this->view('users/register', $data);
            }
        }  

        public function login()
        {    
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data =['username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'username_err' => '',
                'password_err' => '',
                 ];
                if(empty($data['username'])){
                    $data['username_err'] = 'Please enter Username';
                }
            
                if(empty($data['password'])){
                    $data['password_err'] = 'Please enter Password';
                }elseif(strlen($_POST['password']) < 6){
                    $data['password_err'] = 'Password must be at least 6 characters';
                }
                if($this->userModel->findUser($data['username']))
                {

                }else{
                    $data['username_err'] = 'No User Found';
                }

                if(empty($data['username_err']) && empty($data['password_err'])){
                   $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                  
                   if($loggedInUser)
                   {
                    $this->createUserSession($loggedInUser);
                   }else{
                       $data['password_err'] = "Password incorrect";
                       $this->view('users/login', $data);
                   }
                }else{
                    $this->view('users/login', $data);
                }

            }else{
                $data =['username' => '',
                    'password' => '',
                    'username_err' => '',
                    'password_err' => '',
                   
                ];
                $this->view('users/login', $data);
            }
        }  
        public function createUserSession($user)
        {
            $_SESSION['id'] = $user->id;
            $_SESSION['username'] = $user->username;
            redirect('pages/index');
        }

        public function logout()
        {
            unset($_SESSION['id']);
            unset($_SESSION['username']);
            session_destroy();
            redirect('users/login');
        }
        public function modify()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
               
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data =['username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'email' => trim($_POST['email']),
                    'username_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

                if($this->userModel->findUser($data['username'])){
                    $data['username_err'] = 'Username Already Exist';
                }

                if(!empty($data['password']) &&strlen($_POST['password']) < 6){
                    $data['password_err'] = 'Password must be at least 6 characters';
                }

                if(!empty($data['password']) && empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Please confirm Password';
                }elseif($_POST['password'] != $_POST['confirm_password']){
                    $data['confirm_password_err'] = 'Passwords not match';
                }

                if($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email Already Exist';
                }

                if(empty($data['username_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['email_err'])){
                    $data['password'] = hash('whirlpool', $data['password']);
                    if($this->userModel->modify($data)){
                        flash('update_success', 'Your information are on Update');
                        redirect('users/modify');
                      } else {
                        die('Something went wrong');
                      }
                }else{
                    $this->view('users/modify', $data);
                }

            }else{
                $data =['username' => '',
                    'password' => '',
                    'email' => '',
                    'confirm_password' => '',
                    'username_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];
                $this->view('users/modify', $data);
            }
        }

        public function isloggedIn(){
            if(isset($_SESSION['id']))
            {
                return true ;
            }
            else{
                return false;
            }
        }

        public function forgottenpass()
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
               
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data =['password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'token' => $token,
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];


                if(!empty($data['password']) &&strlen($_POST['password']) < 6){
                    $data['password_err'] = 'Password must be at least 6 characters';
                }

                if(!empty($data['password']) && empty($data['confirm_password'])){
                    $data['confirm_password_err'] = 'Please confirm Password';
                }elseif($_POST['password'] != $_POST['confirm_password']){
                    $data['confirm_password_err'] = 'Passwords not match';
                }


                if(empty($data['password_err']) && empty($data['confirm_password_err'])){
                    $data['password'] = hash('whirlpool', $data['password']);
                    if($this->userModel->forgottenpass($data)){
                        flash('update_success', 'Your information are on Update');
                        redirect('users/fgpass');
                      } else {
                        die('Something went wrong');
                      }
                }else{
                    $this->view('users/fgpass', $data);
                }

            }else{
                $data =[
                    'password' => '',
                   
                    'confirm_password' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];
                $this->view('users/fgpass', $data);
            }
        }
    }
   