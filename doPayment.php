<?php
/**
 * Created by PhpStorm.
 * User: eliysha
 * Date: 17/08/15
 * Time: 21:55
 */
require_once('./config.php');
$token  = $_POST['stripeToken'];
$customer = \Stripe\Customer::create(array(
    'email' => 'customer@example.com',
    'card'  => $token
));
$charge = \Stripe\Charge::create(array(
    'customer' => $customer->id,
    'amount'   => 5000,
    'currency' => 'usd'
));
echo '<h1>Successfully charged $5!</h1>';

