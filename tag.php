<?php

function htmlTagHead($title, $path){
    $html = "
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"./assets/img/apple-icon.png\">
        <link rel=\"icon\" type=\"image/png\" href=\"".$path."static/assets/img/economiemada5.png\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>".$title."</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
        <link href=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
        -->
        <!-- CSS Files -->
        <link href=\"".$path."static/assets/css/bootstrap.min.css\" rel=\"stylesheet\" />
        <link href=\"".$path."static/assets/css/now-ui-kit.css?v=1.2.0\" rel=\"stylesheet\" />
        <link href=\"".$path."static/assets/css/main.css\" rel=\"stylesheet\" />
    </head>
    <body class=\"index-page sidebar-collapse\">";
    echo $html;
}

function htmlTagTail(){
    echo "
    </body>
    </html>";
}

function closeTag($close){
    foreach($close as $cls){
        echo $cls;
    }
}

function linkTag($href, $title){
    echo "<a href=\"".$href."\">".$title."</a>";
}

function footerTag(){
    echo "
    <footer class=\"sticky-footer\">
        <p>&copy;Copyright 2019 LearnOOPInPHP</p>
    </footer>";
}

function tableHeaderTag($contents){
    echo "<table><tr>";
        foreach($contents as $content){
            echo "<th>".$content."</th>";
        }
    echo "</tr>";
}

function tableBodyTag($contents){
    echo "<tr>";
        foreach($contents as $content){
            echo "<td>".$content."</td>";
        }
    echo "</tr>";
}

function tableCloseTag(){
    echo "</table>";
}


function getJS_web($path){
    echo "<!--   Core JS Files   -->
    <script src=\"".$path."static/assets/js/core/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"".$path."static/assets/js/core/popper.min.js\" type=\"text/javascript\"></script>
    <script src=\"".$path."static/assets/js/core/bootstrap.min.js\" type=\"text/javascript\"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src=\"".$path."static/assets/js/plugins/bootstrap-switch.js\"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src=\"".$path."static/assets/js/plugins/nouislider.min.js\" type=\"text/javascript\"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src=\"".$path."static/assets/js/plugins/bootstrap-datepicker.js\" type=\"text/javascript\"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src=\"".$path."static/assets/js/now-ui-kit.js?v=1.2.0\" type=\"text/javascript\"></script>
    <!-- The main script of the project -->
    <script src=\"".$path."static/assets/js/main.js\" type=\"text/javascript\"></script>
    <script>
  
      function scrollToDownload() {
  
        if ($('.section-download').length != 0) {
          $(\"html, body\").animate({
            scrollTop: $('.section-download').offset().top
          }, 1000);
        }
      }

      $(\"#menu-toggle\").click(function(e) {
        e.preventDefault();
        $(\"#wrapper\").toggleClass(\"toggled\");
      });
    </script>";
}

// It doesn't work for now
function brTag(){
    echo"<br/><br/><br/><br/>";
}

function content_card($id, $file){
    echo "
    <div class=\"getcol-md col-md-9 pushright\" id=\"".$id."\">
            <div class=\"card\">
            <div class=\"card-header\">
                <ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#".str_replace(' ', '',$file["title"][0])."\" role=\"tab\">
                    <i class=\"now-ui-icons ".$file["icons"][0]."\"></i>".$file["title"][0]."
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#".str_replace(' ', '',$file["title"][1])."\" role=\"tab\">
                    <i class=\"now-ui-icons ".$file["icons"][1]."\"></i>".$file["title"][1]."
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#".str_replace(' ', '',$file["title"][2])."\" role=\"tab\">
                    <i class=\"now-ui-icons ".$file["icons"][2]."\"></i>".$file["title"][2]."
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#".str_replace(' ', '',$file["title"][3])."\" role=\"tab\">
                    <i class=\"now-ui-icons ".$file["icons"][3]."\"></i>".$file["title"][3]."
                    </a>
                </li>
                </ul>
            </div>
            <div class=\"card-body\">
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"".str_replace(' ', '',$file["title"][0])."\" role=\"tabpanel\">
                        <div>".$file["contents"][0]."</div>
                    </div>
                    <div class=\"tab-pane\" id=\"".str_replace(' ', '',$file["title"][1])."\" role=\"tabpanel\">
                        <div>".$file["contents"][1]."</div>
                    </div>
                    <div class=\"tab-pane\" id=\"".str_replace(' ', '',$file["title"][2])."\" role=\"tabpanel\">
                        <div>".$file["contents"][2]."</div>
                    </div>
                    <div class=\"tab-pane\" id=\"".str_replace(' ', '',$file["title"][3])."\" role=\"tabpanel\">
                        <div>".$file["contents"][3]."</div>
                    </div>
                </div>
            </div>
            </div>
        </div>
";
}

function contentContainer($contents){
    echo "
    <div class\"container\">".
        $contents."
    </div>";
}

?>