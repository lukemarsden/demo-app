<?php
$dbconn = pg_connect("host=pgsql dbname=words user=root password=password");
pg_query("create table hello (word text)");
