
Set up user template!
IMPORTANT!!!Step 1 and 2 can be skipped if you have done it before!
1)click on the WAMP icon, and select php.ini from the context menu.
 It will default to notepad, make your changes(SET):

post_max_size = 100M
upload_max_filesize = 100M


 and hit "Save" (Hitting "Save As" will generate a notepad error).
  Once you save it, then restart WAMP again.

2)Import my_davv_tube.sql file to database.//just open phpmyadmin and go to import!

3)Do configration settings and set path in header.php.
4)Set Path in gateway.php.
5)Do manual settings in login.html (mainly for anchor tag).
6)Go db setting in login_process.php and password_process.php
-------------------------------------------------------
If its not working!
Please check what type of sql version you are using in my system all mysql queries are written in form of "mysqli" .If your system does not support that replace it with appropriate mysql query format in all php files.
----------------------------------------------------------