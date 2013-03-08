<?php

class Thing_CreativeWork_Review extends Thing_CreativeWork{

             /**
              * The item that is being reviewed/rated.
              *
              * @var $itemReviewed Thing
              */
              public $itemReviewed;

             /**
              * The actual body of the review
              *
              * @var $reviewBody string
              */
              public $reviewBody;

             /**
              * The rating given in this review. Note that reviews can themselves be rated. The reviewRating applies to rating given by the review. The aggregateRating property applies to the review itself, as a creative work.
              *
              * @var $reviewRating Thing_Intangible_Rating
              */
              public $reviewRating;
}