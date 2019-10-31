# Camagru

MVC Course content 
1. Course Intro & Setup
    - [ ] Conf env
2. Intro To OOP PHP
    - [ ] About This Section
    - [ ] What Is OOP?
    - [ ] Classes, Properties & Methods
    - [ ] The Constructor & Destructor
    - [ ] Access Modifiers, Getters & Setters
    - [ ] Class Inheritance
    - [ ] Static Methods & Properties

3. The Framework [Part 1] - [ ] The Core
    - [ ] What Is MVC?
    - [ ] Workflow Explanation
    - [x] Creating The Folder Structure
    - [x] Direct Everything Through index.php
    - [x] Bootstrap File & Core Class
    - [ ] Loading The Controller From The URL
    - [ ] Mapping Methods & Parameters

+ The Framework [Part 2] - [ ] MVC Workflow
    - [ ] Base Controller Class
    - [ ] Loading Views
    - [ ] Config File & Uploader
    - [ ] Header & Footer Includes
    - [ ] Aside - [ ] PDO Crash Course
    - [ ] The Database Class - [ ] Part 1
    - [ ] The Database Class - [ ] Part 2
    - [ ] Clean Up

+ The App [Part 1] - [ ] Setup & User Authentication
    - [ ] Initial App & Database Setup
    - [ ] Pages, Bootstrap & Navbar
    - [ ] Creating The Users Controller
    - [ ] Register & Login Form Views
    - [ ] Form Validation
    - [ ] User Model & Email Check
    - [ ] User Registration
    - [ ] Custom Flash Messaging
    - [ ] User Login
    - [ ] User Session Data & Logout

+ The App [Part 2] - [ ] Posts Functionality
    - [ ] Posts Controller
    - [ ] Posts Access Control
    - [ ] Post Model & Display
    - [ ] Add Post Form
    - [ ] Inserting Posts
    - [ ] Post Show Details Page
    - [ ] Editing Posts
    - [ ] Deleting Posts

+ App Deployment
    - [ ] Deploying Our App

=============================================================================
## 3.3 - Creating The Folder Structure
MVC

    --->app 
        --->config
        --->controllers
        --->helpers
        --->libraries
            --->Controller.php
            --->Core.php
            --->Database.php
        --->models
        --->views
        --->.htaccess  
        --->bootstrap.php

    --->public
        --->css
            --->style.css
        --->img
        --->js
            --->main.js
        --->.htaccess
        --->index.php

    --->.htaccess

## 3.4 - Direct Everything Through index.php
- in "MVC->public->.htaccess"
```
<IfModule mod_rewrite.c>
    Options -Multiviews
    RewriteEngine On
    RewriteBase /camagru/MVC/public/
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule  ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
```

## 3.5 - Bootstrap File & Core Class
- in "MVC->.htaccess" -> for secure root website folder (MVC in our case)
```
<IfModule mod_rewrite.c>
    RewriteEngine on
    RewriteRule ^$ public/ [L]
    RewriteRule (.*) public/$1 [L]
</IfModule>
```
- in "MVC->app->bootstrap.php" -> load Libraries
- in "MVC->app->libraries->Core.php" -> ceate core class
- in "MVC/public->index.php" -> init core Library
- resume (la je peux prend tous les params de URL (GET) comme var WOW !!!)

