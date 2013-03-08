<?php

class Thing_Product extends Thing{

             /**
              * The overall rating, based on a collection of reviews or ratings, of the item.
              *
              * @var $aggregateRating Thing_Intangible_Rating_AggregateRating
              */
              public $aggregateRating;

             /**
              * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
              *
              * @var $brand Thing_Organization|Thing_Intangible_Brand
              */
              public $brand;

             /**
              * The color of the product.
              *
              * @var $color string
              */
              public $color;

             /**
              * The depth of the product.
              *
              * @var $depth Thing_Intangible_Quantity_Distance|Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $depth;

             /**
              * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero.
              *
              * @var $gtin13 string
              */
              public $gtin13;

             /**
              * The GTIN-14 code of the product, or the product to which the offer refers.
              *
              * @var $gtin14 string
              */
              public $gtin14;

             /**
              * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
              *
              * @var $gtin8 string
              */
              public $gtin8;

             /**
              * The height of the item.
              *
              * @var $height Thing_Intangible_Quantity_Distance|Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $height;

             /**
              * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
              *
              * @var $isAccessoryOrSparePartFor Thing_Product
              */
              public $isAccessoryOrSparePartFor;

             /**
              * A pointer to another product (or multiple products) for which this product is a consumable.
              *
              * @var $isConsumableFor Thing_Product
              */
              public $isConsumableFor;

             /**
              * A pointer to another, somehow related product (or multiple products).
              *
              * @var $isRelatedTo Thing_Product
              */
              public $isRelatedTo;

             /**
              * A pointer to another, functionally similar product (or multiple products).
              *
              * @var $isSimilarTo Thing_Product
              */
              public $isSimilarTo;

             /**
              * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
              *
              * @var $itemCondition Thing_Intangible_Enumeration_OfferItemCondition
              */
              public $itemCondition;

             /**
              * URL of an image for the logo of the item.
              *
              * @var $logo string|Thing_CreativeWork_MediaObject_ImageObject
              */
              public $logo;

             /**
              * The manufacturer of the product.
              *
              * @var $manufacturer Thing_Organization
              */
              public $manufacturer;

             /**
              * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
              *
              * @var $model Thing_Product_ProductModel|string
              */
              public $model;

             /**
              * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
              *
              * @var $mpn string
              */
              public $mpn;

             /**
              * An offer to sell this item—for example, an offer to sell a product, the DVD of a movie, or tickets to an event.
              *
              * @var $offers Thing_Intangible_Offer
              */
              public $offers;

             /**
              * The product identifier, such as ISBN. For example: <meta itemprop='productID' content='isbn:123-456-789'/>.
              *
              * @var $productID string
              */
              public $productID;

             /**
              * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
              *
              * @var $releaseDate Date
              */
              public $releaseDate;

             /**
              * A review of the item.
              *
              * @var $review Thing_CreativeWork_Review
              */
              public $review;

             /**
              * Review of the item (legacy spelling; see singular form, review).
              *
              * @var $reviews Thing_CreativeWork_Review
              */
              public $reviews;

             /**
              * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
              *
              * @var $sku string
              */
              public $sku;

             /**
              * The weight of the product.
              *
              * @var $weight Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $weight;

             /**
              * The width of the item.
              *
              * @var $width Thing_Intangible_Quantity_Distance|Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $width;
}