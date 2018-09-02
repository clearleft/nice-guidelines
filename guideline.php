<?php
$dr = str_replace($_SERVER['SCRIPT_NAME'], '/inc/', $_SERVER['SCRIPT_FILENAME']);
require_once($dr.'setup.php');
$categorys = require_once($dr . "data.php");
$cat_id = (isset($_GET['category']))? $_GET['category'] : false;
$guideline = (isset($_GET['guideline']))? $_GET['guideline'] : false;
$error = false;

if($guideline && $cat_id) {
	$filename = "guideline/" . $cat_id . "-" . $guideline . ".txt";
	$category = $categorys[$cat_id];
	$handle = @fopen($filename, "r");

	if ($handle) {

		$text = fread($handle, filesize($filename));
		fclose($handle);

		$title = strtok($text, "\n");
		$title = explode("# ", $title);
		$title = $title[1];
		$heading = $title;
		
		$pattern = '/^(.*\n)/';
		$replacement = '';
		$text = preg_replace($pattern, $replacement, $text);
		

	} else {

		$error = true;
		$heading = "That filename looks dodgy.";

	}

} else {

	$error = true;
	$heading = "Missing chapter filename in the URL.";

}
?>
<!DOCTYPE html>
<html lang="en-gb">
<head>
<?php
include($dr . "head.php");
?>

</head>
<body>

<?php
include($dr . "header.php");
?>

<main>

<nav><a href="/#panel-<?php echo $cat_id; ?>" class="back"><img src="/i/chevron-left.svg" alt="Back to"> <?php echo $category; ?></a></nav>
<h1><?php echo smartypants($heading) ?></h1>

<article class="prose">
<?php

if (!$error) {
	echo format($text);
} else {
	echo format("# Oh dear.\n");
	echo format($title);
}
?>
</article>

</main>
<?php
include($dr . "footer.php");
?>
</body>

</html>
