<?php
/**
 * curl https://example.com/wp-json/wc/v2/products \
 * -u consumer_key:consumer_secret
 */

namespace Automattic\WooCommerce\Products\Application;

use Automattic\WooCommerce\Products\Domain\Endpoint;
use Automattic\WooCommerce\Products\Domain\UpdateProductsBatch as UpdateProductsBatchDomain;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use JMS\Serializer\SerializerBuilder;

class UpdateProductsBatch
{
    public function __construct()
    {
    }

    public function __invoke(
        ClientHttp $client,
        UpdateProductsBatchDomain $updateProductsBatch
    ): UpdateProductsBatchDomain {
        $response = $client->post(
            Endpoint::UPDATE_PRODUCTS_BATCH,
            [],
            SerializerBuilder::create()->build()->serialize($updateProductsBatch, 'json')
        );

        return SerializerBuilder::create()->build()->deserialize($response, UpdateProductsBatchDomain::class, 'json');
    }
}
