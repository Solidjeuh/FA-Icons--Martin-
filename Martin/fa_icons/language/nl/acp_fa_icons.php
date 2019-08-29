<?php
/**
*
* @package phpBB Extension - Fa-icons
* @version $Id: fa_icons.php, 2019/07/26 Martin Exp $
* @copyright (c) 2019 martin - http://www.martins-phpbb.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
        'FA_ICONS_VERSION'              => 'Versie',
	'ACP_FA_ICONS_TITLE'		=> 'Fa-pictogrammen Configuratie +',
	'FA_ICONS_SAVED'		=> 'Fa-pictogrammen instellingen opgeslagen.',
	'FA_ICONS_CONFIG_SET'		=> 'Configuratie.',
	'FA_ICONS_ENABLE'		=> 'Inschakelen',
	'FA_ICONS_ENABLE_EXPLAIN'       => 'Schakelt het lettertype awesome in, activeert ook schuifregelaars hieronder.',
	'FA_ICONS_SCROLLER_HEIGHT'			=> 'Schakel hoogte in px',
	'FA_ICONS_SCROLLER_HEIGHT_EXPLAIN'		=> 'Stel de schakelaar in om meer rijen in px weer te geven.<br><em>U bent beperkt van 100 tot 350 px. Standaard is 150 px</em>.',
	'FA_ICONS_SCROLLER'		=> 'Hoogte instellen in px', 
	'BUTTONS_ENABLE'	        => 'Schakel post knoppen in',
        'BUTTONS_ENABLE_EXPLAIN'        => 'Schakelt de mooie BBcode knoppen in.',
	'MODX_ENABLE'			=> 'Modx opdrachten inschakelen',
        'MODX_ENABLE_EXPLAIN'           => 'Schakelt modx opdrachten in voor het posten van code.',
        'NOTE_ENABLE'			=> 'Schakel de note ext in als u dit hebt geïnstalleerd',
        'NOTE_ENABLE_EXPLAIN'           => 'Schakel de note ext NIET in als u deze niet hebt geïnstalleerd.',        
));
