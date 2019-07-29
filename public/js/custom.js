//custom js file
$(document).ready(function() {
    // Department Change
    $("#product_cat").change(function() {
        // Department id
        var id = $(this).val();

        // Empty the dropdown
        //$("#product_item")
        //.find("option")
        //.not(":first")
        //.remove();

        // AJAX request
        $.get({
            url: "/product/items/" + id,
            //type: "get",
            dataType: "html"
        }).done(function(data) {
            $("#product_item").html(data);
            //INIT SELECT
            $("select").formSelect();
        });
    });

    //deactivate a saving
    $(".saving-review").on("click", function(e) {
        // Department id
        preventDefault();
        //get url
        var url_link = $(this).attr("href");
        var id = $(this).val();

        // Empty the dropdown
        //$("#product_item")
        //.find("option")
        //.not(":first")
        //.remove();

        // AJAX request
        $.get({
            url: "/saving/inactive/" + url_link
            //type: "get",
            //dataType: "html"
        }).done(function(data) {
            $("#product_item").html(data);
            //INIT SELECT
            $("select").formSelect();
        });
    });
});
