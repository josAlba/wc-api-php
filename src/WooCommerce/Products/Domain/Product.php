<?php

namespace Automattic\WooCommerce\Products\Domain;

use JMS\Serializer\Annotation as JMS;

class Product
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

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("permalink")
     */
    public ?string $permalink = null;

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
     * @JMS\SerializedName("type")
     */
    public ?string $type = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    public ?string $status = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("featured")
     */
    public ?bool $featured = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("catalog_visibility")
     */
    public ?string $catalogVisibility = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    public ?string $description = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("short_description")
     */
    public ?string $shortDescription = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sku")
     */
    public ?string $sku = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("price")
     */
    public ?string $price = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("regular_price")
     */
    public ?string $regularPrice = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sale_price")
     */
    public ?string $salePrice = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_on_sale_from")
     */
    public ?string $dateOnSaleFrom = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_on_sale_from_gmt")
     */
    public ?string $dateOnSaleFromGmt = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_on_sale_to")
     */
    public ?string $dateOnSaleTo = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_on_sale_to_gmt")
     */
    public ?string $dateOnSaleToGmt = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("price_html")
     */
    public ?string $priceHtml = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("on_sale")
     */
    public ?bool $onSale = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("purchasable")
     */
    public ?bool $purchasable = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("total_sales")
     */
    public ?int $totalSales = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("virtual")
     */
    public ?bool $virtual = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("downloadable")
     */
    public ?bool $downloadable = null;

    /**
     * @var array<Download>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Download>")
     * @JMS\SerializedName("downloads")
     */
    public ?array $downloads = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("download_limit")
     */
    public ?int $downloadLimit = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("download_expiry")
     */
    public ?int $downloadExpiry = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("external_url")
     */
    public ?string $externalUrl = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("button_text")
     */
    public ?string $buttonText = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("tax_status")
     */
    public ?string $taxStatus = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("tax_class")
     */
    public ?string $taxClass = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("manage_stock")
     */
    public ?bool $manageStock = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("stock_quantity")
     */
    public ?int $stockQuantity = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("in_stock")
     */
    public ?bool $inStock = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("backorders")
     */
    public ?string $backorders = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("backorders_allowed")
     */
    public ?bool $backordersAllowed = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("backordered")
     */
    public ?bool $backordered = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("sold_individually")
     */
    public ?bool $soldIndividually = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     */
    public ?string $weight = null;

    /**
     * @JMS\Type("Automattic\WooCommerce\Products\Domain\Dimension")
     * @JMS\SerializedName("dimensions")
     */
    public ?Dimension $dimensions = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("shipping_required")
     */
    public ?bool $shippingRequired = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("shipping_taxable")
     */
    public ?bool $shippingTaxable = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("shipping_class")
     */
    public ?string $shippingClass = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("shipping_class_id")
     */
    public ?int $shippingClassId = null;

    /**
     * @JMS\Type("boolean")
     * @JMS\SerializedName("reviews_allowed")
     */
    public ?bool $reviewsAllowed = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("average_rating")
     */
    public ?string $averageRating = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("rating_count")
     */
    public ?int $ratingCount = null;

    /**
     * @var array<string>
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("related_ids")
     */
    public ?array $relatedIds = null;

    /**
     * @var array<string>
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("upsell_ids")
     */
    public ?array $upsellIds = null;

    /**
     * @var array<string>
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("cross_sell_ids")
     */
    public ?array $crossSellIds = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("parent_id")
     */
    public ?int $parentId = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("purchase_note")
     */
    public ?string $purchaseNote = null;

    /**
     * @var array<Category>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Category>")
     * @JMS\SerializedName("categories")
     */
    public ?array $categories = null;

    /**
     * @var array<Tag>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Tag>")
     * @JMS\SerializedName("tags")
     */
    public ?array $tags = null;

    /**
     * @var array<Image>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Image>")
     * @JMS\SerializedName("images")
     */
    public ?array $images = null;

    /**
     * @var array<Attribute>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\Attribute>")
     * @JMS\SerializedName("attributes")
     */
    public ?array $attributes = null;

    /**
     * @var array<DefaultAttribute>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\DefaultAttribute>")
     * @JMS\SerializedName("default_attributes")
     */
    public ?array $defaultAttributes = null;

    /**
     * @var array<string>
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("variations")
     */
    public ?array $variations = null;

    /**
     * @var array<string>
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("grouped_products")
     */
    public ?array $groupedProducts = null;

    /**
     * @JMS\Type("integer")
     * @JMS\SerializedName("menu_order")
     */
    public ?int $menuOrder = null;

    /**
     * @var array<MetaData>
     * @JMS\Type("array<Automattic\WooCommerce\Products\Domain\MetaData>")
     * @JMS\SerializedName("meta_data")
     */
    public ?array $metaData = null;
}
