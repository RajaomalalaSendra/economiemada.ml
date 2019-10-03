<?php

function sidebar_web($data){
    echo "
    <div class=\"d-flex goesdown\" id=\"wrapper\">
        <div class=\"bg-info border-right goesdown\" id=\"sidebar-wrapper\">
            <div class=\"list-group list-group-flush\">
            $data
            </div>
        </div>
        <div id=\"menu-toggle\"><i class=\"now-ui-icons education_paper goesdown\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Voir le menu sur le Sidebar\" data-container=\"body\" data-animation=\"true\"></i></div>
    </div>";
}

function sidebar_web_test(){

    echo "Here";
}

?>