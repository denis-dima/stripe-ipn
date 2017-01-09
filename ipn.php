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

$token  = $_POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
    'email' => 'testing@sevio.ro',
    'source'  => $token
));

$charge = \Stripe\Charge::create(array(
    'customer' => $customer->id,
    'amount'   => 999,
    'currency' => 'usd'
));

var_dump($charge);

echo '<h1>Successfully charged $9.99!</h1>';