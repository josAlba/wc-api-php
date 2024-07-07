<?php
/**
 * curl https://example.com/wp-json/wc/v2/products \
 * -u consumer_key:consumer_secret
 */

namespace Automattic\WooCommerce\Products\Application;

use Automattic\WooCommerce\Products\Domain\Endpoint;
use Automattic\WooCommerce\Products\Domain\UpdateVariationBatch as UpdateVariationBatchDomain;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use JMS\Serializer\SerializerBuilder;

class UpdateVariationBatch
{
    public function __construct()
    {
    }

    public function __invoke(
        ClientHttp $client,
        UpdateVariationBatchDomain $updateProductsBatch,
        int $productId
    ): UpdateVariationBatchDomain {
        $endpoint = str_replace('<product_id>', $productId, Endpoint::UPDATE_VARIATIONS_BATCH->value);

        $response = $client->post(
            $endpoint,
            [],
            SerializerBuilder::create()->build()->serialize($updateProductsBatch, 'json')
        );

        return SerializerBuilder::create()->build()->deserialize($response, UpdateVariationBatchDomain::class, 'json');
    }
}
