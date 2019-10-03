<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/niveau/L1.php");

// <html>tag
htmlTagHead("L1", "./../../../");

navbar_web();

sidebar_web($file_l1_sidebar);

// index content of L1
content_card($show_id_l1[0], $file_content_l1);
content_card($show_id_l1[1], $file_content_l1_one);
content_card($show_id_l1[2], $file_content_l1_two);
content_card($show_id_l1[3], $file_content_l1_three);

footer_web();
getJS_web("./../../../");
htmlTagTail();
?>