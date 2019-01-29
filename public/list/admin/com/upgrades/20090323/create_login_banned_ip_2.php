<?php
/**
 * This file is part of the upgrade process.
 *
 * @package SendStudio
 */

/**
 * Do a sanity check to make sure the upgrade api has been included.
 */
if (!class_exists('Upgrade_API', false)) {
	exit;
}

/**
 * create_login_banned_ip
 *
 * Create login_banned_ip table which purpose is to store banned IP address
 * within a certain time frame
 *
 * This was added in back in 20080801 update, but didn't get added to
 * the schema... as a result new installation will not have this table defined.
 *
 * This is the same with login_attempt table.
 *
 * @see Upgrade_API
 *
 * @package SendStudio
 */
class create_login_banned_ip_2 extends Upgrade_API
{
	/**
	 * RunUpgrade
	 * Runs the create_login_banned_ip_2 upgrade
	 *
	 * @return Boolean Returns TRUE if successful, FALSE otherwise
	 */
	function RunUpgrade()
	{
		if ($this->TableExists('login_banned_ip')) {
			return true;
		}

		$query = "CREATE TABLE " . SENDSTUDIO_TABLEPREFIX . "login_banned_ip (
			ipaddress VARCHAR(15) NOT NULL,
			bantime INTEGER NOT NULL,
			PRIMARY KEY(ipaddress)
		)";

		if (SENDSTUDIO_DATABASE_TYPE == 'mysql') {
			$query .= ' character set utf8 engine=innodb';
		}

		$result = $this->Db->Query($query);
		if ($result == false) {
			return false;
		}

		return true;
	}
}
