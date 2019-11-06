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

3. The Framework [Part 1] - The Core
    - [ ] What Is MVC?
    - [ ] Workflow Explanation
    - [x] Creating The Folder Structure
    - [x] Direct Everything Through index.php
    - [x] Bootstrap File & Core Class
    - [x] Loading The Controller From The URL
    - [ ] Mapping Methods & Parameters

4. The Framework [Part 2] - MVC Workflow
    - [ ] Base Controller Class
    - [ ] Loading Views
    - [ ] Config File & Uploader
    - [ ] Header & Footer Includes
    - [ ] Aside - PDO Crash Course
    - [ ] The Database Class - Part 1
    - [ ] The Database Class - Part 2
    - [ ] Clean Up

5. The App [Part 1] - Setup & User Authentication
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

6. The App [Part 2] - Posts Functionality
    - [ ] Posts Controller
    - [ ] Posts Access Control
    - [ ] Post Model & Display
    - [ ] Add Post Form
    - [ ] Inserting Posts
    - [ ] Post Show Details Page
    - [ ] Editing Posts
    - [ ] Deleting Posts

7. App Deployment
    - [ ] Deploying Our App

=============================================================================
# 3 - The Framework [Part 1] - The Core
## 3.3 - Creating The Folder Structure
MVC

    --->app 
        --->config
            --->config.php (for config DB connection)
        --->controllers
            --->Pages.php
            --->Posts.php
        --->helpers
        --->libraries
            --->Controller.php
            --->Core.php
            --->Database.php
        --->models
        --->views
            --->inc
                --->footer.php
                --->header.php
            --->pages
                --->about.php
                --->index.php (index page -> 1st page in webapp)
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

## 3.6 - Loading The Controller From The URL
- in "MVC->app->libraries->Core.php" -> Loading controller from URL
- Add "MVC->app->controllers->Pages.php" -> for test

## 3.7 - Mapping Methods & Parameters
- Get and Map => Methods and Params

# 4 - The Framework [Part 2] - MVC Workflow
## 4.1 - Base Controller Class
## 4.2 - Loading Views
## 4.3 - Config File & Uploader
## 4.4 - Header & Footer Includes
## 4.5 - Aside - PDO Crash Course
## 4.6 - The Database Class - Part 1
## 4.7 - The Database Class - Part 2
## 4.8 - Clean Up


# 5 - The App [Part 1] - Setup & User Authentication
## 5.1 Initial App & Database Setup
- create DB 

## 5.2 Pages, Bootstrap & Navbar
## 5.3 Creating The Users Controller
## 5.4 Register & Login Form Views
## 5.5 Form Validation
## 5.6 User Model & Email Check
## 5.7 User Registration
## 5.8 Custom Flash Messaging
## 5.9 User Login
## 5.10 User Session Data & Logout

# 6 - The App [Part 2] - Posts Functionality
## 6.1 Posts Controller
## 6.2 Posts Access Control
## 6.3 Post Model & Display
## 6.4 Add Post Form
## 6.5 Inserting Posts
## 6.6 Post Show Details Page
## 6.7 Editing Posts
## 6.8 Deleting Posts


## Question
- in app/config/config.php // App Root-> define('APPROOT', dirname(dirname(__FILE__))); -> APPROOT ???


.container in header and end in footer
add navbar.php in inc 
    add <nav></nav> in header before body and after container