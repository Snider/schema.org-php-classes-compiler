<?php

class Thing_Intangible_Enumeration_QualitativeValue extends Thing_Intangible_Enumeration{

             /**
              * This ordering relation for qualitative values indicates that the subject is equal to the object.
              *
              * @var $equal Thing_Intangible_Enumeration_QualitativeValue
              */
              public $equal;

             /**
              * This ordering relation for qualitative values indicates that the subject is greater than the object.
              *
              * @var $greater Thing_Intangible_Enumeration_QualitativeValue
              */
              public $greater;

             /**
              * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
              *
              * @var $greaterOrEqual Thing_Intangible_Enumeration_QualitativeValue
              */
              public $greaterOrEqual;

             /**
              * This ordering relation for qualitative values indicates that the subject is lesser than the object.
              *
              * @var $lesser Thing_Intangible_Enumeration_QualitativeValue
              */
              public $lesser;

             /**
              * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
              *
              * @var $lesserOrEqual Thing_Intangible_Enumeration_QualitativeValue
              */
              public $lesserOrEqual;

             /**
              * This ordering relation for qualitative values indicates that the subject is not equal to the object.
              *
              * @var $nonEqual Thing_Intangible_Enumeration_QualitativeValue
              */
              public $nonEqual;

             /**
              * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
              *
              * @var $valueReference Thing_Intangible_Enumeration|Thing_Intangible_StructuredValue
              */
              public $valueReference;
}