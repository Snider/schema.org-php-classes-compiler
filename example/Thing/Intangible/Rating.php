<?php

class Thing_Intangible_Rating extends Thing_Intangible{

             /**
              * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
              *
              * @var $bestRating Number|string
              */
              public $bestRating;

             /**
              * The rating for the content.
              *
              * @var $ratingValue string
              */
              public $ratingValue;

             /**
              * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
              *
              * @var $worstRating Number|string
              */
              public $worstRating;
}