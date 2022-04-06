<?php
require_once (__DIR__ . "/../config/config.php");
require_once (__DIR__ . "/../functions/database.php");

global $connectionArray;
$db = Start($connectionArray);
$c = "SELECT * FROM Invitados";
$invitados = Query_Select($c, $db)['data'];
Finish($db);