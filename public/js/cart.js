$(document).ready(function () {
    $("input.js-cart-quantity").on("change", function () {
        var _this = $(this);
        var _siblings = _this.siblings("input.js-cart-product-id");
        if (_siblings.length == 0) {
            console.error("Bad markup");
            return
        }
        _product_id = $(_siblings.first());
        var product_id = _product_id.val();
        var quantity = _this.val();

        $.post(
            "/ajax/cart/update.php",
            {
                product_id: product_id,
                quantity: quantity
            },
            function (data, textStatus, jqXHR) {
                console.log(data)
                console.log(textStatus)
                if (textStatus == "success") {

                } else {

                }
            },
            "json"
        );
    });
});