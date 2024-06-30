<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class Dimension
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("length")
     */
    public ?string $length = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("width")
     */
    public ?string $width = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("height")
     */
    public ?string $height = null;
}
