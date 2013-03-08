<?php

class Thing_Intangible_Offer_AggregateOffer extends Thing_Intangible_Offer{

             /**
              * The highest price of all offers available.
              *
              * @var $highPrice Number|string
              */
              public $highPrice;

             /**
              * The lowest price of all offers available.
              *
              * @var $lowPrice Number|string
              */
              public $lowPrice;

             /**
              * The number of offers for the product.
              *
              * @var $offerCount Integer
              */
              public $offerCount;
}