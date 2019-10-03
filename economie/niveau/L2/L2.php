<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/niveau/L2.php");

// <html>tag
htmlTagHead("L2", "./../../../");

navbar_web();

sidebar_web($file_l2_sidebar);

// index content of L2
content_card($show_id_l2[0], $file_content_l2);
content_card($show_id_l2[1], $file_content_l2_one);
content_card($show_id_l2[2], $file_content_l2_two);
content_card($show_id_l2[3], $file_content_l2_three);

footer_web();
getJS_web("./../../../");
htmlTagTail();
?>