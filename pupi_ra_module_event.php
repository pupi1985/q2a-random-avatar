<?php

/*
	This file is part of PUPI - Random Avatar, a Question2Answer plugin that
	assigns new users a random avatar from a given set.

	Copyright (C) 2014 Gabriel Zanetti <http://github.com/pupi1985>

	PUPI - Random Avatar is free software: you can redistribute it and/or
	modify it under the terms of the GNU General Public License as published
	by the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	PUPI - Random Avatar is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
	Public License for more details.

	You should have received a copy of the GNU General Public License along
	with PUPI - Random Avatar. If not, see <http://www.gnu.org/licenses/>.
*/

class PUPI_RA_Module_Event {

	public function process_event($event, $userId, $handle, $cookieId, $params) {
		if ($event === 'u_register') {
			require_once 'pupi_ra_module_admin.php';
			if (qa_opt(PUPI_RA_Module_Admin::SETTING_PLUGIN_ENABLED)) {
				$globPath = dirname(__FILE__) . '/avatars/*';
				$imageFiles = glob($globPath);
				if (!empty($imageFiles)) {
					$selectedAvatarIndex = array_rand($imageFiles);
					$selectedAvatarFilePath = $imageFiles[$selectedAvatarIndex];
					qa_set_user_avatar($userId, file_get_contents($selectedAvatarFilePath), null);
				}
			}
		}
	}

}
