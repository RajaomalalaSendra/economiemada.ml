<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/matieres/eco.php");

// <html>tag
htmlTagHead("Economies", "./../../../");

navbar_web();
sidebar_web($file_eco_sidebar);

// index content of economie
content_card($show_id_eco[0], $file_content_eco);
content_card($show_id_eco[1], $file_content_eco_one);
content_card($show_id_eco[2], $file_content_eco_two);
content_card($show_id_eco[3], $file_content_eco_three);

footer_web();
getJS_web("./../../../");
htmlTagTail();
?>