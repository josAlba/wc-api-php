<?php
/**
 * curl https://example.com/wp-json/wc/v2/products \
 * -u consumer_key:consumer_secret
 */

namespace Automattic\WooCommerce\Products\Application;

use Automattic\WooCommerce\Products\Domain\Endpoint;
use Automattic\WooCommerce\Products\Domain\Product;
use Automattic\WooCommerce\Products\Domain\Variation;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use JMS\Serializer\SerializerBuilder;

class ListAllVariations
{
    public function __construct()
    {
    }

    /**
     * @return array<Product>
     */
    public function __invoke(ClientHttp $client, int $productId): array
    {
        $endpoint = str_replace('<product_id>', $productId, Endpoint::LIST_ALL_VARIATION->value);
        $response = $client->get($endpoint, []);

        return SerializerBuilder::create()->build()->deserialize($response, 'array<'.Variation::class.'>', 'json');
    }
}
