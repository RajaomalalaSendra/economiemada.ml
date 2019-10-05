$(document).ready(function(){
    // the js for the economics
    $(function() {
        // economie
		$("#introduction_eco_card").show();
        hideCard(["#lesson_one_eco_card", "#lesson_two_eco_card", 
        "#lesson_three_eco_card"]);

        // math
        $("#introduction_math_card").show();
        hideCard(["#lesson_one_math_card", "#lesson_two_math_card", 
        "#lesson_three_math_card"]);

        //stat
        $("#introduction_stat_card").show();
        hideCard(["#lesson_one_stat_card", "#lesson_two_stat_card", 
        "#lesson_three_stat_card"]);

        // Others
        $("#introduction_others_card").show();
        hideCard(["#lesson_one_others_card", "#lesson_two_others_card", 
        "#lesson_three_others_card"]);

        // L1
        $("#introduction_l1_card").show();
        hideCard(["#lesson_one_l1_card", "#lesson_two_l1_card", 
        "#lesson_three_l1_card"]);

        // L2
        $("#introduction_l2_card").show();
        hideCard(["#lesson_one_l2_card", "#lesson_two_l2_card", 
        "#lesson_three_l2_card"]);

        // L3
        $("#introduction_l3_card").show();
        hideCard(["#lesson_one_l3_card", "#lesson_two_l3_card", 
        "#lesson_three_l3_card"]);


        // M1
        $("#introduction_m1_card").show();
        hideCard(["#lesson_one_m1_card", "#lesson_two_m1_card", 
        "#lesson_three_m1_card"]);

    })
    
    // economie
    hideOneCard("#introduction_eco", "#lesson_one_eco", 
    "#lesson_two_eco", "#lesson_three_eco");
    hideOneCard("#lesson_one_eco", "#introduction_eco", 
    "#lesson_two_eco", "#lesson_three_eco");
    hideOneCard("#lesson_two_eco", "#introduction_eco", 
    "#lesson_one_eco", "#lesson_three_eco");
    hideOneCard("#lesson_three_eco", "#introduction_eco", 
    "#lesson_two_eco", "#lesson_one_eco");

    // mathematiques
    hideOneCard("#introduction_math", "#lesson_one_math", 
    "#lesson_two_math", "#lesson_three_math");
    hideOneCard("#lesson_one_math", "#introduction_math", 
    "#lesson_two_math", "#lesson_three_math");
    hideOneCard("#lesson_two_math", "#introduction_math", 
    "#lesson_one_math", "#lesson_three_math");
    hideOneCard("#lesson_three_math", "#introduction_math", 
    "#lesson_two_math", "#lesson_one_math");

    // statistiques
    hideOneCard("#introduction_stat", "#lesson_one_stat", 
    "#lesson_two_stat", "#lesson_three_stat");
    hideOneCard("#lesson_one_stat", "#introduction_stat", 
    "#lesson_two_stat", "#lesson_three_stat");
    hideOneCard("#lesson_two_stat", "#introduction_stat", 
    "#lesson_one_stat", "#lesson_three_stat");
    hideOneCard("#lesson_three_stat", "#introduction_stat", 
    "#lesson_two_stat", "#lesson_one_stat");

    // autres
    hideOneCard("#introduction_others", "#lesson_one_others", 
    "#lesson_two_others", "#lesson_three_others");
    hideOneCard("#lesson_one_others", "#introduction_others", 
    "#lesson_two_others", "#lesson_three_others");
    hideOneCard("#lesson_two_others", "#introduction_others", 
    "#lesson_one_others", "#lesson_three_others");
    hideOneCard("#lesson_three_others", "#introduction_others", 
    "#lesson_two_others", "#lesson_one_others");

    // L1
    hideOneCard("#introduction_l1", "#lesson_one_l1", 
    "#lesson_two_l1", "#lesson_three_l1");
    hideOneCard("#lesson_one_l1", "#introduction_l1", 
    "#lesson_two_l1", "#lesson_three_l1");
    hideOneCard("#lesson_two_l1", "#introduction_l1", 
    "#lesson_one_l1", "#lesson_three_l1");
    hideOneCard("#lesson_three_l1", "#introduction_l1", 
    "#lesson_two_l1", "#lesson_one_l1"); 

    // L2
    hideOneCard("#introduction_l2", "#lesson_one_l2", 
    "#lesson_two_l2", "#lesson_three_l2");
    hideOneCard("#lesson_one_l2", "#introduction_l2", 
    "#lesson_two_l2", "#lesson_three_l2");
    hideOneCard("#lesson_two_l2", "#introduction_l2", 
    "#lesson_one_l2", "#lesson_three_l2");
    hideOneCard("#lesson_three_l2", "#introduction_l2", 
    "#lesson_two_l2", "#lesson_one_l2");

    // L3
    hideOneCard("#introduction_l3", "#lesson_one_l3", 
    "#lesson_two_l3", "#lesson_three_l3");
    hideOneCard("#lesson_one_l3", "#introduction_l3", 
    "#lesson_two_l3", "#lesson_three_l3");
    hideOneCard("#lesson_two_l3", "#introduction_l3", 
    "#lesson_one_l3", "#lesson_three_l3");
    hideOneCard("#lesson_three_l3", "#introduction_l3", 
    "#lesson_two_l3", "#lesson_one_l3");

    // M1
    hideOneCard("#introduction_m1", "#lesson_one_m1", 
    "#lesson_two_m1", "#lesson_three_m1");
    hideOneCard("#lesson_one_m1", "#introduction_m1", 
    "#lesson_two_m1", "#lesson_three_m1");
    hideOneCard("#lesson_two_m1", "#introduction_m1", 
    "#lesson_one_m1", "#lesson_three_m1");
    hideOneCard("#lesson_three_m1", "#introduction_m1", 
    "#lesson_two_m1", "#lesson_one_m1");

    $(".now-ui-icons.education_paper").on("click", function(){
        var push = $(".getcol-md").attr("class")
        var push_split = push.split(" ")

        if(push_split[1] == "col-md-9"){
            $(".getcol-md").removeClass("col-md-9 pushright")
            $(".getcol-md").addClass("col-md-11 pushup")
        } else {
            $(".getcol-md").addClass("col-md-9 pushright")
            $(".getcol-md").removeClass("col-md-11 pushup")
        }
    })

});

function hideOneCard(a, b, c, d){
    $(a).on('click', function(){
        $(a+"_card").show();
        hideCard([b+"_card", c+"_card", 
        d+"_card"]);
    });
}

function hideCard(hide){
    for (let index = 0; index < hide.length; index++) {
        $(hide[index]).hide();        
    }
}