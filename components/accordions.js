$(document).ready(function () {
    // Add minus icon for collapse element which is open by default
    $(".accordion .collapse.show").each(function () {
        $(this).prev(".accordion .card-header").addClass("highlight");
    });

    // Highlight open collapsed element 
    $(".accordion  .card-header .btn").click(function () {
        $(".accordion .card-header").not($(this).parents()).removeClass("highlight");
        $(this).parents(".accordion .card-header").toggleClass("highlight");
    });
});