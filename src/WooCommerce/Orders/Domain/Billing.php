<?php

namespace Automattic\WooCommerce\Orders\Domain;

use JMS\Serializer\Annotation as JMS;

class Billing
{
    public function __construct(
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("first_name")
         */
        public ?string $first_name = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("last_name")
         */
        public ?string $last_name = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("company")
         */
        public ?string $company = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("address_1")
         */
        public ?string $address1 = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("address_2")
         */
        public ?string $address2 = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("city")
         */
        public ?string $city = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("state")
         */
        public ?string $state = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("postcode")
         */
        public ?string $postcode = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("country")
         */
        public ?string $country = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("email")
         */
        public ?string $email = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("phone")
         */
        public ?string $phone = null,
    ){

    }
}
