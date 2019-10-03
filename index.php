<!DOCTYPE html>
<?php
include("tag.php");
include("common/navbar.php");
include("common/header.php");
include("common/sidebar.php");
include("common/footer.php");
include("contents/index.php");

// <html>tag
htmlTagHead("Welcome To economie", "./");

navbar_web();

content($index_contents);

footer_web();
getJS_web("./");
htmlTagTail();
?>