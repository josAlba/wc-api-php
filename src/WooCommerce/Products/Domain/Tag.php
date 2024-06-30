<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class Tag
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
     * @JMS\SerializedName("slug")
     */
    public ?string $slug = null;
}
