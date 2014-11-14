


1)click on the WAMP icon, and select php.ini from the context menu.
 It will default to notepad, make your changes(SET):

post_max_size = 100M
upload_max_filesize = 100M


 and hit "Save" (Hitting "Save As" will generate a notepad error).
  Once you save it, then restart WAMP again.

2)Import my_davv_tube.sql file to database.
3)Set the url path in index.php 
4)Upload videos using index.php

