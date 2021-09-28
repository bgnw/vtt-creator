<!DOCTYPE html>
<html lang="en">
<?php
$home = $_SERVER['CONTEXT_DOCUMENT_ROOT'];
require_once "$home/incl/head.php";
?>
<link rel="stylesheet" href="vtt.css" type="text/css">

<body>

<div class="header">
    <p class="title">Ben Agnew</p>
    <p class="subtitle">VTT Caption Creator</p>
</div>

<div class="sep"></div>

<div class="vtt__section">
    <input class="vtt__time-field" id="from-min" type="text"> :
    <input class="vtt__time-field" id="from-sec" type="text"> to
    <input class="vtt__time-field" id="to-min" type="text"> :
    <input class="vtt__time-field" id="to-sec" type="text">
    <textarea class="vtt__content-field" id="content" cols="20" rows="3" ></textarea>
</div>

<?php include_once "$home/incl/footer.php"; ?>
</body>
</html>
