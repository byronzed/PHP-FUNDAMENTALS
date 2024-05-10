
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>
    <h1>Order Details</h1>
    <?php
        $selected_order = $_POST['select_all'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];
        echo "<p><b>Selected Order:</b> $selected_order</p>";
        echo "<p><b>Quantity:</b> $quantity</p>";
        echo "<p><b>Cash:</b> $cash</p>";
    ?>
</body>
</html>
