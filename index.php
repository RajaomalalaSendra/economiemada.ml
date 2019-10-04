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

$dashboard = new Dashboard();
contentContainer($dashboard->createDashboard());
contentContainer($dashboard->createDashboardSecond());
contentContainer($dashboard->createDashboardThree());

footer_web();
getJS_web("./");
htmlTagTail();
?>