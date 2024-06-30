<?php

namespace WooCommerce\Products\Application;

use Automattic\WooCommerce\Products\Application\ListAllProducts;
use Automattic\WooCommerce\Shared\Infrastructure\ClientHttp;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;

class ListAllProductTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function test(): void
    {
        $client = $this->createMock(ClientHttp::class);
        $client
            ->expects($this->once())
            ->method('get')
            ->willReturn($this->response());

        $allProducts = (new ListAllProducts)($client);

        self::assertNotEmpty($allProducts);
        self::assertCount(2, $allProducts);
        self::assertEquals(15, $allProducts[0]->id);
    }

    private function response(): string
    {
        return <<<JSON
[
    {
        "id": 15,
        "name": "iProduct variation tester",
        "slug": "iproduct-variation-tester",
        "permalink": "http://localhost:8000/producto/iproduct-variation-tester/",
        "date_created": "2024-06-29T21:17:54",
        "date_created_gmt": "2024-06-29T19:17:54",
        "date_modified": "2024-06-29T21:21:00",
        "date_modified_gmt": "2024-06-29T19:21:00",
        "type": "simple",
        "status": "publish",
        "featured": false,
        "catalog_visibility": "visible",
        "description": "",
        "short_description": "",
        "sku": "iproduct-variation-tester",
        "price": "10",
        "regular_price": "10",
        "sale_price": "",
        "date_on_sale_from": null,
        "date_on_sale_from_gmt": null,
        "date_on_sale_to": null,
        "date_on_sale_to_gmt": null,
        "on_sale": false,
        "purchasable": true,
        "total_sales": 0,
        "virtual": false,
        "downloadable": false,
        "downloads":
        [],
        "download_limit": -1,
        "download_expiry": -1,
        "external_url": "",
        "button_text": "",
        "tax_status": "taxable",
        "tax_class": "",
        "manage_stock": true,
        "stock_quantity": 1,
        "in_stock": true,
        "backorders": "no",
        "backorders_allowed": false,
        "backordered": false,
        "sold_individually": false,
        "weight": "",
        "dimensions":
        {
            "length": "",
            "width": "",
            "height": ""
        },
        "shipping_required": true,
        "shipping_taxable": true,
        "shipping_class": "",
        "shipping_class_id": 0,
        "reviews_allowed": true,
        "average_rating": "0.00",
        "rating_count": 0,
        "upsell_ids":
        [],
        "cross_sell_ids":
        [],
        "parent_id": 0,
        "purchase_note": "",
        "categories":
        [
            {
                "id": 16,
                "name": "Coches",
                "slug": "coches"
            },
            {
                "id": 15,
                "name": "Sin categorizar",
                "slug": "sin-categorizar"
            }
        ],
        "tags":
        [],
        "images":
        [
            {
                "id": 0,
                "date_created": "2024-06-30T16:16:22",
                "date_created_gmt": "2024-06-30T12:16:22",
                "date_modified": "2024-06-30T16:16:22",
                "date_modified_gmt": "2024-06-30T12:16:22",
                "src": "http://localhost:8000/wp-content/uploads/woocommerce-placeholder.png",
                "name": "Marcador",
                "alt": "Marcador",
                "position": 0
            }
        ],
        "attributes":
        [],
        "default_attributes":
        [],
        "variations":
        [],
        "grouped_products":
        [],
        "menu_order": 0,
        "price_html": "<span class=\"woocommerce-Price-amount amount\"><bdi>10,00&nbsp;<span class=\"woocommerce-Price-currencySymbol\">&euro;</span></bdi></span>",
        "related_ids":
        [
            13
        ],
        "meta_data":
        [],
        "_links":
        {
            "self":
            [
                {
                    "href": "http://localhost:8000/wp-json/wc/v2/products/15"
                }
            ],
            "collection":
            [
                {
                    "href": "http://localhost:8000/wp-json/wc/v2/products"
                }
            ]
        }
    },
    {
        "id": 13,
        "name": "iProduct tester",
        "slug": "iproduct-tester",
        "permalink": "http://localhost:8000/producto/iproduct-tester/",
        "date_created": "2024-06-29T21:15:54",
        "date_created_gmt": "2024-06-29T19:15:54",
        "date_modified": "2024-06-29T21:17:39",
        "date_modified_gmt": "2024-06-29T19:17:39",
        "type": "simple",
        "status": "publish",
        "featured": false,
        "catalog_visibility": "visible",
        "description": "<p>Esto es un producto de test para usar la api de woocommerce</p>",
        "short_description": "",
        "sku": "iproduct-tester",
        "price": "10",
        "regular_price": "10",
        "sale_price": "",
        "date_on_sale_from": null,
        "date_on_sale_from_gmt": null,
        "date_on_sale_to": null,
        "date_on_sale_to_gmt": null,
        "on_sale": false,
        "purchasable": true,
        "total_sales": 0,
        "virtual": false,
        "downloadable": false,
        "downloads":
        [],
        "download_limit": -1,
        "download_expiry": -1,
        "external_url": "",
        "button_text": "",
        "tax_status": "taxable",
        "tax_class": "",
        "manage_stock": true,
        "stock_quantity": 100,
        "in_stock": true,
        "backorders": "no",
        "backorders_allowed": false,
        "backordered": false,
        "sold_individually": false,
        "weight": "",
        "dimensions":
        {
            "length": "",
            "width": "",
            "height": ""
        },
        "shipping_required": true,
        "shipping_taxable": true,
        "shipping_class": "",
        "shipping_class_id": 0,
        "reviews_allowed": true,
        "average_rating": "0.00",
        "rating_count": 0,
        "upsell_ids":
        [],
        "cross_sell_ids":
        [],
        "parent_id": 0,
        "purchase_note": "",
        "categories":
        [
            {
                "id": 15,
                "name": "Sin categorizar",
                "slug": "sin-categorizar"
            }
        ],
        "tags":
        [],
        "images":
        [
            {
                "id": 0,
                "date_created": "2024-06-30T16:16:22",
                "date_created_gmt": "2024-06-30T12:16:22",
                "date_modified": "2024-06-30T16:16:22",
                "date_modified_gmt": "2024-06-30T12:16:22",
                "src": "http://localhost:8000/wp-content/uploads/woocommerce-placeholder.png",
                "name": "Marcador",
                "alt": "Marcador",
                "position": 0
            }
        ],
        "attributes":
        [],
        "default_attributes":
        [],
        "variations":
        [],
        "grouped_products":
        [],
        "menu_order": 0,
        "price_html": "<span class=\"woocommerce-Price-amount amount\"><bdi>10,00&nbsp;<span class=\"woocommerce-Price-currencySymbol\">&euro;</span></bdi></span>",
        "related_ids":
        [
            15
        ],
        "meta_data":
        [],
        "_links":
        {
            "self":
            [
                {
                    "href": "http://localhost:8000/wp-json/wc/v2/products/13"
                }
            ],
            "collection":
            [
                {
                    "href": "http://localhost:8000/wp-json/wc/v2/products"
                }
            ]
        }
    }
]
JSON;

    }
}
