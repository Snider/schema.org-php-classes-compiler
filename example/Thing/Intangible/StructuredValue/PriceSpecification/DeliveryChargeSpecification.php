<?php

class Thing_Intangible_StructuredValue_PriceSpecification_DeliveryChargeSpecification extends Thing_Intangible_StructuredValue_PriceSpecification{

             /**
              * The delivery method(s) to which the delivery charge or payment charge specification applies.
              *
              * @var $appliesToDeliveryMethod Thing_Intangible_Enumeration_DeliveryMethod
              */
              public $appliesToDeliveryMethod;

             /**
              * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
              *
              * @var $eligibleRegion string|Thing_Intangible_StructuredValue_GeoShape
              */
              public $eligibleRegion;
}