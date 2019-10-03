<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/niveau/M1.php");

// <html>tag
htmlTagHead("M1", "./../../../");

navbar_web();

sidebar_web($file_m1_sidebar);

// index content of L2
content_card($show_id_m1[0], $file_content_m1);
content_card($show_id_m1[1], $file_content_m1_one);
content_card($show_id_m1[2], $file_content_m1_two);
content_card($show_id_m1[3], $file_content_m1_three);

footer_web();
getJS_web("./../../../");
htmlTagTail();
?>