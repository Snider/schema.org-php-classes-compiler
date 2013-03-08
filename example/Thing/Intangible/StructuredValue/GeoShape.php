<?php

class Thing_Intangible_StructuredValue_GeoShape extends Thing_Intangible_StructuredValue{

             /**
              * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
              *
              * @var $box string
              */
              public $box;

             /**
              * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
              *
              * @var $circle string
              */
              public $circle;

             /**
              * The elevation of a location.
              *
              * @var $elevation string|Number
              */
              public $elevation;

             /**
              * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
              *
              * @var $line string
              */
              public $line;

             /**
              * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more spacedelimited points where the first and final points are identical.
              *
              * @var $polygon string
              */
              public $polygon;
}