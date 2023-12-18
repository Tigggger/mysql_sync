# mysql_sync
Simple way to keep 2 mysql databases in sync just using php

I have my business running on a VPS Server, but always being paranoid I like to have a backup server in case the worst happens.

I looked at many commercial solutions, but then I thought this should be possible with just php and so I knocked this up.

index.php  - this file goes on the backup server (you can increase security if you wish by allowing certain ip's etc)

function.php - this has a curl call to the backup server.

Then anywhere on your existing site where you do an update, insert, delete etc you just add a line to duplicate.

EG: where you currently have something like this
$insert = "INSERT INTO table (columna,columnb,columnc) VALUES ('$a','$b','$c')";
$mysqli->query($insert);

Simply add an extra line below

remote_curl_get($insert);
