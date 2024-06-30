<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class MetaData
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    public ?int $id = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("key")
     */
    public ?string $key = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("value")
     */
    public ?string $value = null;
}
