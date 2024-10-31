<?php

namespace Automattic\WooCommerce\Orders\Domain;

enum Endpoint: string
{
    case LIST_ALL_ORDERS = '/wp-json/wc/v3/orders';
}
