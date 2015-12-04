<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="manifest" href="/manifest.json">

<?php
if (isset($title) && $title) {
	if($title != "NICE") {
		$title = strip_tags($title) . " – NICE Guidance on a Page";
	}
} else {
	$title="NICE Guidance on a Page";
}
?>
<title><?php echo $title ?></title>
<!--[if lt IE 9]>
<script type="text/javascript">
    document.createElement('main');
    document.createElement('header');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('nav');
    document.createElement('footer');
</script>
-->

<link rel="stylesheet" href="/css/all.css" type="text/css" />