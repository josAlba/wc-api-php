<?php

namespace Automattic\WooCommerce\Orders\Domain;

use JMS\Serializer\Annotation as JMS;

class Order
{
    public function __construct(
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("id")
         */
        public ?int $id = null,
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("parent_id")
         */
        public ?int $parentId = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("number")
         */
        public ?string $number = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("order_key")
         */
        public ?string $orderKey = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("created_via")
         */
        public ?string $createdVia = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("version")
         */
        public ?string $version = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("status")
         * Order status. Options: pending, processing, on-hold, completed, cancelled, refunded, failed and trash. Default is pending.
         */
        public ?string $status = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("currency")
         * Currency the order was created with, in ISO format. Options: AED, AFN, ALL, AMD, ANG, AOA, ARS, AUD, AWG, AZN, BAM, BBD, BDT, BGN, BHD, BIF, BMD, BND, BOB, BRL, BSD, BTC, BTN, BWP, BYR, BZD, CAD, CDF, CHF, CLP, CNY, COP, CRC, CUC, CUP, CVE, CZK, DJF, DKK, DOP, DZD, EGP, ERN, ETB, EUR, FJD, FKP, GBP, GEL, GGP, GHS, GIP, GMD, GNF, GTQ, GYD, HKD, HNL, HRK, HTG, HUF, IDR, ILS, IMP, INR, IQD, IRR, IRT, ISK, JEP, JMD, JOD, JPY, KES, KGS, KHR, KMF, KPW, KRW, KWD, KYD, KZT, LAK, LBP, LKR, LRD, LSL, LYD, MAD, MDL, MGA, MKD, MMK, MNT, MOP, MRO, MUR, MVR, MWK, MXN, MYR, MZN, NAD, NGN, NIO, NOK, NPR, NZD, OMR, PAB, PEN, PGK, PHP, PKR, PLN, PRB, PYG, QAR, RON, RSD, RUB, RWF, SAR, SBD, SCR, SDG, SEK, SGD, SHP, SLL, SOS, SRD, SSP, STD, SYP, SZL, THB, TJS, TMT, TND, TOP, TRY, TTD, TWD, TZS, UAH, UGX, USD, UYU, UZS, VEF, VND, VUV, WST, XAF, XCD, XOF, XPF, YER, ZAR and ZMW. Default is USD.
         */
        public ?string $currency = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_created")
         */
        public ?string $dateCreated = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_created_gmt")
         */
        public ?string $dateCreatedGmt = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_modified")
         */
        public ?string $dateModified = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_modified_gmt")
         */
        public ?string $dateModifiedGmt = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("discount_total")
         */
        public ?string $discountTotal = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("discount_tax")
         */
        public ?string $discountTax = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("shipping_total")
         */
        public ?string $shippingTotal = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("shipping_tax")
         */
        public ?string $shippingTax = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("cart_tax")
         */
        public ?string $cartTax = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("total")
         */
        public ?string $total = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("total_tax")
         */
        public ?string $totalTax = null,
        /**
         * @JMS\Type("boolean")
         * @JMS\SerializedName("prices_include_tax")
         */
        public bool $pricesIncludeTax = false,
        /**
         * @JMS\Type("integer")
         * @JMS\SerializedName("customer_id")
         */
        public ?int $customerId = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("customer_ip_address")
         */
        public ?string $customerIpAddress = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("customer_user_agent")
         */
        public ?string $customerUserAgent = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("customer_note")
         */
        public ?string $customerNote = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("payment_method")
         */
        public ?string $paymentMethod = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("payment_method_title")
         */
        public ?string $paymentMethodTitle = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("transaction_id")
         */
        public ?string $transactionId = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_paid")
         */
        public ?string $datePaid = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_paid_gmt")
         */
        public ?string $datePaidGmt = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_completed")
         */
        public ?string $dateCompleted = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("date_completed_gmt")
         */
        public ?string $dateCompletedGmt = null,
        /**
         * @JMS\Type("string")
         * @JMS\SerializedName("cart_hash")
         */
        public ?string $cartHash = null,
        /**
         * @JMS\Type("Automattic\WooCommerce\Orders\Domain\Billing")
         * @JMS\SerializedName("billing")
         */
        public ?Billing $billing = null,
        /**
         * @var array<LinesItems>
         * @JMS\Type("array<Automattic\WooCommerce\Orders\Domain\LinesItems>")
         * @JMS\SerializedName("line_items")
         */
        public ?array $lineItems = null,
    ) {
    }

}
