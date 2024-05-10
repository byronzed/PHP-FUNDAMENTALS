<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILI NA!</title>
</head>
<body>
    <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit;
        }

        $username = $_SESSION['username'];
        echo "<h1>Welcome to the Canteen, <span style='color: blue;'>$username</span>!</h1>";
    ?>

    <h2>Bili na!</h2>
    <form action="orderna.php" method="post">
        <p><b>Quantity</b></p>
        <ul>
            <li>Milktea = 45php</li>
            <li>Lutong Ulam = 75php</li>
            <li>Drinks = 50php</li>
        </ul>
        <b>Choose your order: </b>
        <select name="select_all">
            <option value="Milktea">Milktea</option><option value="Lutong Ulam">Lutong Ulam</option><option value="Drinks">Drinks</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash"> <br><br>
        <input type="submit" value="Submit Order">
    </form>
</body>
</html>
