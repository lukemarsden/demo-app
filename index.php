<html>
<head>
<title>KubeCon keynote demo</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons" rel="stylesheet">
<style>
* { font-family: Roboto; }
</style>
</head>
<body>
<?php
$color = "blue";
if($color == "blue") {
    $hex = "#2196F3";
} else if($color == "green") {
    $hex = "#4CAF50";
}
?>
<div style="padding:1em; background-color: <?=$hex?>; color:white; text-align:center;">Hello, world! I am the <?=$color?> version, running in container <?=`hostname`?> in <?=json_decode(file_get_contents("http://freegeoip.net/json"))->country_name;?>.</div>
<form action="index.php">
<p>Word: <input type="text"></p>
<input type="submit">
</form>
<?php
$dbconn = pg_connect("host=postgres dbname=words user=root password=password");
if($_POST["text"]) {
    pg_query("insert into hello (name) values (".pg_escape_literal($_POST["text"]).")");
}
print pg_last_error();
$result = pg_query("select word from hello");
?><ul><?
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    ?><li><?=$line?></li><?
}
?></ul>
</body>
</html>
