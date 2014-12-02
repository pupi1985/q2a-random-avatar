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

class PUPI_RA_Module_Admin {

	const BUTTON_SAVE = 'pupi_ra_button_save';

	// Settings
	const SETTING_PLUGIN_ENABLED = 'pupi_ra_plugin_enabled';

	// Default setting values
	const SETTING_PLUGIN_ENABLED_DEFAULT = false;

	// Language keys
	const LANG_ID_ADMIN_SETTINGS_SAVED = 'admin_settings_saved';
	const LANG_ID_ADMIN_SAVE_SETTINGS_BUTTON = 'admin_save_settings_button';
	const LANG_ID_ADMIN_PLUGIN_ENABLED = 'admin_plugin_enabled';

	public static function translate($id) {
		return qa_lang_html('pupi_ra/' . $id);
	}

	public function option_default($option) {
		switch ($option) {
			case self::SETTING_PLUGIN_ENABLED:
				return self::SETTING_PLUGIN_ENABLED_DEFAULT;
			default:
		}
	}

	public function admin_form(&$qa_content) {
		$ok = null;
		if (qa_clicked(self::BUTTON_SAVE)) {
			$this->savePluginEnabledSetting();
			$ok = self::translate(self::LANG_ID_ADMIN_SETTINGS_SAVED);
		}
		$fields = array_merge(
			$this->getPluginEnabledField()
		);
		return array(
			'ok' => $ok,
			'style' => 'wide',
			'fields' => $fields,
			'buttons' => $this->getButtons(),
		);
	}

	private function getButtons() {
		return array(
			'save' => array(
				'tags' => 'name="' . self::BUTTON_SAVE . '"',
				'label' => self::translate(self::LANG_ID_ADMIN_SAVE_SETTINGS_BUTTON),
			),
		);
	}

	// All field returning methods

	private function getPluginEnabledField() {
		return array(array(
			'label' => self::translate(self::LANG_ID_ADMIN_PLUGIN_ENABLED),
			'style' => 'tall',
			'tags' => 'name="' . self::SETTING_PLUGIN_ENABLED . '"',
			'type' => 'checkbox',
			'value' => (bool) qa_opt(self::SETTING_PLUGIN_ENABLED),
		));
	}

	// All field saving methods

	private function savePluginEnabledSetting() {
		qa_opt(self::SETTING_PLUGIN_ENABLED, (bool) qa_post_text(self::SETTING_PLUGIN_ENABLED));
	}

}
