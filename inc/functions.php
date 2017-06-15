<?php
require_once($dr.'Michelf/MarkdownExtra.inc.php');
require_once($dr.'Michelf/SmartyPants.inc.php');
use Michelf\MarkdownExtra, Michelf\SmartyPants;

function format($text) {
	#$text = markdown($text);
	#$text = smartypants($text);
	$text = MarkdownExtra::defaultTransform($text);
	$text = SmartyPants::defaultTransform($text);
	$search = array (
		"<table>",
		"</table>"
		);
	$replace = array (
		"<figure class='table'><table>",
		"</table></figure>"
		);
	$text = str_replace($search, $replace, $text);
	
	return $text;
}

function smartypants($text) {
	return $text;
}
?>
