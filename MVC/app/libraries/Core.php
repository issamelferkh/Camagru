<?php
/* 
    App Core Class
    Create URLs & Load core controller
    URL FORMAT -> /controller/method/params
*/
class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $this->getUrl();
    }

    public function getUrl(){
        echo $_GET['url'];
    }
}
?>