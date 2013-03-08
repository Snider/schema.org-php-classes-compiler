<?php

class Thing_Intangible_StructuredValue_NutritionInformation extends Thing_Intangible_StructuredValue{

             /**
              * The number of calories
              *
              * @var $calories Thing_Intangible_Quantity_Energy
              */
              public $calories;

             /**
              * The number of grams of carbohydrates.
              *
              * @var $carbohydrateContent Thing_Intangible_Quantity_Mass
              */
              public $carbohydrateContent;

             /**
              * The number of milligrams of cholesterol.
              *
              * @var $cholesterolContent Thing_Intangible_Quantity_Mass
              */
              public $cholesterolContent;

             /**
              * The number of grams of fat.
              *
              * @var $fatContent Thing_Intangible_Quantity_Mass
              */
              public $fatContent;

             /**
              * The number of grams of fiber.
              *
              * @var $fiberContent Thing_Intangible_Quantity_Mass
              */
              public $fiberContent;

             /**
              * The number of grams of protein.
              *
              * @var $proteinContent Thing_Intangible_Quantity_Mass
              */
              public $proteinContent;

             /**
              * The number of grams of saturated fat.
              *
              * @var $saturatedFatContent Thing_Intangible_Quantity_Mass
              */
              public $saturatedFatContent;

             /**
              * The serving size, in terms of the number of volume or mass
              *
              * @var $servingSize string
              */
              public $servingSize;

             /**
              * The number of milligrams of sodium.
              *
              * @var $sodiumContent Thing_Intangible_Quantity_Mass
              */
              public $sodiumContent;

             /**
              * The number of grams of sugar.
              *
              * @var $sugarContent Thing_Intangible_Quantity_Mass
              */
              public $sugarContent;

             /**
              * The number of grams of trans fat.
              *
              * @var $transFatContent Thing_Intangible_Quantity_Mass
              */
              public $transFatContent;

             /**
              * The number of grams of unsaturated fat.
              *
              * @var $unsaturatedFatContent Thing_Intangible_Quantity_Mass
              */
              public $unsaturatedFatContent;
}