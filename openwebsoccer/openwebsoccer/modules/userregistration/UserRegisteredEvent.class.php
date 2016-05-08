<?php
/******************************************************************
*
* This file is part of OpenWebSoccer-Sim.
*
* OpenWebSoccer-Sim is free software: you can redistribute it
* and/or modify it under the terms of the
* GNU Lesser General Public License
* as published by the Free Software Foundation, either version 3 of
* the License, or any later version.
*
* OpenWebSoccer-Sim is distributed in the hope that it will be
* useful, but WITHOUT ANY WARRANTY; without even the implied
* warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* See the GNU Lesser General Public License for more details.
*
* You should have received a copy of the GNU Lesser General Public
* License along with OpenWebSoccer-Sim.
* If not, see <http://www.gnu.org/licenses/>.
*
* Author: Ingo Hofmann
* Base Version: OpenWebSoccer-Sim 5.2.4-Snapshot vom 21. Juni 2015
*
* This Version called "OpenWebsoccer" is a advanced modification
* by Rolf Joseph / ErdemCan 2015 - 2016
*
* For comparison of the code look at the original at
* https://github.com/ihofmann/open-websoccer
******************************************************************/
defined('OpenWebsoccer') or header('location: ../../index.php');
/**
 * This event is triggered when a new user registers. Either by filling the registration form or by automatic creation
 * through (custom) log-in methods.
 */
class UserRegisteredEvent extends AbstractEvent {
	/**
	 * @var int ID of created user.
	 */
	public $userId;
	/**
	 * @var string Entered user name. Might be NULL if user has not been created through registration form.
	 */
	public $username;
	/**
	 * @var string Entered e-mail address. Might be NULL if user has not been created through registration form.
	 */
	public $email;
	/**
	 *
	 * @param WebSoccer $websoccer Application context.
	 * @param DbConnection $db DB connection.
	 * @param I18n $i18n Messages context.
	 * @param int $userid ID of user.
	 * @param string $username entered user name.
	 * @param string $email entered e-mail address with lower case letters.
	 */
	function __construct(WebSoccer $websoccer, DbConnection $db, I18n $i18n,
			$userid, $username, $email) {
		parent::__construct($websoccer, $db, $i18n);
		$this->userId = $userid;
		$this->username = $username;
		$this->email = $email;
	}
}