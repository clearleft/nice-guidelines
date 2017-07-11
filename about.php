<?php
$dr = str_replace($_SERVER['SCRIPT_NAME'], '/inc/', $_SERVER['SCRIPT_FILENAME']);

$title = "About ";

?>
<!DOCTYPE html>
<html lang="en-gb" manifest="manifest.appcache" class="wf-active">
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

<nav><a href="/#cat-about" class="back"><img src="/i/chevron-left.svg" alt="Go"> Back</a></nav>
<h1>About</h1>

<article class="prose">
<p>The <a href="https://www.nice.org.uk/">National Institute for Health and Care Excellence</a> (NICE) provides guidelines to the UK's National Health Service (NHS). These guidelines make evidence-based recommendations including preventing and managing specific conditions, improving health and managing medicines, and are expected to be used by NHS healthcare professionals. The NICE guidelines are comprehensive and wide-ranging but the pertinent clinical information is not presented in a readily available format.</p>

<p> To help with his own practise, Dr David P Sheppard carefully summarised the NICE guidance into handy single pages for quick and easy access. Seeing it could be useful to other medical and clinical practitioners, Dr Sheppard worked with <a href="http://clearleft.com">Clearleft</a> to make his summaries freely available through this website and app for use by fellow professionals. </p>

<p>All summaries provided here are based on NICE guidelines and provided in good faith but without any conditions, warranties, or guarantees. Neither NICE guidance nor these summaries overrides the individual responsibility of healthcare professionals to make decisions appropriate to the circumstances of the individual patient, in consultation with the patient and/or guardian or carer.</p>

<p>This entire website is open source. Please feel free to make improvements by branching or submitting an issue on the <a href="https://github.com/clearleft/nice-guidelines">Github repository</a>, or contact Dr Sheppard (davidsheppard2@nhs.net) if you wish to help in keeping the summaries up-to-date and inline with revisions to NICE guidance.</p>
</article>

</main>
<?php
include($dr . "footer.php");
?>
</body>

</html>
