<?php
/**
 * Created by PhpStorm.
 * User: eliysha
 * Date: 17/08/15
 * Time: 21:43
 */

 require_once('./config.php');
?>

<form action="doPayment.php" method="post">
    <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-amount="5000" data-description="One year's subscription"></script>
</form>