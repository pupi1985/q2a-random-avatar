<?php

/*
	Plugin Name: PUPI - Random Avatar
	Plugin URI: http://github.com/pupi1985/q2a-random-avatar
	Plugin Description: Assigns new users a random avatar from a given set
	Plugin Version: 1.0.0
	Plugin Date: 2014-10-18
	Plugin Author: Gabriel Zanetti
	Plugin Author URI: http://question2answer.org/qa/user/pupi1985
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Minimum PHP Version: 5.1.2
	Plugin Update Check URI: https://raw.githubusercontent.com/pupi1985/q2a-random-avatar/master/qa-plugin.php
*/

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

if (!defined('QA_VERSION')) { // don't allow this file to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('module', 'pupi_ra_module_admin.php', 'PUPI_RA_Module_Admin', 'PUPI RA Module Admin');
qa_register_plugin_module('event', 'pupi_ra_module_event.php', 'PUPI_RA_Module_Event', 'PUPI RA Module Event');
qa_register_plugin_phrases('lang/pupi_ra_*.php', 'pupi_ra');

