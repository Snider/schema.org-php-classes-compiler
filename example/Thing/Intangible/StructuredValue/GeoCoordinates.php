<?php

class Thing_Intangible_StructuredValue_GeoCoordinates extends Thing_Intangible_StructuredValue{

             /**
              * The elevation of a location.
              *
              * @var $elevation string|Number
              */
              public $elevation;

             /**
              * The latitude of a location. For example 37.42242.
              *
              * @var $latitude Number|string
              */
              public $latitude;

             /**
              * The longitude of a location. For example -122.08585.
              *
              * @var $longitude Number|string
              */
              public $longitude;
}