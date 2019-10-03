<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/niveau/L3.php");

// <html>tag
htmlTagHead("L3", "./../../../");

navbar_web();

sidebar_web($file_l3_sidebar);

// index content of L3
content_card($show_id_l3[0], $file_content_l3);
content_card($show_id_l3[1], $file_content_l3_one);
content_card($show_id_l3[2], $file_content_l3_two);
content_card($show_id_l3[3], $file_content_l3_three);


footer_web();
getJS_web("./../../../");
htmlTagTail();
?>