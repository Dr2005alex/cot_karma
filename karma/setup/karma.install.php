<?php
defined('COT_CODE') or die('Wrong URL');

global $db_users;

// Add field if missing
if (!$db->fieldExists($db_users, "user_karma"))
{
	$db->query("ALTER TABLE `$db_users` ADD COLUMN `user_karma` float NOT NULL");
}
if (!$db->fieldExists($db_users, "user_karma_auth"))
{
	$db->query("ALTER TABLE `$db_users` ADD COLUMN `user_karma_auth` varchar(255)  NULL");
}
?>