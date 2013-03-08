<?php

class Thing_Intangible_StructuredValue_OwnershipInfo extends Thing_Intangible_StructuredValue{

             /**
              * The organization or person from which the product was acquired.
              *
              * @var $acquiredFrom Thing_Organization|Thing_Person
              */
              public $acquiredFrom;

             /**
              * The date and time of obtaining the product.
              *
              * @var $ownedFrom DateTime
              */
              public $ownedFrom;

             /**
              * The date and time of giving up ownership on the product.
              *
              * @var $ownedThrough DateTime
              */
              public $ownedThrough;

             /**
              * The product that this structured value is referring to.
              *
              * @var $typeOfGood Thing_Product
              */
              public $typeOfGood;
}