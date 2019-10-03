<?php

function navbar_web(){
    echo "
    <nav class=\"navbar navbar-expand-lg bg-info fixed-top\" color-on-scroll=\"400\">
    <div class=\"container\">
      <div class=\"navbar-translate\">
        <a class=\"navbar-brand\" href=\"/economie/index.php\" rel=\"tooltip\" title=\"Retour vers le menu Principal.\">
          MENU
        </a>
        <button class=\"navbar-toggler navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-bar top-bar\"></span>
          <span class=\"navbar-toggler-bar middle-bar\"></span>
          <span class=\"navbar-toggler-bar bottom-bar\"></span>
        </button>
      </div>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\" data-nav-image=\"./assets/img/blurred-image-1.jpg\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink1\" data-toggle=\"dropdown\">
              <i class=\"now-ui-icons education_paper\"></i>
              <p>Leçons Par Matieres</p>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink1\">
              <a class=\"dropdown-item\" href=\"/economie/economie/matieres/economies/economies.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> Economies
              </a>
              <a class=\"dropdown-item\" href=\"/economie/economie/matieres/mathematiques/mathematiques.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> Mathematiques
              </a>
              <a class=\"dropdown-item\" href=\"/economie/economie/matieres/statistiques/statistiques.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> Statistiques
              </a>
              <a class=\"dropdown-item\" href=\"/economie/economie/matieres/autres/autres.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> Autres
              </a>
            </div>
          </li>
          <li class=\"nav-item dropdown\">
          <a href=\"#\" class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink2\" data-toggle=\"dropdown\">
            <i class=\"now-ui-icons education_paper\"></i>
            <p>Leçons Par Niveau</p>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink2\">
            <a class=\"dropdown-item\" href=\"/economie/economie/niveau/L1/L1.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> L1
            </a>
            <a class=\"dropdown-item\" href=\"/economie/economie/niveau/L2/L2.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> L2
            </a>
            <a class=\"dropdown-item\" href=\"/economie/economie/niveau/L3/L3.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> L3
            </a>
            <a class=\"dropdown-item\" href=\"/economie/economie/niveau/M1/M1.php\">
                <i class=\"now-ui-icons education_agenda-bookmark bg-info\"></i> M1
            </a>
          </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>";
}

?>