<?php
/**
 * Created by PhpStorm.
 * User: eliysha
 * Date: 17/08/15
 * Time: 22:08
 */

require_once('vendor/autoload.php');
$stripe = array(
    'secret_key'      => 'sk_test_0vIaMvY4yi7uPS0W6VOR4nUi',
    'publishable_key' => 'pk_test_08EAp4fHoavXneG45tD4yK5h'
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
