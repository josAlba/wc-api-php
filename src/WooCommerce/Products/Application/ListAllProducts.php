<?php
/**
 * curl https://example.com/wp-json/wc/v2/products \
 * -u consumer_key:consumer_secret
 */

namespace Automattic\WooCommerce\Products\Application;

use Automattic\WooCommerce\Products\Domain\Endpoint;
use Automattic\WooCommerce\Products\Domain\Product;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use JMS\Serializer\SerializerBuilder;

class ListAllProducts
{
    public function __construct()
    {
    }

    /**
     * @return array<Product>
     */
    public function __invoke(ClientHttp $client): array
    {
        $response = $client->get(Endpoint::LIST_ALL_PRODUCTS->value, []);

        return SerializerBuilder::create()->build()->deserialize($response, 'array<'.Product::class.'>', 'json');
    }
}
