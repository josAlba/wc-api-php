<?php

namespace Automattic\WooCommerce\Products\Domain;

enum Endpoint: string
{
    case LIST_ALL_PRODUCTS = '/wp-json/wc/v3/products';
    case LIST_ALL_VARIATION = '/wp-json/wc/v3/products/<product_id>/variations';
    case UPDATE_PRODUCTS_BATCH = '/wp-json/wc/v3/products/batch';
    case UPDATE_VARIATIONS_BATCH = '/wp-json/wc/v3/products/<product_id>/variations/batch';
}
