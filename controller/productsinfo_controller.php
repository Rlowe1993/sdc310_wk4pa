<?php
    require_once('..\model\database.php');

    function get_products() {
        $product_rows = get_all_products();
        $products = array();
        if ($product_rows) {
            $products = mysqli_fetch_all($product_rows, MYSQLI_ASSOC);
        }
        return $products;
    }
?>
