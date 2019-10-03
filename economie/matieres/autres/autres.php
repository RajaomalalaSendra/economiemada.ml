<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/matieres/others.php");

// <html>tag
htmlTagHead("Autres", "./../../../");

navbar_web();

sidebar_web($file_others_sidebar);

// index content of autres
content_card($show_id_others[0], $file_content_others);
content_card($show_id_others[1], $file_content_others_one);
content_card($show_id_others[2], $file_content_others_two);
content_card($show_id_others[3], $file_content_others_three);

footer_web();
getJS_web("./../../../");
htmlTagTail();
?>