<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: stripe-ipn
 * Date: 06.01.2017
 * Time: 16:45
 * All rights and copyrights are owned by Sevio Solutions®
 */

include_once ("config.php");

define ('AMOUNT',999);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skrill Payment Form</title>
    <style>
        label {
            display: block;
            padding: 5px 0;
        }
        input {
            display: block;
        }
    </style>
</head>
<body>
<form action="ipn.php" method="POST">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo PK_TEST ?>"
        data-amount="999"
        data-name="Demo Site"
        data-description="Widget"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto">
    </script>
</form>
</body>
</html>