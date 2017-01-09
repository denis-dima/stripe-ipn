<?php
/**
 * Created by Sevio Solutions.
 * User: Denis DIMA
 * Product: stripe-ipn
 * Date: 09.01.2017
 * Time: 14:06
 * All rights and copyrights are owned by Sevio Solutions®
 */

require_once('vendor/autoload.php');

define ('SK_TEST','sk_test_GSCEaX5LAXRMJ5NexkmqQlAo');
define ('PK_TEST','pk_test_We7OzDYuCel72805UcZhaIsV');

\Stripe\Stripe::setApiKey(SK_TEST);
