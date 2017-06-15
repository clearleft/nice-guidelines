<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="preload" href="/fonts/lato-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="manifest" href="/manifest.json">

<?php
if (isset($title) && $title) {
	$title = strip_tags($title) . " – NICE Guidance on a Page";
} else {
	$title="NICE Guidance on a Page";
}
if (isset($home)) { $title = "NICE 1 Pagers"; }
?>
<title><?php echo $title ?></title>

<link rel="stylesheet" href="/css/all.css" type="text/css" />
