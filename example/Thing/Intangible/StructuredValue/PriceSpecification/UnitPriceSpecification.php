<?php

class Thing_Intangible_StructuredValue_PriceSpecification_UnitPriceSpecification extends Thing_Intangible_StructuredValue_PriceSpecification{

             /**
              * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
              *
              * @var $billingIncrement Number
              */
              public $billingIncrement;

             /**
              * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
              *
              * @var $priceType string
              */
              public $priceType;

             /**
              * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
              *
              * @var $unitCode string
              */
              public $unitCode;
}