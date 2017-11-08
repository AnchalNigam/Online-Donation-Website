# Online-Donation-Website
This is my first we project made using HTML,CSS for frontend and PHP,MySQL for backend.A Website responsible for online
donation to NGOs .I used PHP for validating the input given to the login/signup page by donors and also activation link is 
provided via mail during registration. Still working on payment facility.

Instructions to use
1.To set this web application,make sure PHP and PHPMyAdmin is installed on your server.
2.Next open PHPMyAdmin and import the givers.sql.This will create the database on your server.
3.Upload all files on your server.
4.Open connect.php file and add the details of PHPMyadmin's id and password to access the database.
5.Open verify.php and on line 34(where the link of activation is provided.Change it according to your localhost address.
5.Once this is done,run it!.

Screenshots

![screencapture-localhost-1234-gyanproject-index-php-1510154062243](https://user-images.githubusercontent.com/32920850/32556804-67126b7e-c4c6-11e7-9725-356143628386.png)
![screencapture-localhost-1234-gyanproject-signup-php-1510154079722](https://user-images.githubusercontent.com/32920850/32556900-afa28428-c4c6-11e7-8678-b8b7093f0688.png)
![screencapture-localhost-1234-gyanproject-login-php-1510154158527](https://user-images.githubusercontent.com/32920850/32556866-94abc31e-c4c6-11e7-815d-19ab79a54647.png)
![screencapture-localhost-1234-gyanproject-about-html-1510154177486](https://user-images.githubusercontent.com/32920850/32556908-b8c31f9a-c4c6-11e7-8c5d-0c0864117650.png)
![screencapture-localhost-1234-gyanproject-ngo-html-1510154114604](https://user-images.githubusercontent.com/32920850/32556957-dd931d98-c4c6-11e7-9215-76572c0dfa07.png)
[screencapture-localhost-1234-gyanproject-verify-php-1510154194104](https://user-images.githubusercontent.com/32920850/32557016-fe8c9704-c4c6-11e7-8b56-85a640f7c637.png)
![screencapture-localhost-1234-gyanproject-info-php-1510154247722](https://user-images.githubusercontent.com/32920850/32557046-0dc445aa-c4c7-11e7-90f2-f1c4ff5f32e1.png)

Files

1.index.php
  
  It is frontpage of a website where the information of the website is present.

2.signup.php

  This script displays the registration form.It used PHP for validating the input  by users to avoid invalid entry.

3.login.php

  This script displays the login form.After successful login,the user is sent to a page where they can enter donation details(info.php).

4.info.php 
   
  This script allows the users to fill donation details like how much money they want to donate,to which NGO etc.
 
5.connect.php
  
    This script is for connection with your database.

6.work.php
  
  This script includes all the necessary functions needed for running the website. 
   
7.mail.php 
   
   This script is responsible for sending mails to users after registration for activating their acccount.

8.verify.php
  
   This script is responsible for activating the links.If it is already activated then this will inform to user otherwise it will inform    about their account activation.
   
