<?php

class Thing_Intangible_Rating_AggregateRating extends Thing_Intangible_Rating{

             /**
              * The item that is being reviewed/rated.
              *
              * @var $itemReviewed Thing
              */
              public $itemReviewed;

             /**
              * The count of total number of ratings.
              *
              * @var $ratingCount Number
              */
              public $ratingCount;

             /**
              * The count of total number of reviews.
              *
              * @var $reviewCount Number
              */
              public $reviewCount;
}