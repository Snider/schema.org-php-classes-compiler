<?php

class Thing_Intangible_StructuredValue_OpeningHoursSpecification extends Thing_Intangible_StructuredValue{

             /**
              * The closing hour of the place or service on the given day(s) of the week.
              *
              * @var $closes Time
              */
              public $closes;

             /**
              * The day of the week for which these opening hours are valid.
              *
              * @var $dayOfWeek Thing_Intangible_Enumeration_DayOfWeek
              */
              public $dayOfWeek;

             /**
              * The opening hour of the place or service on the given day(s) of the week.
              *
              * @var $opens Time
              */
              public $opens;

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
}