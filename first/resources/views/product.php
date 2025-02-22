<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "2px solid black">
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
    </tr>
    <?php
        foreach ($products as $product) {
            # code...
            echo "
            <tr>
            <td>$product[product_name]</td>
            <td>$product[product_price]</td>
            </tr>";
        }
    ?>
    </table>
    <?php
        echo "<p>The discounted price of $productName after 10% discount is $discountPrice</p>"
    ?>
</body>
</html>