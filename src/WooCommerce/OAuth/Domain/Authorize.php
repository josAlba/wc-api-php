<?php

namespace Automattic\WooCommerce\OAuth\Domain;

use JMS\Serializer\Annotation as JMS;

class Authorize
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("app_name")
     */
    public ?string $appName = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("scope")
     */
    public ?string $scope = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("user_id")
     */
    public ?string $userId = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("return_url")
     */
    public ?string $returnUrl = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("callback_url")
     */
    public ?string $callbackUrl = null;
}
