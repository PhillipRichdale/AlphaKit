<?php

require_once plugin_dir_path("../../../wp-config.php");
require_once "../classes/DbConnector.php";
require_once "../classes/Generator.php";

$pdoConnection = new DbConnector(
	"mysql",
	DB_HOST,
	DB_PORT ? DB_PORT: "3306",
	DB_NAME,
	DB_USER,
	PD_PASSWORD
);
$generator = new Generator($pdoConnection);
$entityManager = new AlphaKit_Della_DbEntityManager($pdoConnection);
