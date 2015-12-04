<?php
function format($text) {
	$text = markdown($text);
	$text = smartypants($text);
	return $text;
}
?>
