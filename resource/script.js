let base_url = "https://wtassignment4.herokuapp.com/order.php";

    function get_order() {
    var text_id = $("#text").val();
    console.log("connected")
    let url = base_url + "?req=order_data&id="+ text_id;
    $.get(url,function(data,success){
        
        $("table").css("display", "block");
        console.log(data.name)
        $("#dishname").text(data.name);
        $("#smallprice").text(data.price_small);
        $("#largeprice").text(data.price_large);
        $("#dishdes").text(data.description);
        $("#sprice").text("Price For Small Serving");
        $("#lprice").text("Price For Large Serving");

        $("#dishimg").attr("src","resource/food.jpeg");


    });
}