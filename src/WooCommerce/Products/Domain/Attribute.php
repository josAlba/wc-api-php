<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class Attribute
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
     * @JMS\Type("integer")
     * @JMS\SerializedName("position")
     */
    public ?int $position = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("visible")
     */
    public ?bool $visible = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("variation")
     */
    public ?bool $variation = null;

    /**
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("options")
     */
    public ?array $options = null;
}
