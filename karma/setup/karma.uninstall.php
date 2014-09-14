<?php
defined('COT_CODE') or die('Wrong URL');

global $db_users;

// Remove column from table
if ($db->fieldExists($db_users, "user_karma"))
{
	$db->query("ALTER TABLE `$db_users` DROP COLUMN `user_karma`");
}
// Remove column from table
if ($db->fieldExists($db_users, "user_karma_auth"))
{
	$db->query("ALTER TABLE `$db_users` DROP COLUMN `user_karma_auth`");
}

?>