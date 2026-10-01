<?php
    require_once('..\controller\productsinfo_controller.php');
    $product_arr = get_products();
?>
<html>
    <head>
        <title>Week4 PA - Randall Lowe</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h2>Products:</h2>
        <table>
            <tr style="font-size:large;">
                <th>Product #</th>
                <th>Product Name</th>
                <th>Product Type</th>
            </tr>

            <?php foreach ($product_arr as $product):;?>
                <tr>
                    <td><?php echo $product["ProductNo"];?></td>
                    <td><?php echo $product["Name"];?></td>
                    <td><?php echo $product["Type"];?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>