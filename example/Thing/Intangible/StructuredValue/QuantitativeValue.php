<?php

class Thing_Intangible_StructuredValue_QuantitativeValue extends Thing_Intangible_StructuredValue{

             /**
              * The upper of the product characteristic.
              *
              * @var $maxValue Number
              */
              public $maxValue;

             /**
              * The lower value of the product characteristic.
              *
              * @var $minValue Number
              */
              public $minValue;

             /**
              * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
              *
              * @var $unitCode string
              */
              public $unitCode;

             /**
              * The value of the product characteristic.
              *
              * @var $value Number
              */
              public $value;

             /**
              * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
              *
              * @var $valueReference Thing_Intangible_Enumeration|Thing_Intangible_StructuredValue
              */
              public $valueReference;
}