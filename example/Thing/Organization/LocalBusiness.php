<?php

class Thing_Organization_LocalBusiness extends Thing_Organization{

             /**
              * The basic containment relation between places.
              *
              * @var $containedIn Thing_Place
              */
              public $containedIn;

             /**
              * The geo coordinates of the place.
              *
              * @var $geo Thing_Intangible_StructuredValue_GeoCoordinates|Thing_Intangible_StructuredValue_GeoShape
              */
              public $geo;

             /**
              * A URL to a map of the place.
              *
              * @var $map string
              */
              public $map;

             /**
              * A URL to a map of the place (legacy spelling; see singular form, map).
              *
              * @var $maps string
              */
              public $maps;

             /**
              * The opening hours of a certain place.
              *
              * @var $openingHoursSpecification Thing_Intangible_StructuredValue_OpeningHoursSpecification
              */
              public $openingHoursSpecification;

             /**
              * A photograph of this place.
              *
              * @var $photo Thing_CreativeWork_MediaObject_ImageObject|Thing_CreativeWork_Photograph
              */
              public $photo;

             /**
              * Photographs of this place (legacy spelling; see singular form, photo).
              *
              * @var $photos Thing_CreativeWork_MediaObject_ImageObject|Thing_CreativeWork_Photograph
              */
              public $photos;

             /**
              * The larger organization that this local business is a branch of, if any.
              *
              * @var $branchOf Thing_Organization
              */
              public $branchOf;

             /**
              * The currency accepted (in ISO 4217 currency format).
              *
              * @var $currenciesAccepted string
              */
              public $currenciesAccepted;

             /**
              * The opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.- Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times are specified using 24:00 time. For example, 3pm is specified as 15:00. - Here is an example: <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If a business is open 7 days a week, then it can be specified as <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
              *
              * @var $openingHours Thing_Intangible_Quantity_Duration
              */
              public $openingHours;

             /**
              * Cash, credit card, etc.
              *
              * @var $paymentAccepted string
              */
              public $paymentAccepted;

             /**
              * The price range of the business, for example $$$.
              *
              * @var $priceRange string
              */
              public $priceRange;
}