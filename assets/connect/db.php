<?php

define("DB_DRIVER", "mysql");
define("DB_HOST", "localhost");
define("DB_NAME", "bloomify_db");
define("DB_USER", "bloomify_db");
define("DB_PASSWORD", "0724Bloom");

$db = new \PDO(DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
?>
