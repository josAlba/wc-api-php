<?php

namespace Automattic\WooCommerce\Products\Domain;

enum Endpoint: string
{
    case LIST_ALL_PRODUCTS = '/wp-json/wc/v3/products';
    case UPDATE_PRODUCTS_BATCH = '/wp-json/wc/v3/products/batch';
}
