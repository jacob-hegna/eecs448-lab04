<?php

$_POST['username'] = "jacobhegna@gmail.com";
$_POST['password'] = "testpwd";
$_POST['textbook-qnt'] = 5;
$_POST['shp'] = "overnight";

$document = "";

$document .=
"
<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <title>Post-purchase screen - Jacob's store</title>
</head>
<body>
    <div id=\"topbar\"></div>

    <div id=\"store\">
        <center><h2>Jacob's Store</h2></center>

        <div id=\"purchase-div\">
";

$username = $_POST['username'];
$password = $_POST['password'];

$document .= "Hello, " . $username . ", thanks for making a purchase from Jacob's store! For your record-keeping, the password used for the purchase was: '" . $password . "'.";

$document .= "<table><tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>";

$textbook['qnt']      = $_POST['textbook-qnt'];
$textbook['price']    = 100;
$textbook['subtotal'] = $textbook['qnt'] * $textbook['price'];

$document .= "<tr><td>Math Textbook</td><td>" . $textbook['qnt'] . "</td><td>$" . $textbook['price'] . "</td><td>$" . $textbook['subtotal'] . "</td></tr>";

$calculator['qnt']      = $_POST['calculator-qnt'];
$calculator['price']    = 50;
$calculator['subtotal'] = $calculator['qnt'] * $calculator['price'];

$document .= "<tr><td>Calculator</td><td>" . $calculator['qnt'] . "</td><td>$" . $calculator['price'] . "</td><td>$" . $calculator['subtotal'] . "</td></tr>";

$notebook['qnt']      = $_POST['notebook-qnt'];
$notebook['price']    = 10;
$notebook['subtotal'] = $notebook['qnt'] * $notebook['price'];

$document .= "<tr><td>Notebook</td><td>" . $notebook['qnt'] . "</td><td>$" . $notebook['price'] . "</td><td>$" . $notebook['subtotal'] . "</td></tr>";

$shipping = $_POST['shp'];

$document .= "<tr><td>Shipping</td><td>" . $shipping . "</td></tr>";

$document .= "</table>";

$document .=
"
        </div>
    </div>
</body>
</html>
";

echo $document;

?>