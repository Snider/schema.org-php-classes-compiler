<?php

class Thing_Intangible_Demand extends Thing_Intangible{

             /**
              * The payment method(s) accepted by seller for this offer.
              *
              * @var $acceptedPaymentMethod Thing_Intangible_Enumeration_PaymentMethod
              */
              public $acceptedPaymentMethod;

             /**
              * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
              *
              * @var $advanceBookingRequirement Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $advanceBookingRequirement;

             /**
              * The availability of this item—for example In stock, Out of stock, Pre-order, etc.
              *
              * @var $availability Thing_Intangible_Enumeration_ItemAvailability
              */
              public $availability;

             /**
              * The end of the availability of the product or service included in the offer.
              *
              * @var $availabilityEnds DateTime
              */
              public $availabilityEnds;

             /**
              * The beginning of the availability of the product or service included in the offer.
              *
              * @var $availabilityStarts DateTime
              */
              public $availabilityStarts;

             /**
              * The place(s) from which the offer can be obtained (e.g. store locations).
              *
              * @var $availableAtOrFrom Thing_Place
              */
              public $availableAtOrFrom;

             /**
              * The delivery method(s) available for this offer.
              *
              * @var $availableDeliveryMethod Thing_Intangible_Enumeration_DeliveryMethod
              */
              public $availableDeliveryMethod;

             /**
              * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
              *
              * @var $businessFunction Thing_Intangible_Enumeration_BusinessFunction
              */
              public $businessFunction;

             /**
              * The typical delay between the receipt of the order and the goods leaving the warehouse.
              *
              * @var $deliveryLeadTime Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $deliveryLeadTime;

             /**
              * The type(s) of customers for which the given offer is valid.
              *
              * @var $eligibleCustomerType Thing_Intangible_Enumeration_BusinessEntityType
              */
              public $eligibleCustomerType;

             /**
              * The duration for which the given offer is valid.
              *
              * @var $eligibleDuration Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $eligibleDuration;

             /**
              * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
              *
              * @var $eligibleQuantity Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $eligibleQuantity;

             /**
              * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
              *
              * @var $eligibleRegion string|Thing_Intangible_StructuredValue_GeoShape
              */
              public $eligibleRegion;

             /**
              * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
              *
              * @var $eligibleTransactionVolume Thing_Intangible_StructuredValue_PriceSpecification
              */
              public $eligibleTransactionVolume;

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
              * This links to a node or nodes indicating the exact quantity of the products included in the offer.
              *
              * @var $includesObject Thing_Intangible_StructuredValue_TypeAndQuantityNode
              */
              public $includesObject;

             /**
              * The current approximate inventory level for the item or items.
              *
              * @var $inventoryLevel Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $inventoryLevel;

             /**
              * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
              *
              * @var $itemCondition Thing_Intangible_Enumeration_OfferItemCondition
              */
              public $itemCondition;

             /**
              * The item being sold.
              *
              * @var $itemOffered Thing_Product
              */
              public $itemOffered;

             /**
              * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
              *
              * @var $mpn string
              */
              public $mpn;

             /**
              * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
              *
              * @var $priceSpecification Thing_Intangible_StructuredValue_PriceSpecification
              */
              public $priceSpecification;

             /**
              * The seller.
              *
              * @var $seller Thing_Organization|Thing_Person
              */
              public $seller;

             /**
              * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
              *
              * @var $serialNumber string
              */
              public $serialNumber;

             /**
              * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
              *
              * @var $sku string
              */
              public $sku;

             /**
              * The beginning of the validity of offer, price specification, or opening hours data.
              *
              * @var $validFrom DateTime
              */
              public $validFrom;

             /**
              * The end of the validity of offer, price specification, or opening hours data.
              *
              * @var $validThrough DateTime
              */
              public $validThrough;

             /**
              * The warranty promise(s) included in the offer.
              *
              * @var $warranty Thing_Intangible_StructuredValue_WarrantyPromise
              */
              public $warranty;
}