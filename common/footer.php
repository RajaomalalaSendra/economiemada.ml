<?php
function footer_web(){
    echo "
    <footer class=\"footer sticky-footer\" data-background-color=\"black\">
      <div class=\"container\">
        <nav>
          <ul>
            <li>
                Contact: +26134000000   
            </li>
            <li>
                Email: contact@learneconomie.com
            </li>
            <li>
                Adresse: Lot VT 123 Tana II 101
            </li>
          </ul>
        </nav>
        <div class=\"copyright\" id=\"copyright\">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, LearnEconomie Mada.
        </div>
      </div>
    </footer>;";
}
?>