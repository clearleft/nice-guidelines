<?php
$dr = str_replace($_SERVER['SCRIPT_NAME'], '/inc/', $_SERVER['SCRIPT_FILENAME']);
require_once($dr.'setup.php');
$categorys = require_once($dr . "data.php");
$title= "NICE";
?>

<!DOCTYPE html>
<html lang="en-gb" manifest="manifest.appcache">
<head>

<?php
include($dr . "head.php");
?>

<link rel="stylesheet" href="/css/addtohomescreen.css" type="text/css">
</head>
<body class="home" id="top">

<?php
include($dr . "header.php");
?>

<main>
<h1>NICE Guidance On a Page</h1>
<p class="intro">Compiled from <abbr title="National Institute for Health and Care Excellence">NICE</abbr> guidance and summarised by <span class="doctor">Dr D&hairsp;P Sheppard MBBS</span>.</p>
<nav>
<ul class="categories">

<li id="cat-01">
	<a href="#panel-01" class="cat-label">Breast <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-01">
	<a href="#cat-01" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Breast</h1>
	<ul class="cat-links">
		<li><a href="/guideline/01-01">Advanced Breast Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/01-02">Early and Locally Invasive Breast Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-02">
	<a href="#panel-02" class="cat-label">Cardiovascular <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-02">
	<a href="#cat-02" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Cardiovascular</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-03">
	<a href="#panel-03" class="cat-label">Dermatology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-03">
	<a href="#cat-03" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Dermatology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-04">
	<a href="#panel-04" class="cat-label">Emergency <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-04">
	<a href="#cat-04" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Emergency</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-05">
	<a href="#panel-05" class="cat-label">Endocrinology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-05">
	<a href="#cat-05" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Endocrinology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-06">
	<a href="#panel-06" class="cat-label">Gastroenterology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-06">
	<a href="#cat-06" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Gastroenterology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-07">
	<a href="#panel-07" class="cat-label">Geriatrics <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-07">
	<a href="#cat-07" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Geriatrics</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-08">
	<a href="#panel-08" class="cat-label">Haematology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-08">
	<a href="#cat-08" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Haematology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-09">
	<a href="#panel-09" class="cat-label">MSK <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-09">
	<a href="#cat-09" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>MSK</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-10">
	<a href="#panel-10" class="cat-label">Nephrology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-10">
	<a href="#cat-10" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Nephrology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-11">
	<a href="#panel-11" class="cat-label">Neurology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-11">
	<a href="#cat-11" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Neurology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-12">
	<a href="#panel-12" class="cat-label">Opthalmology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-12">
	<a href="#cat-12" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Opthalmology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-13">
	<a href="#panel-13" class="cat-label">Psychiatry <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-13">
	<a href="#cat-13" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Psychiatry</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-14">
	<a href="#panel-14" class="cat-label">Respiratory <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-14">
	<a href="#cat-14" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Respiratory</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-15">
	<a href="#panel-15" class="cat-label">Rheumatology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-15">
	<a href="#cat-15" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Rheumatology</h1>
	<ul class="cat-links">
	</ul>
	</div>
</li>
<li id="cat-16">
	<a href="#panel-16" class="cat-label">Urology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-16">
	<a href="#cat-16" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Urology</h1>
	<ul class="cat-links">
		<li><a href="/guideline/16-01">Lower Urinary Tract Symptoms <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/16-02">Prostate Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/16-03">Urinary Incontinence - Neurological Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>

</ul>
</nav>

<br/>

</main>
<?php
include($dr . "footer.php");
?>
<script src="/js/addtohomescreen.js" async></script>

</body>
</html>