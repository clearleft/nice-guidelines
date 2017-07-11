<?php
$dr = str_replace($_SERVER['SCRIPT_NAME'], '/inc/', $_SERVER['SCRIPT_FILENAME']);
require_once($dr.'setup.php');
$categorys = require_once($dr . "data.php");
$home=true;
?>

<!DOCTYPE html>
<html lang="en-gb" manifest="/manifest.appcache">
<head>

<?php
include($dr . "head.php");
?>

<style>
@font-face {
    font-family: 'Lato';
    src: url('/fonts/lato-light.woff2') format('woff2'),
	     url('/fonts/lato-light.woff') format('woff');
    font-style: normal;
    font-weight: 300;
    font-display: fallback;
}
@font-face {
    font-family: 'Lato';
    src: url('/fonts/lato-regular.woff2') format('woff2'),
    	 url('/fonts/lato-regular.woff') format('woff');
    font-style: normal;
    font-weight: 500;
    font-display: fallback;
}
</style>

<link rel="stylesheet" href="/css/addtohomescreen.css" type="text/css">
</head>
<body class="home" id="top">

<?php
include($dr . "header.php");
?>

<main>
<h1>NICE Guidance On a Page</h1>
<p class="intro">Compiled from <abbr title="National Institute for Health and Care Excellence">NICE</abbr> guidance and summarised by <span class="doctor">Dr D P Sheppard MBBS</span>.</p>
<nav class="categories">
<ul class="catlist">

<li id="cat-01">
	<a href="#panel-01" class="cat-label">Breast <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-01">
	<a href="#cat-01" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Breast</h1>
	<ul class="cat-links">
		<li><a href="/guideline/01-CG81">Advanced Breast Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/01-CG80">Early and Locally Invasive Breast Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-02">
	<a href="#panel-02" class="cat-label">Cardiovascular <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-02">
	<a href="#cat-02" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Cardiovascular</h1>
	<ul class="cat-links">
		<li><a href="/guideline/02-CG187">Acute Heart Failure <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG180">Atrial Fibrillation <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG95">Chest Pain Recent Onset <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG108">Chronic Heart Failure <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG71">Familial Hypercholesterolaemia <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG130">Hyperglycaemia in ACS <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG127">Hypertension <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG181">Lipid Modification in Primary and Secondary CVD Prevention <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG147">Lower Limb Peripheral Artery Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG126">Management of Stable Angina <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG172">MI Secondary Prevention <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG167">Myocardial Infarction with ST Segment Elevation <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG64">Prophylaxis against Infective Endocarditis <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG94">Unstable Angina and NSTEMI <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG168">Varicose Veins <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG92">VTE Prevention <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/02-CG144">VTE Management <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-03">
	<a href="#panel-03" class="cat-label">Dermatology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-03">
	<a href="#cat-03" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Dermatology</h1>
	<ul class="cat-links">
		<li><a href="/guideline/03-CG57">Atopic Eczema in Children <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/03-CG153">Psoriasis <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-04">
	<a href="#panel-04" class="cat-label">Emergency <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-04">
	<a href="#cat-04" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Emergency</h1>
	<ul class="cat-links">
		<li><a href="/guideline/04-CG134">Anaphylaxis Assessment <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-05">
	<a href="#panel-05" class="cat-label">Endocrinology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-05">
	<a href="#cat-05" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Endocrinology</h1>
	<ul class="cat-links">
		<li><a href="/guideline/05-CG10">Diabetic Foot Problems <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/05-CG146">Osteoporosis <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/05-CG15">Type 1 Diabetes Mellitus <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/05-CG87">Type 2 Diabetes Mellitus <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-06">
	<a href="#panel-06" class="cat-label">Gastroenterology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-06">
	<a href="#cat-06" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Gastroenterology</h1>
	<ul class="cat-links">
	<li><a href="/guideline/06-CG141">Acute Upper GI Bleed <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG106">Barrett’s Oesophagus <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG165">Chronic Hepatitis B <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG86">Coeliac Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG118">Colonic Surveillance <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG131">Colo-Rectal Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG99">Constipation in Young Children <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG152">Crohn’s Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG84">Diarrhoea and Vomiting in Children <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG184">Dyspesia and GORD <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG49">Faecal Incontinence <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG188">Gallstone Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG61">Irritable Bowel Syndrome <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG125">Peritoneal Dialysis <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/06-CG166">Ulcerative Colitis <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-07">
	<a href="#panel-07" class="cat-label">Geriatrics <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-07">
	<a href="#cat-07" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Geriatrics</h1>
	<ul class="cat-links">
	<li><a href="/guideline/07-CG161">Falls Assessment <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/07-CG140">Opioids in Palliative Care <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/07-CG135">Organ Donation <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-08">
	<a href="#panel-08" class="cat-label">Haematology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-08">
	<a href="#cat-08" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Haematology</h1>
	<ul class="cat-links">
	<li><a href="/guideline/08-CG151">Neutropenic Sepsis Prevention <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/08-CG143">Sickle Cell Acute <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-09">
	<a href="#panel-09" class="cat-label">MSK <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-09">
	<a href="#cat-09" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>MSK</h1>
	<ul class="cat-links">
	<li><a href="/guideline/09-CG124">Hip Fracture <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-10">
	<a href="#panel-10" class="cat-label">Nephrology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-10">
	<a href="#cat-10" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Nephrology</h1>
	<ul class="cat-links">
	<li><a href="/guideline/10-CG169">Acute Kidney Injury <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/10-CG2">Bladder Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/10-CG182">Chronic Kidney Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/10-CG187">Hyperphosphataemia <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-11">
	<a href="#panel-11" class="cat-label">Neurology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-11">
	<a href="#cat-11" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Neurology</h1>
	<ul class="cat-links">
	<li><a href="/guideline/11-CG35">Parkinson’s Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG68">Stroke <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG102">Bacterial Meningitis <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG105">Motor Neurone Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG109">Transient Loss of Consciousness <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG137">Epilepsies <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG150">Headaches <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG162">Stroke Rehabilitation <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG173">Neuropathic Pain <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG176">Head Injury <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/11-CG186">Multiple Sclerosis <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-12">
	<a href="#panel-12" class="cat-label">Opthalmology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-12">
	<a href="#cat-12" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Opthalmology</h1>
	<ul class="cat-links">
	<li><a href="/guideline/12-CG85">Glaucoma <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-13">
	<a href="#panel-13" class="cat-label">Psychiatry <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-13">
	<a href="#cat-13" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Psychiatry</h1>
	<ul class="cat-links">
	<li><a href="/guideline/13-CG115">Alcohol Mis-use Disorder <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/13-CG90">Depression in Adults <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/13-CG9">Eating Disorders (Anorexia) <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/13-CG31">Generalised Anxiety, Social Anxiety Disorder, OCD and PTSD <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/13-CG178">Psychosis & Schizophrenia and Bi-Polar Disorder <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-14">
	<a href="#panel-14" class="cat-label">Respiratory <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-14">
	<a href="#cat-14" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Respiratory</h1>
	<ul class="cat-links">
	<li><a href="/guideline/14-CG101">COPD <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/14-CG163">Idiopathic Pulmonary Fibrosis (Idiopathic or Crytogenic Fibrosing Alveolitis) <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/14-CG121">Lung Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/14-CG191">Pneumonia <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/14-CG83">Rehabilitation after Critical Illness <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/14-CG69">Respiratory Tract Infection – Antibiotic Guidance <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/14-CG117">Tuberculosis <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-15">
	<a href="#panel-15" class="cat-label">Rheumatology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-15">
	<a href="#cat-15" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Rheumatology</h1>
	<ul class="cat-links">
	<li><a href="/guideline/15-CG79">Rheumatoid Arthritis <img src="/i/chevron-right.svg" alt="" /></a></li>
	<li><a href="/guideline/15-CG177">Osteoarthritis <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-16">
	<a href="#panel-16" class="cat-label">Urology <img src="/i/chevron-right.svg" alt="" /></a>
	<div class="cat-panel" id="panel-16">
	<a href="#cat-16" class="back"><img src="/i/chevron-left.svg" alt="Back to"> Categories</a>
	<h1>Urology</h1>
	<ul class="cat-links">
		<li><a href="/guideline/16-CG97">Lower Urinary Tract Symptoms <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/16-CG175">Prostate Cancer <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/16-CG171">Urinary Incontinence in Women <img src="/i/chevron-right.svg" alt="" /></a></li>
		<li><a href="/guideline/16-CG148">Urinary Incontinence in Neurological Disease <img src="/i/chevron-right.svg" alt="" /></a></li>
	</ul>
	</div>
</li>
<li id="cat-about">
	<a href="/about" class="cat-label">About <img src="/i/chevron-right.svg" alt="" /></a>
</li>
</ul>
</nav>

</main>
<?php
include($dr . "footer.php");
?>
<script>
/* fontfaceobserver https://github.com/bramstein/fontfaceobserver/ */
(function(){'use strict';function f(a){this.a=k;this.b=void 0;this.d=[];var b=this;try{a(function(a){l(b,a)},function(a){m(b,a)})}catch(c){m(b,c)}}var k=2;function n(a){return new f(function(b,c){c(a)})}function p(a){return new f(function(b){b(a)})}
function l(a,b){if(a.a===k){if(b===a)throw new TypeError("Promise resolved with itself.");var c=!1;try{var d=b&&b.then;if(null!==b&&"object"===typeof b&&"function"===typeof d){d.call(b,function(b){c||l(a,b);c=!0},function(b){c||m(a,b);c=!0});return}}catch(e){c||m(a,e);return}a.a=0;a.b=b;q(a)}}function m(a,b){if(a.a===k){if(b===a)throw new TypeError("Promise rejected with itself.");a.a=1;a.b=b;q(a)}}
function q(a){setTimeout(function(){if(a.a!==k)for(;a.d.length;){var b=a.d.shift(),c=b[0],d=b[1],e=b[2],b=b[3];try{0===a.a?"function"===typeof c?e(c.call(void 0,a.b)):e(a.b):1===a.a&&("function"===typeof d?e(d.call(void 0,a.b)):b(a.b))}catch(g){b(g)}}},0)}f.prototype.e=function(a){return this.c(void 0,a)};f.prototype.c=function(a,b){var c=this;return new f(function(d,e){c.d.push([a,b,d,e]);q(c)})};
function r(a){return new f(function(b,c){function d(c){return function(d){g[c]=d;e+=1;e===a.length&&b(g)}}var e=0,g=[];0===a.length&&b(g);for(var h=0;h<a.length;h+=1)a[h].c(d(h),c)})}function s(a){return new f(function(b,c){for(var d=0;d<a.length;d+=1)a[d].c(b,c)})};window.Promise||(window.Promise=f,window.Promise.resolve=p,window.Promise.reject=n,window.Promise.race=s,window.Promise.all=r,window.Promise.prototype.then=f.prototype.c,window.Promise.prototype["catch"]=f.prototype.e);}());
(function(){'use strict';function e(a){this.a=document.createElement("div");this.a.setAttribute("aria-hidden","true");this.a.appendChild(document.createTextNode(a));this.b=document.createElement("span");this.c=document.createElement("span");this.f=document.createElement("span");this.e=document.createElement("span");this.d=-1;this.b.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";this.c.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";
this.e.style.cssText="display:inline-block;position:absolute;height:100%;width:100%;overflow:scroll;";this.f.style.cssText="display:inline-block;width:200%;height:200%;";this.b.appendChild(this.f);this.c.appendChild(this.e);this.a.appendChild(this.b);this.a.appendChild(this.c)}function r(a,b,c){a.a.style.cssText="min-width:20px;min-height:20px;display:inline-block;visibility:hidden;position:absolute;width:auto;margin:0;padding:0;top:0;white-space:nowrap;font-size:100px;font-family:"+b+";"+c}
function s(a){var b=a.a.offsetWidth,c=b+100;a.e.style.width=c+"px";a.c.scrollLeft=c;a.b.scrollLeft=a.b.scrollWidth+100;return a.d!==b?(a.d=b,!0):!1}function t(a,b){a.b.addEventListener("scroll",function(){s(a)&&null!==a.a.parentNode&&b(a.d)},!1);a.c.addEventListener("scroll",function(){s(a)&&null!==a.a.parentNode&&b(a.d)},!1);s(a)};function u(a,b){this.family=a;this.style=b.style||"normal";this.variant=b.variant||"normal";this.weight=b.weight||"normal";this.stretch=b.stretch||"stretch";this.featureSettings=b.featureSettings||"normal"}var v=null;
u.prototype.a=function(a){a=a||"BESbswy";var b="font-style:"+this.style+";font-variant:"+this.variant+";font-weight:"+this.weight+";font-stretch:"+this.stretch+";font-feature-settings:"+this.featureSettings+";-moz-font-feature-settings:"+this.featureSettings+";-webkit-font-feature-settings:"+this.featureSettings+";",c=document.createElement("div"),k=new e(a),l=new e(a),m=new e(a),f=-1,d=-1,g=-1,n=-1,p=-1,q=-1,h=this;r(k,"sans-serif",b);r(l,"serif",b);r(m,"monospace",b);c.appendChild(k.a);c.appendChild(l.a);
c.appendChild(m.a);document.body.appendChild(c);n=k.a.offsetWidth;p=l.a.offsetWidth;q=m.a.offsetWidth;return new Promise(function(a,y){function w(){null!==c.parentNode&&document.body.removeChild(c)}function x(){if(-1!==f&&-1!==d&&-1!==g&&f===d&&d===g){if(null===v){var b=/AppleWeb[kK]it\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);v=!!b&&(536>parseInt(b[1],10)||536===parseInt(b[1],10)&&11>=parseInt(b[2],10))}v?f===n&&d===n&&g===n||f===p&&d===p&&g===p||f===q&&d===q&&g===q||(w(),a(h)):(w(),
a(h))}}setTimeout(function(){w();y(h)},3E3);t(k,function(a){f=a;x()});r(k,h.family+",sans-serif",b);t(l,function(a){d=a;x()});r(l,h.family+",serif",b);t(m,function(a){g=a;x()});r(m,h.family+",monospace",b)})};window.FontFaceObserver=u;window.FontFaceObserver.prototype.check=u.prototype.a;}());
/*
Fonts are loaded through @font-face rules in the CSS whenever an element references them.
FontFaceObserver creates a referencing element to trigger the font request, and listen for font load events.
When all fonts are loaded, we enable them by adding a class to the html element
*/
(function( w ){
// if the class is already set, we're good.
if( w.document.documentElement.className.indexOf( "wf-active" ) > -1 ){
	return;
}
var fontA = new w.FontFaceObserver( "Lato", {
	weight: 300,
	style: "normal"
});
var fontB = new w.FontFaceObserver( "Lato", {
	weight: 500,
	style: "normal"
});
w.Promise
	.all([fontA.check(), fontB.check()])
	.then(function(){
		w.document.documentElement.className += " wf-active";
	});
}( this ));
</script>
<script src="/js/addtohomescreen.min.js" async></script>

</body>
</html>
