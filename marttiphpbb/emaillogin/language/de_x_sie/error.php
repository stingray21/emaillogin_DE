<?php

/**
* phpBB Extension - marttiphpbb emaillogin
* @copyright (c) 2018 - 2019 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_EMAIL'
		=> 'Sie müssen eine E-Mail-Adresse eingeben, um sich anzumelden.',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_USERNAME_OR_EMAIL'
		=> 'Sie müssen einen Benutzernamen oder eine E-Mail-Adresse eingeben, um sich anzumelden.',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_NO_VALID_EMAIL'
		=> 'Die E-Mail-Adresse %1$s ist ungültig.',
	'MARTTIPHPBB_EMAILLOGIN_LOGIN_ERROR_EMAIL'
		=> 'Die eingegebene E-Mail-Adresse (%1$s) ist nicht korrekt. 
			Bitte E-Mail-Adresse überprüfen und erneut versuchen. 
			Kontaktieren Sie den %2$sBoard Administrator%3$s falls die Probleme weiterhin bestehen.',
	'MARTTIPHPBB_EMAILLOGIN_ERROR_EMAIL_DUPLICATE'
		=> 'Die E-Mail-Adresse %1$s kann nicht verwendet werden, da sie bereits in der Datenbank vorhanden ist.
		Bitte wenden Sie sich an den %2$sBoard Administrator%3$s.',		
]);
