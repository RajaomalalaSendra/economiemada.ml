<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/matieres/math.php");

// <html>tag
htmlTagHead("Mathematiques", "./../../../");

navbar_web();

sidebar_web($file_math_sidebar);

// index content of math
content_card($show_id_math[0], $file_content_math);
content_card($show_id_math[1], $file_content_math_one);
content_card($show_id_math[2], $file_content_math_two);
content_card($show_id_math[3], $file_content_math_three);
footer_web();
getJS_web("./../../../");
htmlTagTail();
?>