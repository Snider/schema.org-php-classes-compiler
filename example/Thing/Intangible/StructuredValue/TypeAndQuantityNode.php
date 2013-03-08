<?php

class Thing_Intangible_StructuredValue_TypeAndQuantityNode extends Thing_Intangible_StructuredValue{

             /**
              * The quantity of the goods included in the offer.
              *
              * @var $amountOfThisGood Number
              */
              public $amountOfThisGood;

             /**
              * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
              *
              * @var $businessFunction Thing_Intangible_Enumeration_BusinessFunction
              */
              public $businessFunction;

             /**
              * The product that this structured value is referring to.
              *
              * @var $typeOfGood Thing_Product
              */
              public $typeOfGood;

             /**
              * The unit of measurement given using the UN/CEFACT Common Code (3 characters).
              *
              * @var $unitCode string
              */
              public $unitCode;
}