<?php

namespace Automattic\WooCommerce\Orders\Domain;

use JMS\Serializer\Annotation as JMS;

class LinesItems
{
    public function __construct(
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("id")
         */
        public ?int $id = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("name")
         */
        public ?string $name = null,
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("product_id")
         */
        public ?int $productId = null,
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("variation_id")
         */
        public ?int $variationId = null,
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("quantity")
         */
        public ?int $quantity = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("tax_class")
         */
        public ?string $taxClass = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("subtotal")
         */
        public ?string $subtotal = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("subtotal_tax")
         */
        public ?string $subtotalTax = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("total")
         */
        public ?string $total = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("total_tax")
         */
        public ?string $totalTax = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("sku")
         */
        public ?string $sku = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("price")
         */
        public ?string $price = null,
    ) {
    }

}
