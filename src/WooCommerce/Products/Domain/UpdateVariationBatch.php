<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class UpdateVariationBatch
{
    /**
     * @param array<Product>|null $create
     * @param array<Product>|null $update
     */
    public function __construct(
        /**
         * @var array<Variation>
         * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Variation>")
         * @JMS\SerializedName("create")
         */
        public ?array $create = null,
        /**
         * @var array<Variation>
         * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Variation>")
         * @JMS\SerializedName("update")
         */
        public ?array $update = null,
        /**
         * @var array<int>
         * @JMS\Type("array<integer>")
         * @JMS\SerializedName("delete")
         */
        public ?array $delete = null
    ) {
    }
}
