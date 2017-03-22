<?php

	require_once 'dbconfig.php';
	$db = new dbclass;
	$db->dbconnect();
	$db->createdb();
	$db->selectdb();
	$db->createLoginTable();
	$db->createUserTypeTable();
	$db->createMetaTypeTable();
	$db->createBasicInfoTable();









?>