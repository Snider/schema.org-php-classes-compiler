<?php

class Thing_Intangible_StructuredValue_PriceSpecification extends Thing_Intangible_StructuredValue{

             /**
              * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
              *
              * @var $eligibleQuantity Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $eligibleQuantity;

             /**
              * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
              *
              * @var $eligibleTransactionVolume Thing_Intangible_StructuredValue_PriceSpecification
              */
              public $eligibleTransactionVolume;

             /**
              * The highest price if the price is a range.
              *
              * @var $maxPrice Number
              */
              public $maxPrice;

             /**
              * The lowest price if the price is a range.
              *
              * @var $minPrice Number
              */
              public $minPrice;

             /**
              * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
              *
              * @var $price string|Number
              */
              public $price;

             /**
              * The currency (in 3-letter ISO 4217 format) of the offer price or a price component, when attached to PriceSpecification and its subtypes.
              *
              * @var $priceCurrency string
              */
              public $priceCurrency;

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
              * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
              *
              * @var $valueAddedTaxIncluded Boolean
              */
              public $valueAddedTaxIncluded;
}