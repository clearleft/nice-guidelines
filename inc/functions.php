<?php
function format($text) {
	$text = markdown($text);
	$text = smartypants($text);
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
?>
