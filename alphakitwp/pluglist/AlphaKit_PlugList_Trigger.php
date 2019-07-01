<?php

require_once __DIR__ . "../classes/AlphaKit.php";
global $AlphaKit;
global $wpdb;
$AlphaKit = new \AlphaKit\AlphaKit($wpdb);

require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
require_once "AlphaKit_PlugList_Functions.php";

$AlphaKit->setCorsHeader();
header('Content-type:application/json;charset=utf-8');
echo AlphaKit_PlugList_writeJsonList() ? (json_encode(array("success" => "true"))) : (json_encode(array("success" => "false")));
