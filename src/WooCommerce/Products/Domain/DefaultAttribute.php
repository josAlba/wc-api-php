<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class DefaultAttribute
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    public ?int $id = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public ?string $name = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("option")
     */
    public ?string $option = null;
}
