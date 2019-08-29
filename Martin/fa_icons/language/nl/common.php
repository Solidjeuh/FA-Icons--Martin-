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
//  'FONT_AWESOME_HELP'             => 'Font Awesome: [fa]glass[/fa] or size it [fa=45]coffee[/fa] or color it [fa=red]heart[/fa]',

$lang = array_merge($lang, array(
        // Fa icons start
	'SELECT_FA_ICONS'			=> 'Selecteer een fa-pictogram',
	'FONT_AWESOME_HELP'             => 'Font Awesome: [fa]glass[/fa] of geeft het een grootte [fa=45]coffee[/fa] or een kleur [fa=red]heart[/fa]',
	'BY'                                    => 'door',
	// Modxcommand
	'MODX_FIND'				=> 'Zoek',
	'MODX_ADD_AFTER'			=> 'Voeg toe onder',
	'MODX_ADD_BEFORE'			=> 'Voeg toe boven',
	'MODX_REPLACE_WITH'		 	=> 'Vervang met',
	'MODX_DELETE'				=> 'Verwijder',
	'MODX_IN_LINE_FIND'		 	=> 'Zoek in-line',
	'MODX_IN_LINE_ADD_AFTER'	        => 'in-line toevoegen na',
	'MODX_IN_LINE_ADD_BEFORE'	        => 'in-line toevoegen voor',
	'MODX_IN_LINE_REPLACE_WITH'             => 'in-line vervangen met',
	'MODX_CMD'					=> 'MODx opdracht',
	'BBCODE21_FIND'			 	=> '[b]Zoek[/b] [i][size=85]Dit kan een gedeeltelijke vondst zijn en niet de hele regel[/size][/i]',
	'BBCODE21_AFTER'			=> '[b][color=#008000]Voeg toe onder[/color][/b] [i][size=85]Voeg deze regels toe op een nieuwe lege regel na de voorgaande regel(s)[/size][/i]',
	'BBCODE21_BEFORE'			=> '[b][color=#BF0080]Voeg toe boven[/color][/b] [i][size=85]Voeg deze regels toe op een nieuwe lege regel voor de voorgaande regel(s)[/size][/i]',
	'BBCODE21_REPLACE'			=> '[b][color=#BF0000]Vervang met[/b][/color] [i][size=85]Vervang de voorgaande regels door de volgende[/size][/i]',
	'BBCODE21_DELETE'			=> '[b][color=#FF0000]Verwijder[/b][/color] [i][size=85]Verwijder de voorgaande regels[/size][/i]',
	'BBCODE21_INFIND'			=> '[b][color=#BF0080]Zoek in de lijn[/b][/color] [i][size=85]Dit is een gedeeltelijke overeenkomst van een lijn voor in-line bewerkingen[/size][/i]',
	'BBCODE21_INAFTER'			=> '[b][color=#BF0080]in-line toevoegen na[/b][/color]',
	'BBCODE21_INBEFORE'		 	=> '[b][color=#BF0080]in-line toevoegen voor[/b][/color]',
	'BBCODE21_INREPLACE'		        => '[b][color=#BF0080]In de lijn vervangen met[/b][/color]',
	// Posting buttons
	'CUSTOM_BBCODES'	                => 'Overige BBCodes',
));
