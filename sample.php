<!DOCTYPE html>
<?php
include("tag.php");
include("common/navbar.php");
include("common/header.php");
include("common/sidebar.php");
include("common/footer.php");

// <html>tag
htmlTagHead("Welcome To economie", "./");

navbar_web();

brTag();
header_web();
sidebar_web();


?>
 
<ul class="sidebar">
    <li class = "btn btn-info godown" id="introduction">Introduction</li><br/>
    <li class = "btn btn-info godown" id="chapter_one">Chapter 1</li><br/>
    <li class = "btn btn-info godown" id="chapter_two">Chapter 2</li>
</ul>
<div id="intro">
    <h1>Here Intro</h1>
</div>
<div id="chap_one">
    <h1>Here Chapter One</h1>
</div>
<div id="chap_two">
    <h1>Here Chapter Two</h1>
</div>
<?php

echo "<div class=\"pushright\">
    Center vertically and horizontally and not this
</div>";    

footer_web();
getJS_web("./");
htmlTagTail();
?>