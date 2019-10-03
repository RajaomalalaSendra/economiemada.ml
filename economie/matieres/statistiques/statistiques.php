<!DOCTYPE html>
<?php
include("./../../../tag.php");
include("./../../../common/navbar.php");
include("./../../../common/header.php");
include("./../../../common/sidebar.php");
include("./../../../common/footer.php");
include("./../../../contents/matieres/stats.php");

// <html>tag
htmlTagHead("Statistiques", "./../../../");

navbar_web();

sidebar_web($file_stat_sidebar);

// index content of economie
content_card($show_id_stat[0], $file_content_stats);
content_card($show_id_stat[1], $file_content_stats_one);
content_card($show_id_stat[2], $file_content_stats_two);
content_card($show_id_stat[3], $file_content_stats_three);

footer_web();
getJS_web("./../../../");
htmlTagTail();
?>