<?php

class Thing_Intangible_StructuredValue_WarrantyPromise extends Thing_Intangible_StructuredValue{

             /**
              * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
              *
              * @var $durationOfWarranty Thing_Intangible_StructuredValue_QuantitativeValue
              */
              public $durationOfWarranty;

             /**
              * The scope of the warranty promise.
              *
              * @var $warrantyScope Thing_Intangible_Enumeration_WarrantyScope
              */
              public $warrantyScope;
}