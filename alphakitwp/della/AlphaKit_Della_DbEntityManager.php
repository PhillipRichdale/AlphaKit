<?php
<?
php
/**
 * Project Name: AlphaKit
 * Filename: AlphaKit_Della_DbEntityManager.php
 * Created: 23:17 23.Juni.2019
 **/


class AlphaKit_Della_DbEntityManager
{
	private $prefix;
	private $db;
	private $entityList;

	public function __construct($prefix, $pdoConnection)
	{
		$this->prefix = $prefix;
		$this->db = $pdoConnection;
	}
	private function createTable()
	{
		$entityListName = $prefix."alphakit_della_entitylist";
		$this->entityList
	}
}