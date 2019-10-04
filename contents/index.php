<?php

include_once("dashboard/index.php");

class Dashboard extends AbstractDashboard {
    private $index_contents = "
    <br/><br/><br/><br/><br/><br/>
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
                                            <img src = \"http://localhost/economie/static/assets/img/bg1.jpg\">
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

    private $index_contents_two = "
    <div class=\"col-md-12\" id=\"ThirdDashboard\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <ul class=\"nav nav-tabs justify-content-center\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <div class = \"row\">
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
                            <div class = \"col-md-6\">
                                <div class=\"card-body\">
                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane active\" id=\"home\" role=\"tabpanel\">
                                            <img src = \"http://localhost/economie/static/assets/img/bg1.jpg\">
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
    
    public function createDashboard(){
        echo $this->index_contents;
    }

    public function createDashboardSecond(){
        echo $this->index_contents_two;
    }
}

?>