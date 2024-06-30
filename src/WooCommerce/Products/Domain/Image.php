<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class Image
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    public ?int $id = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_created")
     */
    public ?string $dateCreated = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_created_gmt")
     */
    public ?string $dateCreatedGmt = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_modified")
     */
    public ?string $dateModified = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_modified_gmt")
     */
    public ?string $dateModifiedGmt = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("src")
     */
    public ?string $src = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    public ?string $name = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("alt")
     */
    public ?string $alt = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("position")
     */
    public ?int $position = null;
}
