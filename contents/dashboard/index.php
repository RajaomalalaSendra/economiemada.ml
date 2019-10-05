<?php

abstract class AbstractDashboard{
    private $dashboardThree = "
        <div class=\"col-md-12\" id=\"ThirdDashboard\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <div class = \"row\">
                            <div class = \"col-md-6\">
                                <div class=\"card-body\">
                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                                            <img src = \"/economie/static/assets/img/bg1.jpg\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class = \"col-md-6\">
                                <div class=\"card-body\">
                                    <!-- Tab panes -->
                                    <div class=\"tab-content text-center\">
                                        <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                                            <div>By you trust you are here for now and in this aasdfasdfawdfasdfasdf</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    ";
    
    abstract public function  createDashBoard();
    abstract public function createDashBoardSecond();
    
    public function createDashboardThree(){
        echo $this->dashboardThree;
    }
}


?>