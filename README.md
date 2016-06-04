
ZendApplication

Introduction
------------
This is a simple and my first, application using the Zend Framework2 MVC layer and module for user registration and associate blog posts to users.



The easiest way to run this application is:

1- download from master branch, extract to your server location.
2- create database named db_zendapp and import /database/db_zendapp.sql
3-### Apache setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
	ServerName zendApplication.local
	DocumentRoot "D:/xampp/htdocs/zendApplication/public"
	SetEnv APPLICATION_ENV "development"
	<Directory D:/xampp/htdocs/zendApplication/public>
	DirectoryIndex index.php
	AllowOverride All
	Order allow,deny
	Allow from all
	</Directory>
    </VirtualHost>

4- put '127.0.0.1			zendApplication.local' into C:\Windows\System32\drivers\etc\hosts file.
Now you are ready to go:
 Visit [http://zendApplication.local](http://zendApplication.local) in your browser
