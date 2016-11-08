<?php
$dbconn = pg_connect("host=postgres user=demo password=mysecretpassword");
pg_query("create database words");
$dbconn = pg_connect("host=postgres dbname=words user=demo password=mysecretpassword");
pg_query("create table hello (word text)");
