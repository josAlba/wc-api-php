<?php
/**
 * curl https://example.com/wp-json/wc/v2/products \
 * -u consumer_key:consumer_secret
 */

namespace Automattic\WooCommerce\Products\Application;

use Automattic\WooCommerce\Products\Domain\Endpoint;
use Automattic\WooCommerce\Products\Domain\Product;
use Automattic\WooCommerce\Products\Domain\UpdateProductsBatch as UpdateProductsBatchDomain;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use JMS\Serializer\SerializerBuilder;

class UpdateProductsBatch
{
    public function __construct()
    {
    }

    /**
     * @param array<Product> $products
     */
    public function __invoke(ClientHttp $client, array $products): UpdateProductsBatchDomain
    {
        $response = $client->put(
            Endpoint::UPDATE_PRODUCTS_BATCH->value,
            [],
            SerializerBuilder::create()->build()->serialize($products, 'json')
        );

        return SerializerBuilder::create()->build()->deserialize($response, UpdateProductsBatchDomain::class, 'json');
    }
}
