<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class Download
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public ?string $id = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public ?string $name = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("file")
     */
    public ?string $file = null;
}
