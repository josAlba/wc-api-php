<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class UpdateProductsBatch
{
    /**
     * @var array<Product>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Product>")
     * @JMS\SerializedName("create")
     */
    public ?array $create = null;

    /**
     * @var array<Product>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Product>")
     * @JMS\SerializedName("update")
     */
    public ?array $update = null;
}
