<?php

namespace Automattic\WooCommerce\Products\Domain;

class Endpoint
{
    public const LIST_ALL_PRODUCTS = '/wp-json/wc/v3/products';
    public const LIST_ALL_VARIATION = '/wp-json/wc/v3/products/<product_id>/variations';
    public const UPDATE_PRODUCTS_BATCH = '/wp-json/wc/v3/products/batch';
    public const UPDATE_VARIATIONS_BATCH = '/wp-json/wc/v3/products/<product_id>/variations/batch';
}
