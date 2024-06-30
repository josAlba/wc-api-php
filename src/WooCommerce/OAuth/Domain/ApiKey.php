<?php

namespace Automattic\WooCommerce\OAuth\Domain;

use JMS\Serializer\Annotation as JMS;

class ApiKey
{
    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("key_id")
     */
    public ?int $keyId = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("user_id")
     */
    public ?int $userId = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("consumer_key")
     */
    public ?string $consumerKey = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("consumer_secret")
     */
    public ?string $consumerSecret = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("key_permissions")
     */
    public ?string $keyPermissions = null;
}
