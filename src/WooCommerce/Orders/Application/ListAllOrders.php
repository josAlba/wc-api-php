<?php
/**
 * curl https://example.com/wp-json/wc/v2/products \
 * -u consumer_key:consumer_secret
 */

namespace Automattic\WooCommerce\Orders\Application;

use Automattic\WooCommerce\Orders\Domain\Endpoint;
use Automattic\WooCommerce\Orders\Domain\Order;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use JMS\Serializer\SerializerBuilder;

class ListAllOrders
{
    public function __construct()
    {
    }

    /**
     * @return array<Order>
     */
    public function __invoke(ClientHttp $client): array
    {
        $response = $client->get(Endpoint::LIST_ALL_ORDERS->value, []);

        return SerializerBuilder::create()->build()->deserialize($response, 'array<'.Order::class.'>', 'json');
    }
}
