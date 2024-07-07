<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class UpdateProductsBatch
{
    /**
     * @param array<Product>|null $create
     * @param array<Product>|null $update
     */
    public function __construct(
        /**
         * @var array<Product>
         * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Product>")
         * @JMS\SerializedName("create")
         */
        public ?array $create = null,
        /**
         * @var array<Product>
         * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Product>")
         * @JMS\SerializedName("update")
         */
        public ?array $update = null,
        /**
         * @var array<int>
         * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Product>")
         * @JMS\SerializedName("delete")
         */
        public ?array $delete = null
    ) {
    }
}
